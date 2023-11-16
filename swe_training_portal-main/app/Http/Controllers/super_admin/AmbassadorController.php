<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ambassador;
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
        $items=District::all();
        
        view()->share('items',$items);

        return view('super_admin/ambassador');
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
            'roll_no'=>'required|min:1',
            'institute' => 'required|min:1',
            'phone'=>'required|min:1',

            'email' => 'required|min:1',

            'fathers_name'=>'required|min:1',

            'mothers_name' => 'required|min:1',

            'district_id'=>'required|min:1',
           

        ],
            
            
             [
                'name.required'=>'ছাত্রীর নাম',
                'roll_no.required' => 'ক্রমিক নাম্বার',
                'institute.required' => 'শিক্ষা প্রতিষ্ঠান ',
                'phone.required' => 'ফোন',
                'email.required' => 'ইমেইল',
                'fathers_name.required'=>'পিতার নাম ',
                'mothers_name.required'=>'মাতার নাম ',
                'district_id.required'=>'জেলা',
                
                

            ]

             );

             $ambassador=new Ambassador;
           
             $ambassador->name=$request->get('name');
             $ambassador->roll_no=$request->get('roll_no');
       
             $ambassador->institute=$request->get('institute');
       
             $ambassador->phone=$request->get('phone');
             
             $ambassador->email=$request->get('email');

             $ambassador->fathers_name=$request->get('fathers_name');
             
             $ambassador->mothers_name=$request->get('mothers_name');

             $ambassador->district_id=$request->get('district_id');

             $ambassador->save();

             ////echo "done";

             return redirect('/ambassador_list')->with('success', true);

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
        $items=District::all();
         view()->share('items',$items);
        $ambassador =Ambassador::find($id);
        return view('super_admin/ambassador_edit',compact('ambassador','id'));
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


            'name'=>'required|min:1',
            'roll_no'=>'required|min:1',
            'institute' => 'required|min:1',
            'phone'=>'required|min:1',

            'email' => 'required|min:1',

            'fathers_name'=>'required|min:1',

            'mothers_name' => 'required|min:1',

            'district_id'=>'required|min:1',
           

        ],
            
            
             [
                'name.required'=>'ছাত্রীর নাম',
                'roll_no.required' => 'ক্রমিক নাম্বার',
                'institute.required' => 'শিক্ষা প্রতিষ্ঠান ',
                'phone.required' => 'ফোন',
                'email.required' => 'ইমেইল',
                'fathers_name.required'=>'পিতার নাম ',
                'mothers_name.required'=>'মাতার নাম ',
                'district_id.required'=>'জেলা',
                
                

            ]

             ); 









        $form_data = array(
            
            'name'=>$request->name,
            'roll_no'       =>   $request->roll_no,
            'institute'        =>  $request->institute,
            'phone'  =>  $request->phone,
            'email'       =>   $request->email,
            'fathers_name'        =>  $request->fathers_name,
            'mothers_name'  =>  $request->mothers_name,
           
        );

        Ambassador::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('/ambassador_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ambassador = \App\Models\Ambassador::find($id);
        $ambassador->delete();
        return redirect('/ambassador_list')->with('success', true);
    }
}
