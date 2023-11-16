@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/video/'.$show->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>ভিডিওর সিরিয়াল:</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{$show->weight}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                            
                                        </div>

                                     

                                        <div class="form-group">
                                            <label><b>আইফ্রেম:</b></label>
                                            <input type="text"  name="source" placeholder="উদাহরণ:https://www.youtube.com/watch?v=WDDQ-Z7_N3k" value="{{$show->source}}" class="form-control" />
                                            @if ($errors->first('source'))<div class="alert alert-danger">{!! $errors->first('source') !!}</div> @endif
                                            
                                        </div>


                                 
                                   

                              




                                     

                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection