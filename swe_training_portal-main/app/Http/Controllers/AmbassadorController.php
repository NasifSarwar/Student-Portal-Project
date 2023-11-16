<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Speech;
use App\Models\Sector;
use App\Models\Show;
use App\Models\Event;

use App\Models\Store;

use App\Models\District;




class AmbassadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        return view('ambassador');
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
