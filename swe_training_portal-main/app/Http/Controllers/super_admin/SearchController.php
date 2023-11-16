<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ambassador;
use App\Models\Register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;

class SearchController extends Controller
{
    public function index($id){

    $items=Ambassador::where('district_id',$id)->get();
    ///$emails=Sector::orderBy('id','desc')->where('title','email')->limit(1)->get();
    ////$informations=Sector::orderBy('id','desc')->where('title','information')->limit(1)->get();
    //view()->share('informations', $informations);
    view()->share('items',$items);
    ///view()->share('emails',$emails);
    return view('super_admin/allambasador');

    }

     public function reject($id){

        
        $register = \App\Models\Register::find($id);
        $register->delete();
        return redirect('/pending_appplicants')->with('success', true);


     }

    public function student($id){

         $items=User::where('district',$id)->get();
        ///$emails=Sector::orderBy('id','desc')->where('title','email')->limit(1)->get();
        ////$informations=Sector::orderBy('id','desc')->where('title','information')->limit(1)->get();
        //view()->share('informations', $informations);
         view()->share('items',$items);
        ///view()->share('emails',$emails);
        return view('super_admin/allstudent');
        ///echo $id;
    
        }
    public function accept($id){
     
        ///echo $id;
        
        
        
        
        

        $items= \App\Models\Register::find($id);
        $name=$items->name;
        $email=$items->email;
        $district=$items->district;
        $phone=$items->phone;
        $institution=$items->institution;
        $class=$items->class;
        $image=$items->image;
        $password="d@!123654";
        
        
       
            

      
        DB::update('update registers set status = 1 where id = ?',[$id]);
        
        
        
       
            
            
            
           
        
        $check =User::where('email',$email)->get();
        
        if(sizeof($check) > 0){
       
         
          echo '<script>alert("User is already registered")</script>';
          return redirect('/pending_appplicants');
        
         }
            
            
        else{     
        
        
        
       
        $user=new User;
        
          


        $user->name=$name;
        $user->email=$email;
        $user->district=$district;
        $user->phone=$phone;
        $user->institution=$institution;
        $user->password=Hash::make($password);
        $user->class=$class;
        $user->image=$image;
       
        $user->save();
           
        $data = array('name'=>"konnakotha");
        $subject=$email;
        $test="User Credentials";
        $text="https://konnakothacca.com/login 
           email:".$subject.
             " password:d@!123654";
        mail::send(['emails'=>'reset_set'],$data,
        function($message)use($subject,$test,$text)
        {
            $message->from('ccakonnakotha@gmail.com','konnakotha');
            $message->to($subject);
            $message->subject($test);
            $message->setBody($text);
        });  
       
       return redirect('/pending_appplicants')->with('success', true);
       
       
        }

    }
}
