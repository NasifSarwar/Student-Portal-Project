<?php

namespace App\Http\Livewire;

use Livewire\Component;



use App\Models\Sector;

use App\Models\Store;

use App\Models\Event;


class Contact extends Component
{
    public function render()
    {
       
        
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $training=Event::orderBy('weight','asc')->get();
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $awards=Store::where('type','awards')->orderBy('id','desc')->limit(4)->get();

        
        
        view()->share('news',$news);
        view()->share('awards',$awards);
        view()->share('training',$training);

        
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('phone',$phone);
        return view('livewire.contact');
    }
}
