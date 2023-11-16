@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/ambassador" method="POST" enctype="multipart/form-data">
                                @csrf
                                
        <div class="form-group">
          <label><b>জেলা:</b></label>
            <select class="form-control" name="district_id">
                             
  

     <option value="Not Choosen"> 
                                    ড্রপডাউন থেকে লিংক সিলেক্ট করুন 
     </option>
   @foreach($items as $item)
     <option value="{{$item->id}}"> 
        {{$item->name_bangla}}
     </option>

     @endforeach
  
 </select>
                                            @if ($errors->first('district_id'))<div class="alert alert-danger">{!! $errors->first('district_id') !!}</div> @endif
                                            
                                        </div>



                                        <div class="form-group">
                                            <label><b>নাম:</b></label>
                                            <input type="text"  name="name" placeholder="উদাহরণ:সানজিদা আক্তার " value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>




                                  
                                        <div class="form-group">
                                            <label><b>ক্রমিক নাম্বার:</b></label>
                                            <input type="text"  name="roll_no" placeholder="উদাহরণ:লালমাটিয়া বালিকা উচ্চ বিদ্যালয় " value="{{old('roll_no')}}" class="form-control" />
                                            @if ($errors->first('roll_no'))<div class="alert alert-danger">{!! $errors->first('roll_no') !!}</div> @endif
                                            
                                        </div>


                                       

                                        <div class="form-group">
                                            <label><b>শিক্ষা প্রতিষ্ঠান:</b></label>
                                            <input type="text"  name="institute" placeholder="উদাহরণ:1" value="{{old('institute')}}" class="form-control" />
                                            @if ($errors->first('institute'))<div class="alert alert-danger">{!! $errors->first('institute') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ফোন :</b></label>
                                            <input type="text"  name="phone" placeholder="Example:01770000111" value="{{old('phone')}}" class="form-control" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ইমেইল:</b></label>
                                            <input type="text"  name="email" placeholder="উদাহরণ:a@gmail.com" value="{{old('email')}}" class="form-control" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>পিতার নাম:</b></label>
                                            <input type="text"  name="fathers_name" placeholder="উদাহরণ:আব্দুর রাহিম " value="{{old('fathers_name')}}" class="form-control" />
                                            @if ($errors->first('fathers_name'))<div class="alert alert-danger">{!! $errors->first('fathers_name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>মাতার নাম:</b></label>
                                            <input type="text"  name="mothers_name" placeholder="উদাহরণ:মমতা বেগম " value="{{old('mothers_name')}}" class="form-control" />
                                            @if ($errors->first('mothers_name'))<div class="alert alert-danger">{!! $errors->first('mothers_name') !!}</div> @endif
                                            
                                        </div>




                                 
                                   

                              




                                     

                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection