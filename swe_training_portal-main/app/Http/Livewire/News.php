<?php

namespace App\Http\Livewire;
use App\Models\Event;
use App\Models\Sector;
use App\Models\Store;
use Livewire\Component;

class News extends Component
{
    public function render()
    {
        $news=Store::where('type','news')->orderBy('id','desc')->paginate(8);
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $training=Event::orderBy('weight','asc')->get();
        $training=Event::orderBy('weight','asc')->get();
        
        $awards=Store::where('type','awards')->orderBy('id','desc')->limit(4)->get();


         view()->share('news',$news);
        view()->share('awards',$awards);
        view()->share('training',$training);
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('phone',$phone);
       
        view()->share('training',$training);
        return view('livewire.news');
    }
}
