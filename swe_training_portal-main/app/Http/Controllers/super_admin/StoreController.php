<?php

namespace App\Http\Controllers\super_admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/store');
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



            'type'=>'required|min:1',
            'position' => 'required|min:1',
            'name' => 'required|min:1',
           

        ],
            
            
             [
                'type.required' => 'Content Required',
                'position.required' => 'Position Required',
                'name.required'=>'Name Required',
                
                

            ]

             );

      
        

        
        $type=new Type;



        
        $type->type=$request->get('type');

        $type->position=$request->get('position');
  
        $type->name=$request->get('name');

        $type->save();

       //// echo "Done";

        $a=$type->type=$request->get('type');

        if($a=="Category"){
        return redirect('/content_list')->with('success', true);
        }
        else{
            
            return redirect('/special_training_list')->with('success', true);
             
        }

    
    
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
        $store =Type::find($id);
        $types=Type::all();
        view()->share('types',$types);
        return view('super_admin/store_edit',compact('store','id'));
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
            'position' => 'required|min:1',
            'type' => 'required|min:1',
            

             

        ],
            
            
             [
                'name.required' => 'Name Required',
                'position.required' => 'Position',
                'type.required'=>'type',
                
                

            ]
            
            

            
            
            );
          

          $form_data = array(
            'name'=> $request->name,
            'position'       =>   $request->position,
            'type'        =>  $request->type
            
            
        );

            Type::whereId($id)->update($form_data);
            
        $a=$request->type;

        if($a=="Category"){
        return redirect('/content_list')->with('success', true);
        }
        else{
            
            return redirect('/special_training_list')->with('success', true);
             
        }

       
          

          
        
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $type = \App\Models\Type::find($id);
        $type->delete();
        $a=$type->type;
        ///$a=type->type;

    
        if($a=="Category"){
          
            return redirect('/content_list');

        }
        else{
         
            return redirect('/special_training_list');

        }

        
}
}