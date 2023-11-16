<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Banner;
use App\Models\Speech;
use App\Models\Sector;
use App\Models\Show;
use App\Models\Event;
use App\Models\Menu;
use App\Models\Hit;
use App\Models\Store;

class Banglaawards extends Component
{
    public function render()
    {
        $awards=Store::where('type','awards')->orderBy('id','desc')->get();
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $training=Event::orderBy('weight','asc')->get();
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('phone',$phone);
        view()->share('news',$news);
        view()->share('awards',$awards);
        view()->share('training',$training);
        return view('livewire.banglaawards');
    }
}
