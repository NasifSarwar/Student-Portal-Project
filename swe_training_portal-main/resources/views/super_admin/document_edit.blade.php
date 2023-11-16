@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/document/'.$notice->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf

                                       

                                        <div class="form-group">
                                            <label><b>তারিখ:</b></label>
                                            <input type="date"  name="date" placeholder="উদাহরণ:1" value="{{$notice->date}}" class="form-control" />
                                            @if ($errors->first('date'))<div class="alert alert-danger">{!! $errors->first('date') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ডকুমেন্টের টাইটেল(ইংলিশ):</b></label>
                                            <input type="text"  name="name" placeholder="Example:Konnakotha" value="{{$notice->name}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ডকুমেন্টের টাইটেল(বাংলা):</b></label>
                                            <input type="text"  name="notice_bangla" placeholder="উদাহরণ:কন্যাকথা " value="{{$notice->notice_bangla}}" class="form-control" />
                                            @if ($errors->first('notice_bangla'))<div class="alert alert-danger">{!! $errors->first('notice_bangla') !!}</div> @endif
                                            
                                        </div>

                                      
                                      
                                        <div class="form-group">
                                            <label><b>বর্তমান ডকুমেন্ট:</b></label>
                                           
                                            <a class="image-link" href="{{ asset('images/' . $notice->filename) }}"><img src="/images/pdf.png" class="img-responsive" loading="lazy" height="45px" width="45px">
                                            </div>





                                        <div class="form-group">
                                            <label><b>ডকুমেন্ট আপডেট করুন(আপডেট প্রয়োজন হলে):</b></label>
                                                <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                                @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                                <input type="hidden" name="hidden_image" value="{{ $notice->filename}}" />
                                            </div>


                                      
                              

                    




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection