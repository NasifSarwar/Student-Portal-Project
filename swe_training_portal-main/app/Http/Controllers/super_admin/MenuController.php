<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/create_menu');
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
            'menu_name' => 'required|min:1',
            'menu_name_bangla'=>'required|min:1',

            'link' => 'required|min:1',

            'link_bangla'=>'required|min:1'
           

        ],
            
            
             [
                'weight.required' => 'মেন্যুর সিরিয়াল নাম্বার  ',
                'menu_name.required' => 'মেন্যুর ইংলিশ টাইটেল ',
                'menu_name_bangla.required'=>'মেন্যুর বাংলা টাইটেল ',
                'link.required'=>'মেন্যুর লিংক',
                'link_bangla.required'=>'মেন্যুর লিংক (বাংলার জন্য )'
                

            ]

             );

             $menu=new Menu;


             $menu->weight=$request->get('weight');
       
             $menu->menu_name=$request->get('menu_name');
       
             $menu->menu_name_bangla=$request->get('menu_name_bangla');
             
             $menu->link=$request->get('link');

             $menu->link_bangla=$request->get('link_bangla');

             $menu->save();

             return redirect('/menu_list')->with('success', true);




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
        $menu =Menu::find($id);
        return view('super_admin/menu_edit',compact('menu','id'));
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
            'menu_name' => 'required|min:1',
            'menu_name_bangla'=>'required|min:1',

            'link' => 'required|min:1',

            'link_bangla'=>'required|min:1'
           

        ],
            
            
             [
                'weight.required' => 'মেন্যুর সিরিয়াল নাম্বার  ',
                'menu_name.required' => 'মেন্যুর ইংলিশ টাইটেল ',
                'menu_name_bangla.required'=>'মেন্যুর বাংলা টাইটেল ',
                'link.required'=>'মেন্যুর লিংক',
                'link_bangla'=>'মেন্যুর লিংক (বাংলার জন্য )'
                

            ]

             );


        $form_data = array(
            'weight'=> $request->weight,
            'menu_name'       =>   $request->menu_name,
            'menu_name_bangla'        =>  $request->menu_name_bangla,
            'link'  =>  $request->link,
            'link_bangla'=>$request->link_bangla
           
        );

        Menu::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('/menu_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = \App\Models\Menu::find($id);
        $menu->delete();
        return redirect('/menu_list')->with('success', true);
    }
}
