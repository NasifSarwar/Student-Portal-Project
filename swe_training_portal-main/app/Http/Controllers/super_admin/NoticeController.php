<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/create_notice');
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



            'date'=>'required|min:1',
            'name' => 'required|min:1',
            'notice_bangla'=>'required|min:1',

            'filename'=>'required|mimes:pdf|max:2048',

        ],
            
            
             [
                'date.required' => 'নোটিসের তারিখ ',
                'name.required' => 'নোটিসের টাইটেল(ইংলিশ)',
                'notice_bangla.required'=>'নোটিসের টাইটেল(বাংলা)',
                'filename.required'=>'পিডিএফ ফাইল আপলোড করুন'
                

            ]
            
            
            
            
            );


           if($request->hasfile('filename'))
            {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
           }


            $notice=new Notice;


            $notice->date=$request->get('date');
      
            $notice->name=$request->get('name');
      
            $notice->notice_bangla=$request->get('notice_bangla');
            
           
            $notice->filename=$name;
      
            $notice->save();

           //// echo "done";
       
           
            return redirect('/notice_list')->with('success', true);
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
        $notice =Notice::find($id);
        return view('super_admin/notice_edit',compact('notice','id'));
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



            'date'=>'required|min:1',
            'name' => 'required|min:1',
            'notice_bangla'=>'required|min:1',

            

        ],
            
            
             [
                'date.required' => 'নোটিসের তারিখ ',
                'name.required' => 'নোটিসের টাইটেল(ইংলিশ)',
                'notice_bangla.required'=>'নোটিসের টাইটেল(বাংলা)',
                
                

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
                'date'=> $request->date,
                'name'       =>   $request->name,
                'notice_bangla'        =>  $request->notice_bangla,
                
                'filename'     =>    $image_name
            );
    
            Notice::whereId($id)->update($form_data);
    
            ///echo "updated";
    
            return redirect('/notice_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = \App\Models\Notice::find($id);
        $notice->delete();
        return redirect('/notice_list')->with('success', true);
    }
}
