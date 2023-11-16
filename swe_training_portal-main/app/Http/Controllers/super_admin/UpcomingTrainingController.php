<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam; 

class UpcomingTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/new_training');
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



           
            'title_en' => 'required|min:1',
            'title_bn'=>'required|min:1',
            'date' => 'required|min:1',
            'place_bn'=>'required|min:1',
            'place_en'=>'required|min:1',
            'comments_bn'=>'required|min:1',
            'comments_en'=>'required|min:1',

        ],
            
            
             [
               
                'title_en.required' => 'শিরোনাম(ইংলিশ)',
                'title_bn.required'=>'শিরোনাম(বাংলা) ',
                'date.required' => 'তারিখ',
                'place_bn.required'=>'স্থান(ইংলিশ)',
                'place_en.required'=>'স্থান(বাংলা)',
                'comments_bn.required'=>'মন্তব্য(ইংলিশ)',
                'comments_en.required'=>'মন্তব্য(বাংলা)',
                

            ]

             );







        $exam=new Exam;

        $exam->title_en=$request->get('title_en');
  
        $exam->title_bn=$request->get('title_bn');
        
        $exam->date=$request->get('date');

        $exam->place_en=$request->get('place_en');

        $exam->place_bn=$request->get('place_bn');

        $exam->comments_en=$request->get('comments_en');
        
        $exam->comments_bn=$request->get('comments_bn');


        $exam->save();

        return redirect('/upcoming_training_list')->with('success', true);
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
        $exam =Exam::find($id);
        return view('super_admin/upcoming_training_edit',compact('exam','id'));
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



           
            'title_en' => 'required|min:1',
            'title_bn'=>'required|min:1',
            'date' => 'required|min:1',
            'place_bn'=>'required|min:1',
            'place_en'=>'required|min:1',
            'comments_bn'=>'required|min:1',
            'comments_en'=>'required|min:1',

        ],
            
            
             [
               
                'title_en.required' => 'শিরোনাম(ইংলিশ)',
                'title_bn.required'=>'শিরোনাম(বাংলা) ',
                'date.required' => 'তারিখ',
                'place_bn.required'=>'স্থান(ইংলিশ)',
                'place_en.required'=>'স্থান(বাংলা)',
                'comments_bn.required'=>'মন্তব্য(ইংলিশ)',
                'comments_en.required'=>'মন্তব্য(বাংলা)',
                

            ]

             );








        $form_data = array(
            
            'title_en'       =>   $request->title_en,
            'title_bn'        =>  $request->title_bn,
            'date'  =>  $request->date,
            'place_bn'=>$request->place_bn,
            'place_en'=>$request->place_en,
            'comments_en'=>$request->comments_en,
            'comments_bn'=>$request->comments_bn,
           
        );

        Exam::whereId($id)->update($form_data);
        return redirect('/upcoming_training_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam= \App\Models\Exam::find($id);
        $exam->delete();
        return redirect('/upcoming_training_list')->with('success', true);

    }
}
