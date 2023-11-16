<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;
use Livewire\Component;

use App\Models\Show;
use App\Models\Sector;


class VideoBanglaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vidos=Show::orderBy('weight','asc')->Paginate(6);
      
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        view()->share('contact',$contact);
        view()->share('about',$about);
        view()->share('phone',$phone);
        view()->share('vidos', $vidos);
       
        return view('video_bangla');
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
