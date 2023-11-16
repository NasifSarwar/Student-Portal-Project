<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Speech;
use App\Models\Sector;
use App\Models\Show;
use App\Models\Event;
use App\Models\Friend;
use App\Models\Hit;
use App\Models\Type;
use App\Models\District;
use App\Models\Document;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $a="email";
        $hit=new Hit;
        $hit->viewer="1";
        $hit->save();
        $banners=Banner::orderBy('weight','asc')->get();
        ///$types=Type::where('position','1');
        $district=District::all();
        $types=Type::where('position',1)->where('type','Category')->orderBy('id','desc')->get();
        $types_second=Type::where('position',2)->where('type','Category')->orderBy('id','desc')->get();
        $types_third=Type::where('position',3)->where('type','Category')->orderBy('id','desc')->get();
        $types_fourth=Type::where('position',4)->where('type','Category')->orderBy('id','desc')->get();
        $category_first=Type::where('position',1)->where('type','Special Trainings')->orderBy('id','desc')->get();
        $category_second=Type::where('position',2)->where('type','Special Trainings')->orderBy('id','desc')->get();
         $category_third=Type::where('position',3)->where('type','Special Trainings')->orderBy('id','desc')->get();
        $category_fourth=Type::where('position',4)->where('type','Special Trainings')->orderBy('id','desc')->get();
        $items=Event::where('status','ongoing')->limit(3)->orderBy('id','desc')->get();
        $upcomings=Event::where('status','upcoming')->limit(8)->get();
        $training=Event::all();
        $speeches=Speech::orderBy('weight','asc')->get();
        ///$email=Sector::where('title',$a)->limit(1)->get();
        $about=Sector::where('id',2)->first();
        $shorts=Sector::where('id',17)->first();
        $phone=Sector::where('id',3)->first();
        $docs=Document::where('id',3)->first();
        $show=Show::orderBy('weight','desc')->limit('1')->first();
        $contacts=Sector::where('id',12)->first();
        $missions=Sector::where('id',14)->first();
        $vissions=Sector::where('id',15)->first();
        $objectives=Sector::where('id',16)->first();
        $short_description=Sector::where('id',17)->first();
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $awards=Store::where('type','awards')->orderBy('id','desc')->limit(4)->get();
        $video=Sector::where('id',44)->first();
        $division=Sector::where('id',8)->first();
        $zilla=Sector::where('id',9)->first();
        $school=Sector::where('id',10)->first();
        $student=Sector::where('id',11)->first();
        $friends=Friend::orderBy('weight','asc')->get();
        $count1 = Event::count();
        $count2 = Event::where('status','ongoing')->count();
        $count3 = Event::where('status','upcoming')->count();
        view()->share('items',$items);
        view()->share('count1',$count1);
        view()->share('count2',$count2);
        view()->share('count3',$count3);
        view()->share('district',$district);
        view()->share('banners',$banners);
        view()->share('upcomings',$upcomings);
        view()->share('types',$types);
        view()->share('types_second',$types_second);
        view()->share('types_third',$types_third);
        view()->share('types_fourth',$types_fourth);
        //view()->share('email',$email);
        view()->share('shorts', $shorts);
        view()->share('docs',$docs);
        view()->share('phone', $phone);
        view()->share('training',$training);
        view()->share('speeches',$speeches);
        view()->share('about',$about);
        view()->share('show',$show);
        view()->share('contacts',$contacts);
        view()->share('missions',$missions);
        view()->share('vissions',$vissions);
        view()->share('objectives',$objectives);
        view()->share('short_description',$short_description);
        view()->share('news',$news);
        view()->share('awards',$awards);
        view()->share('video',$video);
          view()->share('division',$division);
        view()->share('zilla',$zilla);
        view()->share('school',$school);
        view()->share('student',$student);
         view()->share('friends',$friends);
         view()->share('category_first',$category_first);
         view()->share('category_second',$category_second);
         view()->share('category_third',$category_third);
         view()->share('category_fourth',$category_fourth);
         
        return view('index_bangla');


       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}