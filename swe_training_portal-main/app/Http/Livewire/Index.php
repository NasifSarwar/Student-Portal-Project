<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Banner;
use App\Models\Speech;
use App\Models\Sector;
use App\Models\Show;
use App\Models\Event;

use App\Models\Hit;
use App\Models\Store;
use App\Models\Friend;

///use App\Http\Livewire\News;

class Index extends Component
{
    public function render()
    {
       
        $hit=new Hit; 
        $hit->viewer="1";
        $hit->save();
        $user= Hit::count();
        $banners=Banner::orderBy('weight','asc')->get();
        $training=Event::orderBy('weight','asc')->limit('3')->get();
        ///$training=Event::orderBy('weight','asc')->get();
        $speeches=Speech::orderBy('weight','asc')->get();
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $missions=Sector::where('id',4)->first();
        $vissions=Sector::where('id',5)->first();
        $objectives=Sector::where('id',6)->first();
        $short_description=Sector::where('id',7)->first();
        $show=Show::orderBy('weight','desc')->limit('1')->first();
        $division=Sector::where('id',35)->first();
        $zilla=Sector::where('id',40)->first();
        $school=Sector::where('id',41)->first();
        $student=Sector::where('id',42)->first();
        $contact=Sector::where('id',12)->first();
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $awards=Store::where('type','awards')->orderBy('id','desc')->limit(4)->get();
         $video=Sector::where('id',36)->first();
          $friends=Friend::orderBy('weight','asc')->get();
        
        view()->share('contact',$contact);
        view()->share('user',$user);
        view()->share('banners',$banners);
        
        view()->share('training',$training);
        view()->share('speeches',$speeches);
        view()->share('about',$about);
        view()->share('phone',$phone);
        view()->share('show',$show);
        view()->share('missions',$missions);
        view()->share('vissions',$vissions);
        view()->share('objectives',$objectives);
        view()->share('short_description',$short_description);
        view()->share('division',$division);
        view()->share('zilla',$zilla);
        view()->share('school',$school);
        view()->share('student',$student);
        view()->share('news',$news);
        view()->share('awards',$awards);
        view()->share('video',$video);
         view()->share('friends',$friends);

        return view('livewire.index');
    }

}