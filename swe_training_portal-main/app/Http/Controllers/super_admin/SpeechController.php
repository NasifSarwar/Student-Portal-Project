<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speech;

class SpeechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/speech');
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



            'weight'=>'required|min:1',
            'name_english' => 'required|min:1',
            'name_bangla' => 'required|min:1',
            'designation_bangla' => 'required|min:1',
            'designation_english' => 'required|min:1',
           

            'speech_bangla' => 'required|min:1',
            'speech_english' => 'required|min:1',

             'filename'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ],
            
            
             [
                'weight.required' => 'সিরিয়াল নাম্বার',
                'name_english.required' => 'নাম(ইংলিশ)',
                'name_bangla.required'=>'নাম(বাংলা )',
                'designation_english.required'=>'পদবি(ইংলিশ)',
                'designation_bangla.required'=>'পদবি(বাংলা)',
                'speech_bangla.required'=>'বক্তব্য(বাংলা)',
                'speech_english.required'=>'বক্তব্য(ইংলিশ)',

                'filename.required'=>'ছবি আপলোড করুন'

            ]
            
            
            
            
            );









        if($request->hasfile('filename'))
            {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
           }


            $speech=new Speech;


            $speech->weight=$request->get('weight');
      
            $speech->name_english=$request->get('name_english');
      
            $speech->name_bangla=$request->get('name_bangla');
            
            $speech->designation_bangla=$request->get('designation_bangla');

            $speech->designation_english=$request->get('designation_english');
             
            $speech->speech_bangla=$request->get('speech_bangla');

            $speech->speech_english=$request->get('speech_english');

            $speech->filename=$name;
      
            $speech->save();

           /// echo "done";
       
           
            return redirect('/speech_list')->with('success', true);
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
        $speech =Speech::find($id);
        return view('super_admin/speech_edit',compact('speech','id'));
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



            'weight'=>'required|min:1',
            'name_english' => 'required|min:1',
            'name_bangla' => 'required|min:1',
            'designation_bangla' => 'required|min:1',
            'designation_english' => 'required|min:1',
           

            'speech_bangla' => 'required|min:1',
            'speech_english' => 'required|min:1',

             

        ],
            
            
             [
                'weight.required' => 'সিরিয়াল নাম্বার',
                'name_english.required' => 'নাম(ইংলিশ)',
                'name_bangla.required'=>'নাম(বাংলা )',
                'designation_english.required'=>'পদবি(ইংলিশ)',
                'designation_bangla.required'=>'পদবি(বাংলা)',
                'speech_bangla.required'=>'বক্তব্য(বাংলা)',
                'speech_english.required'=>'বক্তব্য(ইংলিশ)',

                

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
                'name_english'       =>   $request->name_english,
                'name_bangla'        =>  $request->name_bangla,
                'designation_bangla'  =>  $request->designation_bangla,
                'designation_english'=>  $request->designation_english,
                'speech_bangla'  =>  $request->speech_bangla,
                'speech_english'=>  $request->speech_english,
                'filename'     =>   $image_name
            );
    
            Speech::whereId($id)->update($form_data);
    
            ///echo "updated";
    
            return redirect('/speech_list')->with('success', true);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speech = \App\Models\Speech::find($id);
        $speech->delete();
        return redirect('/speech_list')->with('success', true);
    }
}
