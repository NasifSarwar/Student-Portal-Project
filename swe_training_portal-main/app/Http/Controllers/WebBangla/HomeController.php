<?php

namespace App\Http\Controllers\WebBangla;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Speech;
use App\Models\Sector;
use App\Models\Show;
use App\Models\Event;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $banners=Banner::all();
        $menu = Menu::with('submenu')->get();
        $training=Event::orderBy('weight','asc')->get();
        $speeches=Speech::orderBy('weight','asc')->get();
        $about=Sector::where('id',2)->first();
        $show=Show::orderBy('weight','desc')->limit('1')->first();
        view()->share('banners',$banners);
        view()->share('menu', $menu);
        view()->share('training',$training);
        view()->share('speeches',$speeches);
        view()->share('about',$about);
        view()->share('show',$show);
        return view('web_bangla.home');
    }
}
