<?php

namespace App\Http\Controllers\super_admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Show;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/create_video');
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
           
            'source'=>'required|min:1'

            

        ],
            
            
             [
                'weight.required' => 'সিরিয়েল নাম্বার ',
               
                'source.required'=>'ভিডিওর লিংক'
                

            ]
            
            
            
            
            );


           if($request->hasfile('filename'))
            {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
           }


            $vido=new Show;


            $vido->weight=$request->get('weight');
      
            $vido->video_caption_english="N/A";
      
            $vido->video_caption_bangla="N/A";

            $vido->source=$request->get('source');
            
            $vido->save();

            /// echo "done";
       
           
            return redirect('/video_list')->with('success', true);
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
        $show =Show::find($id);
        return view('super_admin/video_edit',compact('show','id'));
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
           
            'source'=>'required|min:1'

            

        ],
            
            
             [
                'weight.required' => 'সিরিয়েল নাম্বার ',
             
                'source.required'=>'ভিডিওর লিংক'
                

            ]
            
            
            
            
            );

        $form_data = array(
            'weight'=> $request->weight,
            
            'source'  =>  $request->source
           
        );

        Show::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('/video_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = \App\Models\Show::find($id);
        $video->delete();
        return redirect('/video_list')->with('success', true);
    }
}
