@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
            
              {!! Form::open(['url' => URL::to('/profile/'.$user->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name of employee" value="{{$user->name}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                      
                                        <div class="form-group">
                                            <label><b>Phone:</b></label>
                                            <input type="text"  name="phone" placeholder="Enter phone number of employee" value="{{$user->phone}}" class="form-control" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                            
                                        </div>

                                     

                                        <div class="form-group">
                                            <label><b>Email</b></label>
                                            <input type="text"  name="email" placeholder="Enter address of employee" value="{{$user->email}}" class="form-control" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                            
                                        </div>


                                     
                                    

                              

                              



                                        <div class="form-group">
                                            <label><b>বর্তমান ছবি:</b></label>
                                            <img src="{{ asset('images/' . $user->image) }}" alt="" height="90px" width="120">
                                            </div>





                                        <div class="form-group">
                                            <label><b>ছবি আপডেট :</b></label>
                                                <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                                @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                                <input type="hidden" name="hidden_image" value="{{ $user->image}}" />
                                            </div>



                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                
                </div>
              </div>
             </div>






















@endsection