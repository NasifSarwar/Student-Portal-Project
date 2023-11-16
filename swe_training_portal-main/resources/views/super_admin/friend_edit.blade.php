@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
               <!-- Form Basic -->
               {!! Form::open(['url' => URL::to('/friend/'.$friend->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf



                                <div class="form-group">
                                            <label><b>সিরিয়েল নাম্বার:</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{$friend->weight}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                        

                                        </div>



                                    

                                        <div class="form-group">
                                            <label><b>লিংক :</b></label>
                                            <input type="text"  name="name_bn" placeholder="উদাহরণ:আমাদের সম্পর্কে" value="{{$friend->name_bn}}" class="form-control" />
                                            @if ($errors->first('name_bn'))<div class="alert alert-danger">{!! $errors->first('name_bn') !!}</div> @endif

                                        </div>
                                        
                                        
                                             <div class="form-group">
                                            <label><b>বর্তমান ছবি :</b></label>
                                            <img src="{{ asset('images/' . $friend->image) }}" alt="" height="90px" width="120">
                                            </div>





                                        <div class="form-group">
                                            <label><b>ব্যানারের ছবি আপলোড:</b></label>
                                                <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                                @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                                <input type="hidden" name="hidden_image" value="{{ $friend->image}}" />
                                            </div>



                                      





                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                </div>
              </div>
             </div>






















@endsection