<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/admin');
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
        $this->validate($request,[



            'name'=>'required|min:1',
            'email' => 'required|min:1',
            'phone'=>'required|min:1',
            'password' => 'required|min:1',
            'filename'=>'required|min:1',
            
    
             
    
        ],
            
            
             [
                'name.required' => 'নাম',
                'email.required' => 'ইমেইল',
                'phone.required'=>'ফোন',
                'password.required'=>'পাসওয়ার্ড',
                'filename.required'=>'ছবি'
                
               
    
            ]
            
            
            
            
            );




            if($request->hasfile('filename'))
             {
                 $file = $request->file('filename');
                 $name=time().$file->getClientOriginalName();
                 $file->move(public_path().'/images/', $name);
             }
  
        $user=new User;
        $user->name=$request->get('name');
        $user->email=$request->get('email');
      
        $user->phone=$request->get('phone');
       
        $user->type="super_admin";
       
        $user->password=\Hash::make($request->get('password'));
        $user->image=$name;
        $user->save();
        ///echo "done";

        return redirect('admin_list')->with('success', true); 

















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
        $user = \App\Models\User::find($id);
        $user->delete();
        return redirect('/admin_list')->with('success', true); 
    }
}
