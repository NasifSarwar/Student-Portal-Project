@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/district/'.$district->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf

                                       

                                      

                                        <div class="form-group">
                                            <label><b>জেলার নাম(ইংলিশ):</b></label>
                                            <input type="text"  name="name_english" placeholder="Example:Dhaka" value="{{$district->name_english}}" class="form-control" />
                                            @if ($errors->first('name_english'))<div class="alert alert-danger">{!! $errors->first('name_english') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>জেলার নাম(বাংলা):</b></label>
                                            <input type="text"  name="name_bangla" placeholder="উদাহরণ:ঢাকা" value="{{$district->name_bangla}}" class="form-control" />
                                            @if ($errors->first('name_bangla'))<div class="alert alert-danger">{!! $errors->first('name_bangla') !!}</div> @endif
                                            
                                        </div>

                                     


                                 
                                   

                              




                                     

                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection