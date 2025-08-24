<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\FAQ;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $totalProducts = Product::count();
        $totalUsers = User::count();
        $totalFaqs = FAQ::count();
        $totalBlogs = Blog::count();
        $recentProducts = Product::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalProducts', 'totalUsers', 'totalFaqs', 'totalBlogs', 'recentProducts'));
    }
}
