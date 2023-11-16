<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Sector;
use App\Models\Store;

use Illuminate\Http\Request;

class NewsBanglaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=2;
       $details=Sector::where('id',$id)->first();
        
        $news=Store::where('type','news')->orderBy('id','desc')->get();
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $training=Event::orderBy('weight','asc')->get();
       
        $awards=Store::where('id',1)->first();
       /// $news=Store::where('id',1)->first();
  
         view()->share('details',$details);
           view()->share('awards',$awards);
         // view()->share('news',$news);
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('phone',$phone);
        view()->share('news',$news);
        view()->share('training',$training);
        return view('/news');

    
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
