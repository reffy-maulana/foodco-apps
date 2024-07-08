<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{


    public function store(Request $request)
    {
        // Validasi inputan
        $berita = $request->validate([
            'headline' => 'required',
            'author' => 'required',
            'type' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file upload
        $filePath = public_path('uploads/news');
        $file = $request->file('photo');
        $file_name = time() . $file->getClientOriginalName();
        $file->move($filePath, $file_name);

        // Simpan data partner
        $berita = new News;
        $berita->headline = $request->headline;
        $berita->author = $request->author;
        $berita->type = $request->type;
        $berita->deskripsi = $request->deskripsi;
        $berita->photo = $file_name;
        $berita->save();

        return redirect('admin/news');
    }

    public function update($id, Request $request)
    {
        $update = News::findOrFail($id);

        $validatedData = $request->validate([
            'headline' => 'required',
            'author' => 'required',
            'type' => 'required',
            'deskripsi' => 'required',
            'photo' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $update->headline = $validatedData['headline'];
        $update->author = $validatedData['author'];
        $update->type = $validatedData['type'];
        $update->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('photo')) {
            $filePath = public_path('uploads/news');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/news' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            $update->photo = $file_name;
        }

        $update->save();

        return redirect('admin/news');
    }

    public function destroy($id)
    {
        $delete = News::findOrFail($id);
        File::delete(public_path('uploads/news' . $delete->photo));
        $delete->delete();

        return redirect('admin/news');
    }
}
