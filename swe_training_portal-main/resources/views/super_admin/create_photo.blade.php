@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/photo" method="POST" enctype="multipart/form-data">
                                @csrf

                                       

                                        <div class="form-group">
                                            <label><b>ছবির সিরিয়েল নাম্বার:</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{old('weight')}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ছবির ক্যাপশন(ইংলিশ):</b></label>
                                            <input type="text"  name="photo_caption_english" placeholder="Example:Konnakotha" value="{{old('photo_caption_english')}}" class="form-control" />
                                            @if ($errors->first('photo_caption_english'))<div class="alert alert-danger">{!! $errors->first('photo_caption_english') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ছবির ক্যাপশন(বাংলা):</b></label>
                                            <input type="text"  name="photo_caption_bangla" placeholder="উদাহরণ:কন্যাকথা " value="{{old('photo_caption_bangla')}}" class="form-control" />
                                            @if ($errors->first('photo_caption_bangla'))<div class="alert alert-danger">{!! $errors->first('photo_caption_bangla') !!}</div> @endif
                                            
                                        </div>

                                      

                              




                                        <div class="form-group">
                                            <label><b>ছবি আপলোড:</b></label>
                                                <input type="file" name="filename" value="{{old('filename')}}" class="form-control" />
                                                @if ($errors->first('filename'))<div class="alert alert-danger">{!! $errors->first('filename') !!}</div> @endif
                                            </div>


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection