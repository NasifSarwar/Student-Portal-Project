<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user=auth()->user();
        $c=$user->id;
        $users=User::all()->where('id',$c);
       /// $users=User::all();
        view()->share('users',$users);
        return view('client/profile');
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
        $user =User::find($id);
        return view('client/profile_edit',compact('user','id'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('photo');
        if($image != '')
        {

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $image_name);
        }


        $form_data = array(
            'name'       =>   $request->name,
            
            'email'  =>   $request->email,
            'phone'  =>   $request->phone,

            'district'  =>   $request->district,

            'institution'  =>   $request->institution,

            'class'  =>   $request->class,
            
            'image'     =>   $image_name
        );

        User::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('user_profile')->with('success', true);
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
