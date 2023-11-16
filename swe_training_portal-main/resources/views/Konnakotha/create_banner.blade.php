@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/banner" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>ব্যানারের সিরিয়াল:</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{old('weight')}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>টাইটেল(ইংলিশ):</b></label>
                                            <input type="text"  name="title" placeholder="Example:Konnakotha" value="{{old('title')}}" class="form-control" />
                                            @if ($errors->first('title'))<div class="alert alert-danger">{!! $errors->first('title') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>টাইটেল(বাংলা):</b></label>
                                            <input type="text"  name="title_bangla" placeholder="উদাহরণ:কন্যাকথা " value="{{old('title_bangla')}}" class="form-control" />
                                            @if ($errors->first('title_bangla'))<div class="alert alert-danger">{!! $errors->first('title_bangla') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>স্লোগান(ইংলিশ):</b></label>
                                            <input type="text"  name="slogan" placeholder="Example:Developing for future" value="{{old('slogan')}}" class="form-control" />
                                            @if ($errors->first('slogan'))<div class="alert alert-danger">{!! $errors->first('slogan') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>স্লোগান(বাংলা):</b></label>
                                            <input type="text"  name="slogan_bangla" placeholder="উদাহরণ:ডিজিটাল বাংলাদেশ" value="{{old('slogan_bangla')}}" class="form-control" />
                                            @if ($errors->first('slogan_bangla'))<div class="alert alert-danger">{!! $errors->first('slogan_bangla') !!}</div> @endif
                                            
                                        </div>

                                   

                              




                                        <div class="form-group">
                                            <label><b>ব্যানারের ছবি আপলোড:</b></label>
                                                <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                                @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                            </div>


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection