<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $d['categories'] = Category::count();
        $d['product'] = Product::count();
        $d['user'] = User::count();
        return view('dashboard', $d);
    }
}
