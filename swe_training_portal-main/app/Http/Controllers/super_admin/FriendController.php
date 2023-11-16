<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/create_friend');
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



            'weight' => 'required|min:1',
          
            'name_bn'=>'required|min:1',

           
           

        ],
            
            
             [
                'weight.required'=>'সিরিয়েল নাম্বার', 
                
                'name_bn.required' => 'লিংক '
              
                

            ]

             );


      if($request->hasfile('photo'))
            {
            $file = $request->file('photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
          }







        $friend=new Friend;


           
       
        $friend->weight=$request->get('weight');
  
        $friend->name_en="N/A";
        
        $friend->name_bn=$request->get('name_bn');

        $friend->image=$name;

        $friend->save();

        return redirect('/friend_list')->with('success', true);
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
        $friend =Friend::find($id);
        return view('super_admin/friend_edit',compact('friend','id'));
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

        $this->validate($request,[



            'weight' => 'required|min:1',
           
            'name_bn'=>'required|min:1',

           
           

        ],
            
            
             [
                'weight.required'=>'সিরিয়েল নাম্বার', 
              
                'name_bn.required' => 'নাম বাংলায় '
              
                

            ]

             );
             
             
             
        $image_name = $request->hidden_image;
        $image = $request->file('photo');
        if($image != '')
        {

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $image_name);
        }




        $form_data = array(
            'weight'=> $request->weight,
            
            'name_en'  => "n/a",
            'name_bn'=>$request->name_bn,
            'image'=>$image_name
           
        );

        Friend::whereId($id)->update($form_data);

        return redirect('/friend_list')->with('success', true);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $friend = \App\Models\Friend::find($id);
        $friend->delete();
        return redirect('/friend_list')->with('success', true);
    }
}
