@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/add_admin" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                    

                                        <div class="form-group">
                                            <label><b>নাম:</b></label>
                                            <input type="text"  name="name" placeholder="Example:Abdur Rauf" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ফোন নাম্বার:</b></label>
                                            <input type="text"  name="phone" placeholder="উদাহরণ:01770137655" value="{{old('phone')}}" class="form-control" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ইমেইল:</b></label>
                                            <input type="email"  name="email" placeholder="Example:test@gmail.com" value="{{old('email')}}" class="form-control" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>পাসওয়ার্ড :</b></label>
                                            <input type="password"  name="password" placeholder="t@!987654" value="{{old('password')}}" class="form-control" />
                                            @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ছবি আপলোড করুন :</b></label>
                                            <input type="file"  name="filename" placeholder="" value="{{old('filename')}}" class="form-control" />
                                            @if ($errors->first('filename'))<div class="alert alert-danger">{!! $errors->first('filename') !!}</div> @endif
                                            
                                        </div>



                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection