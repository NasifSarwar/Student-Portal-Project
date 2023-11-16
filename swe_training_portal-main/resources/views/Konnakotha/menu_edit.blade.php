@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/menu/'.$menu->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>মেন্যুর সিরিয়াল:</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{$menu->weight}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>মেন্যুর নাম(ইংলিশ):</b></label>
                                            <input type="text"  name="menu_name" placeholder="Example:About Us" value="{{$menu->menu_name}}" class="form-control" />
                                            @if ($errors->first('menu_name'))<div class="alert alert-danger">{!! $errors->first('menu_name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>মেন্যুর নাম(বাংলা):</b></label>
                                            <input type="text"  name="menu_name_bangla" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{$menu->menu_name_bangla}}" class="form-control" />
                                            @if ($errors->first('menu_name_bangla'))<div class="alert alert-danger">{!! $errors->first('menu_name_bangla') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>মেন্যুর লিংক:</b></label>
                                            <input type="text"  name="link" placeholder="উদাহরণ:/about_us" value="{{$menu->link}}" class="form-control" />
                                            @if ($errors->first('link'))<div class="alert alert-danger">{!! $errors->first('link') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>মেন্যুর লিংক(বাংলার জন্য):</b></label>
                                            <input type="text"  name="link_bangla" placeholder="উদাহরণ:/about_us" value="{{$menu->link_bangla}}" class="form-control" />
                                            @if ($errors->first('link_bangla'))<div class="alert alert-danger">{!! $errors->first('link_bangla') !!}</div> @endif
                                            
                                        </div>


                                 
                                   

                              




                                     

                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection