<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\District;
use App\Models\Type;
use Auth;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $districts=District::all();
        $types=Type::where('type','Special Trainings')->orderBy('id','desc')->get();
        view()->share('districts',$districts);
        view()->share('types',$types);
        return view('super_admin/create_special');
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



            'start_date'=>'required|min:1',
            'end_date' => 'required|min:1',
            'description'=>'required|min:1',
            'training_id'=>'required|min:1',
            'category_id'=>'required|min:1',
           
            'training_name'=>'required|min:1',


             'filename'=>'required|min:1'

        ],
            
            
             [
                'start_date.required' => 'Enter start date ',
                'end_date.required' => 'Enter training end date',
                'description.required'=>'Enter description',
                
                'training_id.required'=>'Enter district  ',
                
                'category_id.required'=>'Enter category ',
                'filename.required'=>'Enter image'

             ]);



          
             if($request->hasfile('filename'))
             {
             $file = $request->file('filename');
             $name=time().$file->getClientOriginalName();
             $file->move(public_path().'/images/', $name);
            }
       
            
            
            $userId=Auth::id();
            
           
             $event=new Event;
 
             $event->category="Special Trainings";

             $event->start_date=$request->get('start_date');
       
             $event->end_date=$request->get('end_date');
             
             $event->userId=$userId;

             $event->description=$request->get('description');

             $event->training_id=$request->get('training_id');
             
            
             $event->category_id=$request->get('category_id');

             $event->training_name=$request->get('training_name');
 
             $event->photos=$name;
       
             $event->save();

           /// echo "done";

           return redirect('/special_training_list')->with('success', true);
        
            
            
          




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
        $event =Event::find($id);
        $districts=District::all();
        $types=Type::where('type','Special Trainings')->orderBy('id','desc')->get();
        view()->share('districts',$districts);
        view()->share('types',$types);
        return view('super_admin/special_edit',compact('event','id'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('photo');
        if($image != '')
        {

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $image_name);
        }


        $form_data = array(
            'start_date'=> $request->start_date,
            'end_date'       =>   $request->end_date,
            'training_id'        =>  $request->training_id,
            'category_id'  =>  $request->category_id,
            'description'=>  $request->description,
            'training_name'=>  $request->training_name,
            'photos'     =>   $image_name
        );

        Event::whereId($id)->update($form_data);

        ///echo "updated";
        return redirect('/special_training_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = \App\Models\Event::find($id);
        $training->delete();
        return redirect('/special_training_list')->with('success', true);
    }
}
