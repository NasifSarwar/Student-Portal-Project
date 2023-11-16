@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/speech" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>বক্তার সিরিয়াল নাম্বার(ইংলিশ ):</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{old('weight')}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>বক্তার নাম:(ইংলিশ):</b></label>
                                            <input type="text"  name="name_english" placeholder="Example:Abdur Rahim" value="{{old('name_english')}}" class="form-control" />
                                            @if ($errors->first('name_english'))<div class="alert alert-danger">{!! $errors->first('name_english') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>বক্তার নাম:(বাংলা):</b></label>
                                            <input type="text"  name="name_bangla" placeholder="উদাহরণ:আব্দুর রহমান" value="{{old('name_bangla')}}" class="form-control" />
                                            @if ($errors->first('name_bangla'))<div class="alert alert-danger">{!! $errors->first('name_bangla') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>পদবি(ইংলিশ):</b></label>
                                            <input type="text"  name="designation_english" placeholder="Example:secretary" value="{{old('designation_english')}}" class="form-control" />
                                            @if ($errors->first('designation_english'))<div class="alert alert-danger">{!! $errors->first('designation_english') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>পদবি(বাংলা):</b></label>
                                            <input type="text"  name="designation_bangla" placeholder="উদাহরণ:আব্দুর রহমান " value="{{old('designation_bangla')}}" class="form-control" />
                                            @if ($errors->first('designation_bangla'))<div class="alert alert-danger">{!! $errors->first('designation_bangla') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>বক্তব্য(ইংলিশ):</b></label>
                                            <input type="text"  name="speech_english" placeholder="Example:Developing for future" value="{{old('speech_english')}}" class="form-control" />
                                            @if ($errors->first('speech_english'))<div class="alert alert-danger">{!! $errors->first('speech_english') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>বক্তব্য(বাংলা):</b></label>
                                            <input type="text"  name="speech_bangla" placeholder="উদাহরণ:ডিজিটাল বাংলাদেশ" value="{{old('speech_bangla')}}" class="form-control" />
                                            @if ($errors->first('speech_bangla'))<div class="alert alert-danger">{!! $errors->first('speech_bangla') !!}</div> @endif
                                            
                                        </div>

                                   

                                   

                              




                                        <div class="form-group">
                                            <label><b>বক্তার ছবি আপলোড:</b></label>
                                                <input type="file" name="filename" value="{{old('filename')}}" class="form-control" />
                                                @if ($errors->first('filename'))<div class="alert alert-danger">{!! $errors->first('filename') !!}</div> @endif
                                            </div>


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection