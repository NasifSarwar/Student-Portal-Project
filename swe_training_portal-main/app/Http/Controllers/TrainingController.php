<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Models\Sector;
use App\Models\Store;



class TrainingController extends Controller
{
    public function searchTraining($category_id){
       
              


      ///echo $category_id;
      $exams=Event::where('category_id',$category_id)->get();
      //echo $exams;


      //$exams=Event::where('category_id',$category_id)->orderBy('id','desc')->paginate(10);
        
      view()->share('exams',$exams);
      
      //echo $exams;



      ///echo $category_id;

    /*
     
      $details=Store::where('id',10)->first();
      $training=Event::where('id',$id)->first();
       
        
        $awards=Store::where('id',10)->first();
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $news=Store::where('id',10)->first();
        
        view()->share('details',$details);
        view()->share('contact',$contact);
        view()->share('training',$training);
        view()->share('about',$about);
        view()->share('details',$details);
       view()->share('phone',$phone);
       
        view()->share('awards',$awards);
        view()->share('news',$news);
        return view('training');


        */

        return view('training');
         

    }


    public function searchcategory(){

         echo "Done";

    }


    public function districttraining($id){

          ////echo $id;
          $exams=Event::where('training_id',$id)->get();
          //echo $exams;
          view()->share('exams',$exams);

          return view('district_training');
    }

    public function searchdetails($id){


      $exams=Event::where('id',$id)->get();
      view()->share('exams',$exams);
   
         return view('training_details_bn');

   /*

      ///$details=Store::where('id',10)->first();
      
      ///echo $details;
     
       $awards=Store::where('id',10)->first();
      $news=Store::where('id',10)->first();
     
        $training=Event::where('id',$id)->first();
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        view()->share('details',$details);
        view()->share('training',$training);
        
         view()->share('details',$details);
        view()->share('awards',$awards);
        view()->share('news',$news);
        view()->share('about',$about);
        view()->share('phone',$phone);
        return view('training_details_bn');


     

       */


    }

    public function award($id){

        $training=Event::where('id',$id)->first();
        $awards=Store::where('id',$id)->first();
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $details=Sector::where('id',$id)->first();
         view()->share('details',$details);
     
        view()->share('about',$about);

        view()->share('phone',$phone);
        view()->share('awards',$awards);
        view()->share('contact',$contact);
        return view('award_details');

        
       
     }
     public function news($id){

        $training=Event::where('id',$id)->first();
        $news=Store::where('id',$id)->first();
        $about=Sector::where('id',2)->first();
        $awards=Store::where('id',$id)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $details=Sector::where('id',$id)->first();
       view()->share('details',$details);
        
     
        view()->share('about',$about);
        view()->share('awards',$awards);
        view()->share('phone',$phone);
        view()->share('news',$news);
        view()->share('contact',$contact);
        return view('news_details');
    
        
       
     }
     public function award_bangla($id){

        $training=Event::where('id',$id)->first();
        $awards=Store::where('id',$id)->first();
        $about=Sector::where('id',2)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $details=Sector::where('id',$id)->first();
        view()->share('details',$details);
        
     
        view()->share('about',$about);

        view()->share('phone',$phone);
        view()->share('awards',$awards);
        view()->share('contact',$contact);
        return view('award_details_bn');

        
       
     }
     public function content($id){


      
      
      $details=Sector::where('id',$id)->first();
      $training=Event::where('id',$id)->first();
      $awards=Store::where('id',$id)->first();
      $about=Sector::where('id',2)->first();
      $phone=Sector::where('id',3)->first();
      $contact=Sector::where('id',12)->first();
      
   
      view()->share('about',$about);
      view()->share('details',$details);

      view()->share('phone',$phone);
      view()->share('awards',$awards);
      view()->share('contact',$contact);
      return view('single');

      
     
   }
   public function contentbangla($id){


      
      
      $details=Sector::where('id',$id)->first();
      $training=Event::where('id',$id)->first();
      $awards=Store::where('id',$id)->first();
      $about=Sector::where('id',2)->first();
      $phone=Sector::where('id',3)->first();
      $contact=Sector::where('id',12)->first();
      
   
      view()->share('about',$about);
      view()->share('details',$details);

      view()->share('phone',$phone);
      view()->share('awards',$awards);
      view()->share('contact',$contact);

      return view('single_bangla');

      
     
   }
     public function news_bangla($id){

        $training=Event::where('id',$id)->first();
        $news=Store::where('id',$id)->first();
        $about=Sector::where('id',2)->first();
        $awards=Store::where('id',$id)->first();
        $phone=Sector::where('id',3)->first();
        $contact=Sector::where('id',12)->first();
        $details=Sector::where('id',$id)->first();
     
        view()->share('about',$about);
        view()->share('awards',$awards);
        view()->share('phone',$phone);
        view()->share('news',$news);
        view()->share('contact',$contact);
        view()->share('details',$details);
        return view('news_details_bn');
    
        
       
     }


}
