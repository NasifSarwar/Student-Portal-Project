@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/upcoming_training/'.$exam->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf

                                       

                                        <div class="form-group">
                                            <label><b>শিরোনাম(ইংলিশ):</b></label>
                                            <input type="text"  name="title_en" placeholder="উদাহরণ:1" value="{{$exam->title_en}}" class="form-control" />
                                            @if ($errors->first('title_en'))<div class="alert alert-danger">{!! $errors->first('title_en') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>শিরোনাম(বাংলা):</b></label>
                                            <input type="text"  name="title_bn" placeholder="Example:About Us" value="{{$exam->title_bn}}" class="form-control" />
                                            @if ($errors->first('title_bn'))<div class="alert alert-danger">{!! $errors->first('title_bn') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>তারিখ:</b></label>
                                            <input type="date"  name="date"  value="{{$exam->date}}" class="form-control" />
                                            @if ($errors->first('date'))<div class="alert alert-danger">{!! $errors->first('date') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>স্থান(ইংলিশ):</b></label>
                                            <input type="text"  name="place_en"  value="{{$exam->place_en}}" class="form-control" />
                                            @if ($errors->first('place_en'))<div class="alert alert-danger">{!! $errors->first('place_en') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>স্থান(বাংলা):</b></label>
                                            <input type="text"  name="place_bn"  value="{{$exam->place_bn}}" class="form-control" />
                                            @if ($errors->first('place_bn'))<div class="alert alert-danger">{!! $errors->first('place_bn') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>মন্তব্য(ইংলিশ):</b></label>
                                            <input type="text"  name="comments_en" placeholder="উদাহরণ:/about_us" value="{{$exam->comments_en}}" class="form-control" />
                                            @if ($errors->first('comments_en'))<div class="alert alert-danger">{!! $errors->first('comments_en') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>মন্তব্য(বাংলা):</b></label>
                                            <input type="text"  name="comments_bn" placeholder="উদাহরণ:/about_us" value="{{$exam->comments_bn}}" class="form-control" />
                                            @if ($errors->first('comments_bn'))<div class="alert alert-danger">{!! $errors->first('comments_bn') !!}</div> @endif
                                            
                                        </div>



                                 
                                   

                              




                                     

                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection