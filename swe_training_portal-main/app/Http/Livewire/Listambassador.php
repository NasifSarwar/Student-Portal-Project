<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Banner;
use App\Models\Speech;
use App\Models\Sector;
use App\Models\Show;
use App\Models\Event;

use App\Models\Store;

use App\Models\District;

class Listambassador extends Component
{
    public function render()
    {

        $banners=Banner::all();
        
        $districts = District::with('ambassador')->orderBy('id','desc')->paginate(3);
        $training=Event::orderBy('weight','asc')->get();
        $speeches=Speech::orderBy('weight','asc')->get();
        $about=Sector::where('id',2)->first();
        $show=Show::orderBy('weight','desc')->limit('1')->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        ///$training=Event::orderBy('weight','asc')->get();
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $awards=Store::where('type','awards')->orderBy('id','desc')->limit(4)->get();



       view()->share('news',$news);
      view()->share('awards',$awards);
      ///view()->share('training',$training);



        view()->share('contact',$contact);
      
       view()->share('phone',$phone);
        view()->share('banners',$banners);
       
        view()->share('training',$training);
        view()->share('speeches',$speeches);
        view()->share('about',$about);
        view()->share('show',$show);
        view()->share('districts',$districts);
      

        return view('livewire.listambassador');
    }
}
