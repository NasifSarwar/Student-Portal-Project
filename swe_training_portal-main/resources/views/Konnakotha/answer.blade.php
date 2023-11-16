@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/student_questions/'.$question->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf   

                                       
                                <b>প্রশ্ন/জিজ্ঞাসা:</b><b> <?php
    
    
    
    echo $question->question;
    
    
    ?>  </b>
                                      
                     
                                     


                                   
                                <div class="form-group">
                                <label><strong>উত্তর(টেক্সট লিখুন):</strong></label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                                @if ($errors->first('description'))<div class="alert alert-danger">{!! $errors->first('description') !!}</div> @endif
                            </div>

                      




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection