<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Partner;
use Illuminate\Support\Facades\File;



class MenuController extends Controller
{
    public function menu($id)
    {
        // echo $partner_id;
        $partners = Partner::find($id);


        // echo $id;

        $menuItems = Menu::get();

        // Filter the menu items by the partner_id
        $filteredMenuItems = $menuItems->where('partner_id', $id);

        // Return the filtered items (in JSON or to a view)
        // return $filteredMenuItems;

        return view('menu/menu', [
            'partner' => $partners
        ], compact(
            'filteredMenuItems',
            'partners'
        ));
    }
    public function create()
    {

        // Filter the menu items by the partner_id
        $partners = Partner::get();

        return view('menu/add_menu', compact('partners'));
    }

    public function store(Request $request, $id)
    {
        // dd($request->all());
        // dd($id); // Untuk debugging, periksa nilai $partner_id

        $menu = request()->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required',
            // 'partner_id' => 'required',
        ]);

        $filePath = public_path('uploads/menu');
        $menu  = new Menu;
        $menu->name = ($request->name);
        $menu->partner_id = ($id); // Menggunakan nilai $id yang diterima dari URL
        $menu->deskripsi = ($request->deskripsi);
        $file = $request->file('photo');
        $file_name = time() . $file->getClientOriginalName();

        $file->move($filePath, $file_name);
        $menu->photo = $file_name;

        $menu->save();
        return redirect()->route('menus', ['partner' => $id]);
    }

    public function edit($partnerId, $menuId)
    {
        $partner = Partner::findOrFail($partnerId);
        $menu = Menu::findOrFail($menuId);

        // Lakukan sesuatu dengan $partner dan $menu
        return view('menu/edit_menu', compact('partner', 'menu'));
    }

    public function update(Request $request, $partnerId, $menuId)
    {
        // Temukan instance Menu yang ada
        $menu = Menu::findOrFail($menuId);

        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'photo' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048', // Photo tidak wajib, tetapi harus gambar jika ada
        ]);

        // Perbarui properti dari instance yang ditemukan
        $menu->name = $validatedData['name'];
        $menu->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('photo')) {
            // Tangani file unggahan dan perbarui foto jika ada
            $filePath = public_path('uploads/menu');
            $file = $request->file('photo');
            $file_name = time() . '_' . $file->getClientOriginalName();

            // Pindahkan file ke folder uploads
            $file->move($filePath, $file_name);

            // Hapus foto lama jika ada
            if (!is_null($menu->photo)) {
                $oldImage = public_path('uploads/menu/' . $menu->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            // Perbarui kolom foto
            $menu->photo = $file_name;
        }

        // Simpan perubahan
        $menu->save();

        // Redirect ke halaman partner
        return redirect()->route('menus', ['partner' => $partnerId]);
    }
}
