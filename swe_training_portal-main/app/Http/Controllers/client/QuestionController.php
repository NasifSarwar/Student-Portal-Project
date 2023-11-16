<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client/question');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

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



           
          
            'question'=>'required|min:1',

           
           

        ],
            
            
             [
               
               
                'question.required'=>'আপনার প্রশ্ন ',
               
                

            ]

             );

             $user=auth()->user();
             $user_id=$user->id;
             $name=$user->name;
             $district=$user->district;
             $institution=$user->institution;
             $class=$user->class;
             $phone=$user->phone;
             $que=$request->get('question');

             $question=new Question;
             
             $question->user_id= $user_id;
      
             $question->name=$name;

             $question->class=$class;

             $question->phone=$phone;
       
             $question->district=$district;
             
             $question->institution= $institution;
              
             $question->question=$que;
 
           
       
             $question->save();

             return redirect('/question_list')->with('success', true);




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
