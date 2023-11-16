<?php

namespace App\Http\Livewire;
use App\Models\Sector;
use Livewire\Component;

use App\Models\Event;
use App\Models\Store;


class AboutUs extends Component
{
    public function render()
    {
        $about=Sector::where('id',2)->first();
       
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $details=Sector::where('id',13)->first();
        $training=Event::orderBy('weight','asc')->get();
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $awards=Store::where('type','awards')->orderBy('id','desc')->limit(4)->get();


         view()->share('news',$news);
         view()->share('awards',$awards);
         view()->share('training',$training);
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('phone',$phone);
       
        view()->share('about',$about);
        view()->share('details',$details);
        return view('livewire.about-us');
    }
}
