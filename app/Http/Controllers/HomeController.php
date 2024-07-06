<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data partner dari model Partner
        $partners = Partner::all();

        // Kembalikan view index.blade.php dengan data partner
        return view('index', compact('partners'));
    }
}
