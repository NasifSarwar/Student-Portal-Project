<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\Menu;


class SectorBanglaController extends Controller
{
    public function index()
    {
        $about=Sector::where('id',2)->first();
        $menu = Menu::with('submenu')->get();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('phone',$phone);
        view()->share('menu', $menu);
        return view('single_bangla');
    }
}