<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
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
        return view('partner/add_partner');;
        
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
        
        
    }
}
