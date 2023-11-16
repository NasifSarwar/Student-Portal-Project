<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Sector;
use App\Models\Store;
use Livewire\Component;

class Awards extends Component
{
    public function render()
    {
        $awards=Store::where('type','awards')->orderBy('id','desc')->paginate(8);
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $contact=Sector::where('id',12)->first();
        $training=Event::orderBy('weight','asc')->get();
        
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('news',$news);
        view()->share('phone',$phone);
        view()->share('awards',$awards);
        view()->share('training',$training);
        return view('livewire.awards');
    }
}
