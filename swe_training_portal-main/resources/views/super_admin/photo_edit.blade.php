@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
            
              {!! Form::open(['url' => URL::to('/photo/'.$photo->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                      

                                       
                                <div class="form-group">
                                            <label><b>ছবির সিরিয়েল নাম্বার:</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{$photo->weight}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ছবির ক্যাপশন(ইংলিশ):</b></label>
                                            <input type="text"  name="photo_caption_english" placeholder="Example:Konnakotha" value="{{$photo->photo_caption_english}}" class="form-control" />
                                            @if ($errors->first('photo_caption_english'))<div class="alert alert-danger">{!! $errors->first('photo_caption_english') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ছবির ক্যাপশন(বাংলা):</b></label>
                                            <input type="text"  name="photo_caption_bangla" placeholder="উদাহরণ:কন্যাকথা " value="{{$photo->photo_caption_bangla}}" class="form-control" />
                                            @if ($errors->first('photo_caption_bangla'))<div class="alert alert-danger">{!! $errors->first('photo_caption_bangla') !!}</div> @endif
                                            
                                        </div>

                                      


                                       

                                   

                                        <div class="form-group">
                                            <label><b>বর্তমান ছবি:</b></label>
                                            <img src="{{ asset('images/' . $photo->filename) }}" alt="" height="90px" width="120">
                                            </div>





                                        <div class="form-group">
                                            <label><b>ছবি আপডেট :</b></label>
                                                <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                                @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                                <input type="hidden" name="hidden_image" value="{{ $photo->filename}}" />
                                            </div>


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection