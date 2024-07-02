<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menu1 = Menu::first();
        $menu2 = Menu::skip(1)->first();
        $menu3 = Menu::skip(2)->first();
        $menu4 = Menu::skip(3)->first();
        $menu5 = Menu::skip(4)->first();
        return view('layanan', compact('menu1', 'menu2', 'menu3', 'menu4', 'menu5'));
    }
}
