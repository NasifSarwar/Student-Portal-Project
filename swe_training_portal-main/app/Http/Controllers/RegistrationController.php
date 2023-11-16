<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Models\Menu;

use App\Models\District;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $districts=District::all();
        $events=Event::orderBy('id','asc')->paginate(20);
        $menu = Menu::with('submenu')->get();
        $training=Event::orderBy('weight','asc')->get();
        view()->share('menu', $menu);
        view()->share('districts',$districts);
        view()->share('training',$training);
        view()->share('events',$events);
        return view('registration_bn');
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
            'district'=>'required|min:1',

            'institution' => 'required|min:1',

            'class' => 'required|min:1',

            

        ],
            
            
             [
                'name.required' => 'আপনার নাম:',
                'email.required' => 'আপনার ইমেইল',
                'district.required'=>'আপনার জেলা',
                'institution.required'=>'আপনার শিক্ষা প্রতিষ্ঠান',
                'class.required'=>'আপনার শ্রেণী ',
            

            ]
            
            
            
            
            );












      
       $image_check=$request->file('photo');

      if( $image_check != null){

        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
  
      
        $register=new Register;
  
  
        $register->name=$request->get('name');
  
        $register->email=$request->get('email');
  
        $register->district=$request->get('district');
        
        $register->institution=$request->get('institution');

        $register->phone=$request->get('phone');

        $register->class=$request->get('class');

        
        $register->image=$name;
  
        $register->save();
  
        return redirect('/registration')->with('success', true);

    }
    else{

        $register=new Register;
  
  
        $register->name=$request->get('name');
  
        $register->email=$request->get('email');
  
        $register->district=$request->get('district');
        
        $register->institution=$request->get('institution');

        $register->phone=$request->get('phone');

        $register->class=$request->get('class');

        
        $register->image="N/A";
  
        $register->save();
  
        return redirect('/registration_bn')->with('success', true);








    }





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
