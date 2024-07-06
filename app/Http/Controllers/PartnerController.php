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
        $partners = Partner::all();
        return view('partner/partner', compact('partners'));
    }

    public function create()
    {
        return view('partner/add_partner');
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $partner = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required',
        ]);

        // Handle file upload
        $filePath = public_path('uploads');
        $file = $request->file('photo');
        $file_name = time() . $file->getClientOriginalName();
        $file->move($filePath, $file_name);

        // Simpan data partner
        $partner = new Partner;
        $partner->name = $request->name;
        $partner->deskripsi = $request->deskripsi;
        $partner->photo = $file_name;
        $partner->save();

        return redirect('partner');
    }

    public function update($id, Request $request)
    {
        $update = Partner::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'photo' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $update->name = $validatedData['name'];
        $update->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('photo')) {
            $filePath = public_path('uploads');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            $update->photo = $file_name;
        }

        $update->save();

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
