<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Event;



use App\Models\Sector;

use App\Models\Banner;
use App\Models\Speech;

use App\Models\Show;

use App\Models\Store;




class Faq extends Component
{
    public function render()
    {
        $banners=Banner::all();
     
        $training=Event::orderBy('weight','asc')->get()->toArray();
        $speeches=Speech::orderBy('weight','asc')->get();
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $missions=Sector::where('id',4)->first();
        $vissions=Sector::where('id',5)->first();
        $objectives=Sector::where('id',6)->first();
        $short_description=Sector::where('id',7)->first();
        $show=Show::orderBy('weight','desc')->limit('1')->first();
        $division=Sector::where('id',8)->first();
        $zilla=Sector::where('id',9)->first();
        $school=Sector::where('id',10)->first();
        $student=Sector::where('id',11)->first();
        $contact=Sector::where('id',12)->first();
        $faq=Sector::where('id',19)->first();
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $awards=Store::where('type','awards')->orderBy('id','desc')->limit(4)->get();


        view()->share('news',$news);
        view()->share('awards',$awards);
        view()->share('contact',$contact);
        view()->share('banners',$banners);
       
        ///view()->share('training',$training);
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
        view()->share('faq',$faq);

        return view('livewire.faq',compact('training'));
    }
}
