<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/create_banner');
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
            'title' => 'required|min:1',
            'title_bangla'=>'required|min:1',

          

             'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ],
            
            
             [
                'weight.required' => 'ব্যানারের সিরিয়াল নাম্বার ',
                'title.required' => 'ব্যানারের ইংলিশ টাইটেল ',
                'title_bangla.required'=>'ব্যানারের বাংলা টাইটেল ',
                
                'photo.required'=>'ব্যানারের ছবি আপলোড করুন'

            ]
            
            
            
            
            );


           if($request->hasfile('photo'))
            {
            $file = $request->file('photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
           }


            $banner=new Banner;


            $banner->weight=$request->get('weight');
      
            $banner->title=$request->get('title');
      
            $banner->title_bangla=$request->get('title_bangla');
            
             $banner->slogan="N/A";
             
            $banner->slogan_bangla="N/A";

            $banner->image=$name;
      
            $banner->save();
       
           
          return redirect('/banner_list')->with('success', true);




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
        $banner =Banner::find($id);
        return view('super_admin/banner_edit',compact('banner','id'));
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
        'title' => 'required|min:1',
        'title_bangla'=>'required|min:1',

        

         

    ],
        
        
         [
            'weight.required' => 'ব্যানারের সিরিয়াল নাম্বার ',
            'title.required' => 'ব্যানারের ইংলিশ টাইটেল ',
            'title_bangla.required'=>'ব্যানারের বাংলা টাইটেল ',
         

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
            'title'       =>   $request->title,
            'slogan'        =>  "N/A",
            'title_bangla'  =>  $request->title_bangla,
            'slogan_bangla'=>  "N/A",
            'image'     =>   $image_name
        );

        Banner::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('/banner_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = \App\Models\Banner::find($id);
        $banner->delete();
        return redirect('/banner_list')->with('success', true);
    }
}
