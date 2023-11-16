<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Event;



use App\Models\Sector;

class Traininglist extends Component
{
    public function render()
    {
        $events=Event::orderBy('id','asc')->paginate(20);
       
        $about=Sector::where('id',2)->first();
       $phone=Sector::where('id',3)->first();
       $contact=Sector::where('id',12)->first();
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('phone',$phone);
        
        view()->share('events',$events);
        return view('livewire.traininglist');
    }
}
