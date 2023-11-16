@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/sub_menu/'.$submenu->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                      

                                       

                                    

                                        <div class="form-group">
                                            <label><b>সাবমেন্যুর নাম(ইংলিশ):</b></label>
                                            <input type="text"  name="sub_menu_name" placeholder="Example:About Us" value="{{$submenu->submenu_name}}" class="form-control" />
                                            @if ($errors->first('sub_menu_name'))<div class="alert alert-danger">{!! $errors->first('sub_menu_name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>সাবমেন্যুর নাম(বাংলা):</b></label>
                                            <input type="text"  name="sub_menu_name_bangla" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{$submenu->submenu_name_bangla}}" class="form-control" />
                                            @if ($errors->first('sub_menu_name_bangla'))<div class="alert alert-danger">{!! $errors->first('sub_menu_name_bangla') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>সাবমেন্যুর লিংক(ইংলিশ):</b></label>
                                            <input type="text"  name="link" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{$submenu->link}}" class="form-control" />
                                            @if ($errors->first('link'))<div class="alert alert-danger">{!! $errors->first('link') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>সাবমেন্যুর লিংক(বাংলার জন্য):</b></label>
                                            <input type="text"  name="link_bangla" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{$submenu->link_bangla}}" class="form-control" />
                                            @if ($errors->first('link_bangla'))<div class="alert alert-danger">{!! $errors->first('link_bangla') !!}</div> @endif
                                            
                                        </div>



                                        <div class="form-group">
                                            <label><b>মেন্যু আইডি(কোন মেন্যুর সাবমেন্যু):</b></label>
                                            <input type="text"  name="menu_id" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{$submenu->menu_id}}" class="form-control" />
                                            @if ($errors->first('menu_id'))<div class="alert alert-danger">{!! $errors->first('menu_id') !!}</div> @endif
                                            
                                        </div>

                                       

                                       
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection