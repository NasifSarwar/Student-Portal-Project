@extends('layouts.user')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/question" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                      

                                  
                                     

                                   
                                <div class="form-group">
                                <label><strong>প্রশ্ন/জিজ্ঞাসা[শুধুমাত্র টেক্সট লিখা যাবে ]:</strong></label>
                                <textarea class="ckeditor form-control" name="question"></textarea>
                                @if ($errors->first('question'))<div class="alert alert-danger">{!! $errors->first('question') !!}</div> @endif
                            </div>

                      




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">সাবমিট </button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection