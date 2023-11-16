<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/create_district');
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



           
            'name_english' => 'required|min:1',
            'name_bangla'=>'required|min:1',

           
           

        ],
            
            
             [
                'name_english.required' => 'জেলার নাম ইংলিশ',
                'name_bangla.required' => 'জেলার নাম বাংলায় '
              
                

            ]

             );

             $district=new District;


             $district->name_english=$request->get('name_english');
       
             $district->name_bangla=$request->get('name_bangla');
       
            

             $district->save();

            /// echo "done";

             return redirect('/district_list')->with('success', true);

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
        $district =District::find($id);
        return view('super_admin/district_edit',compact('district','id'));
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



           
            'name_english' => 'required|min:1',
            'name_bangla'=>'required|min:1',

           
           

        ],
            
            
             [
                'name_english.required' => 'জেলার নাম ইংলিশ',
                'name_bangla.required' => 'জেলার নাম বাংলায় '
              
                

            ]

             );






        $form_data = array(
           
            'name_english'       => $request->name_english,
            'name_bangla'        =>  $request->name_bangla,
           
           
        );

        District::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('/district_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $district = \App\Models\District::find($id);
        $district->delete();
        return redirect('/district_list')->with('success', true);
    }
}
