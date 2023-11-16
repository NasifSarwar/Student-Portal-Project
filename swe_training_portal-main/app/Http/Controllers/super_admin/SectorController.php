<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sector;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/sector');
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
          if($request->hasfile('filename'))
            {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
           }
        $sector=new Sector;
 
 
        $sector->title=$request->get('title');
  
        $sector->description=$request->get('description');
        $sector->link=$request->get('link');
        $sector->filename=$name;
  
        $sector->save();

        return redirect('/sector_list')->with('success', true);

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
        $sector =Sector::find($id);
        return view('super_admin/sector_edit',compact('sector','id'));
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



           
            'title' => 'required|min:1',
            'description'=>'required|min:1',

           
           

        ],
            
            
             [
               
                'title.required' => 'কন্টেন্টের নাম',
                'description.required'=>'বিস্তারিত  ',
               
                

            ]

             );


 



       $image_name = $request->hidden_image;
        $image = $request->file('filename');
        if($image != '')
        {

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $image_name);
        }

        $form_data = array(
           
            'title'        =>  $request->title,
            'description'  =>  $request->description,
              'link'  =>  $request->link,
             'filename'     =>   $image_name
           
        );

        Sector::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('/sector_list')->with('success', true);
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
