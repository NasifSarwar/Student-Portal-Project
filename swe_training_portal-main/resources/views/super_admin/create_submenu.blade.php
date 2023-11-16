@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/sub_menu" method="POST" enctype="multipart/form-data">
                                @csrf






                                        <div class="form-group">
                                            <label><b>সাবমেন্যুর নাম(ইংলিশ):</b></label>
                                            <input type="text"  name="sub_menu_name" placeholder="Example:About Us" value="{{old('sub_menu_name')}}" class="form-control" />
                                            @if ($errors->first('sub_menu_name'))<div class="alert alert-danger">{!! $errors->first('sub_menu_name') !!}</div> @endif

                                        </div>

                                        <div class="form-group">
                                            <label><b>সাবমেন্যুর নাম(বাংলা):</b></label>
                                            <input type="text"  name="sub_menu_name_bangla" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{old('sub_menu_name_bangla')}}" class="form-control" />
                                            @if ($errors->first('sub_menu_name_bangla'))<div class="alert alert-danger">{!! $errors->first('sub_menu_name_bangla') !!}</div> @endif

                                        </div>

                                        <div class="form-group">
                                            <label><b>সাবমেন্যুর  লিংক(ইংলিশ):</b></label>
                                            <input type="text"  name="link" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{old('link')}}" class="form-control" />
                                            @if ($errors->first('link'))<div class="alert alert-danger">{!! $errors->first('link') !!}</div> @endif
                                        

                                        </div>


                                        <div class="form-group">
                                            <label><b>সাবমেন্যুর  লিংক(বাংলা):</b></label>
                                            <input type="text"  name="link_bangla" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{old('link_bangla')}}" class="form-control" />
                                            @if ($errors->first('link_bangla'))<div class="alert alert-danger">{!! $errors->first('link_bangla') !!}</div> @endif
                                        

                                        </div>

                                        <div class="form-group">
                                            <label><b>কোন মেন্যুর সাবমেন্যু :</b></label>
                                            <select class="form-control" name="menu_id">

                          

                                    <option value="Not Choosen"> 
                                    ড্রপডাউন থেকে লিংক সিলেক্ট করুন 
     </option>
     @foreach($menus as $menu)
     <option value="{{$menu->id}}"> 
      {{$menu->menu_name}}
     </option>
     @endforeach
    
 </select>
                                            @if ($errors->first('menu_id'))<div class="alert alert-danger">{!! $errors->first('menu_id') !!}</div> @endif

                                        </div>







                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                </div>
              </div>
             </div>






















@endsection