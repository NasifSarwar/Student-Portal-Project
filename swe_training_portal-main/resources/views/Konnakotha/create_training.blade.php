@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/training" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>সিরিয়াল নাম্বার :</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{old('weight')}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>তারিখ:</b></label>
                                            <input type="date"  name="date" placeholder="উদাহরণ:1" value="{{old('date')}}" class="form-control" />
                                            @if ($errors->first('date'))<div class="alert alert-danger">{!! $errors->first('date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>প্রশিক্ষণের স্থান(জেলা/উপজেলা/মন্ত্রণালয়/বিভাগ)[ইংলিশ]:</b></label>
                                            <input type="text"  name="training_place_english" placeholder="Example:Konnakotha" value="{{old('training_place_english')}}" class="form-control" />
                                            @if ($errors->first('training_place_english'))<div class="alert alert-danger">{!! $errors->first('training_place_english') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>প্রশিক্ষণের স্থান(জেলা/উপজেলা/মন্ত্রণালয়/বিভাগ)[ইংলিশ]:</b></label>
                                            <input type="text"  name="training_place_bangla" placeholder="উদাহরণ:কন্যাকথা " value="{{old('training_place_bangla')}}" class="form-control" />
                                            @if ($errors->first('training_place_bangla'))<div class="alert alert-danger">{!! $errors->first('training_place_bangla') !!}</div> @endif
                                            
                                        </div>

                                     

                                   
                                <div class="form-group">
                                <label><strong>বিস্তারিত(ইংলিশ টেক্সট ) :</strong></label>
                                <textarea class="ckeditor form-control" name="description_english"></textarea>
                                @if ($errors->first('description_english'))<div class="alert alert-danger">{!! $errors->first('description_english') !!}</div> @endif
                            </div>

                            <div class="form-group">
                                <label><strong>বিস্তারিত(বাংলা টেক্সট ) :</strong></label>
                                <textarea class="ckeditor form-control" name="description_bangla"></textarea>
                                @if ($errors->first('description_bangla'))<div class="alert alert-danger">{!! $errors->first('description_bangla') !!}</div> @endif
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