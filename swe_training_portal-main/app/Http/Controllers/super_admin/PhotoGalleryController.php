<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        return view('super_admin/create_photo');
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
            'photo_caption_english' => 'required|min:1',
            'photo_caption_bangla'=>'required|min:1',

            'filename'=>'required|mimes:jpeg,png|max:2048',

        ],
            
            
             [
                'weight.required' => 'সিরিয়েল নাম্বার ',
                'photo_caption_english.required' => 'ছবির ক্যাপশন (ইংলিশ)',
                'photo_caption_bangla.required'=>'ছবির ক্যাপশন (বাংলা)',
                'filename.required'=>'jpg,png ফাইল আপলোড করুন'
                

            ]
            
            
            
            
            );


           if($request->hasfile('filename'))
            {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
           }


            $photo=new Photo;


            $photo->weight=$request->get('weight');
      
            $photo->photo_caption_english=$request->get('photo_caption_english');
      
            $photo->photo_caption_bangla=$request->get('photo_caption_bangla');
            
           
            $photo->filename=$name;
      
            $photo->save();

            /// echo "done";
       
           
            return redirect('/photo_list')->with('success', true);
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
        $photo =Photo::find($id);
        return view('super_admin/photo_edit',compact('photo','id'));
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
            'photo_caption_english' => 'required|min:1',
            'photo_caption_bangla'=>'required|min:1',

           

        ],
            
            
             [
                'weight.required' => 'সিরিয়েল নাম্বার ',
                'photo_caption_english.required' => 'ছবির ক্যাপশন (ইংলিশ)',
                'photo_caption_bangla.required'=>'ছবির ক্যাপশন (বাংলা)',
               
                

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
                'photo_caption_english'       => $request->photo_caption_english,
                'photo_caption_bangla'        =>  $request->photo_caption_bangla,
                
                'filename'     =>   $image_name
            );
    
            Photo::whereId($id)->update($form_data);
    
            ///echo "updated";
    
            return redirect('/photo_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = \App\Models\Photo::find($id);
        $photo->delete();
        return redirect('/photo_list')->with('success', true);
    }
}
