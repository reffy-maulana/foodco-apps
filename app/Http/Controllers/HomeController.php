<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data partner dari model Partner
        $news = News::all();
        $partners = Partner::all();

        // Kembalikan view index.blade.php dengan data partner
        return view('index', compact('partners', 'news'));
    }
}
