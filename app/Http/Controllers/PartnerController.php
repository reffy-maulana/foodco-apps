<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\File;


use Auth;


class PartnerController extends Controller
{
    public function partner()
    {
        // return Partner::get();
        $partners = Partner::get();
        return view('partner/partner', compact('partners'));
    }
    public function create()
    {
        return view('partner/add_partner');
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $partner = request()->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required',
        ]);

        $filePath = public_path('uploads');
        $partner  = new Partner;
        $partner->name = ($request->name);
        $partner->deskripsi = ($request->deskripsi);
        $file = $request->file('photo');
        $file_name = time() . $file->getClientOriginalName();

        $file->move($filePath, $file_name);
        $partner->photo = $file_name;



        $partner->save();
        return redirect('partner');
    }

    public function update($id, Request $request)
    {
        // Temukan instance Partner yang ada
        $update = Partner::findOrFail($id);

        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'photo' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048', // Photo tidak wajib, tetapi harus gambar jika ada
        ]);

        // Perbarui properti dari instance yang ditemukan
        $update->name = $validatedData['name'];
        $update->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('photo')) {
            // Tangani file unggahan dan perbarui foto jika ada
            $filePath = public_path('uploads');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();

            // Pindahkan file ke folder uploads
            $file->move($filePath, $file_name);

            // Hapus foto lama jika ada
            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            // Perbarui kolom foto
            $update->photo = $file_name;
        }

        // Simpan perubahan
        $update->save();

        // Redirect ke halaman partner
        return redirect('partner');
    }

    public function destroy($id)
    {
        $delete = Partner::findOrFail($id);
        File::delete(public_path('uploads/' . $delete->photo));
        $delete->delete();

        return redirect('partner');
    }
}
