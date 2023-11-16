<?php
namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\Menu;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $menus=Menu::all();
        view()->share('menus',$menus);

        return view('super_admin/create_submenu');
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



           
            'sub_menu_name' => 'required|min:1',
            'sub_menu_name_bangla'=>'required|min:1',

           
           

        ],
            
            
             [
               
                'sub_menu_name.required' => 'সাবমেন্যুর ইংলিশ টাইটেল ',
                'sub_menu_name_bangla.required'=>'সাবমেন্যুর বাংলা টাইটেল ',
               
                

            ]

             );

             $submenu=new Submenu;


           
       
             $submenu->submenu_name=$request->get('sub_menu_name');
       
             $submenu->submenu_name_bangla=$request->get('sub_menu_name_bangla');
             
             $submenu->link=$request->get('link');

             $submenu->link_bangla=$request->get('link_bangla');

             $submenu->menu_id=$request->get('menu_id');

             $submenu->save();

             ///echo "done";

             return redirect('/submenu_list')->with('success', true);
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
        $submenu =Submenu::find($id);
        return view('super_admin/submenu_edit',compact('submenu','id'));
        
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



           
            'sub_menu_name' => 'required|min:1',
            'sub_menu_name_bangla'=>'required|min:1',

           
           

        ],
            
            
             [
               
                'sub_menu_name.required' => 'সাবমেন্যুর ইংলিশ টাইটেল ',
                'sub_menu_name_bangla.required'=>'সাবমেন্যুর বাংলা টাইটেল ',
               
                

            ]

             );


        $form_data = array(
            
            'submenu_name'       =>   $request->sub_menu_name,
            'submenu_name_bangla'        =>  $request->sub_menu_name_bangla,
            'link'  =>  $request->link,
            'link_bangla'=>$request->link_bangla
           
        );

        Submenu::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('/submenu_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $submenu = \App\Models\Submenu::find($id);
        $submenu->delete();
        return redirect('/submenu_list')->with('success', true);
    }
}
