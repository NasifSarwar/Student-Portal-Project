@extends('layouts.user')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    আপনার প্রশ্ন সাবমিট হয়েছে ,৪৮ ঘন্টার মধ্যে আপনার উত্তর পেয়ে যাবেন 
                  </div>
@endif
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
         





@foreach($questions as $question)

<b>

প্রশ্ন/জিজ্ঞাসা:{!! $question->question !!}




</b>

উত্তর:{!! $question->answer   !!}



@endforeach

                              
                </div>
               
                
                  {{ $questions->links('pagination::bootstrap-4')}}
                
              </div>
             </div>






















@endsection