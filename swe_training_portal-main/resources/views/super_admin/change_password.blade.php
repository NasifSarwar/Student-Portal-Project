@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          @if (session()->has('success'))


@endif

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                   

@if (session('error'))
                        <div class="alert alert-danger"> {{ session('error') }} </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success"> {{ session('success') }} </div>
                    @endif



                   {!! Form::open(['url' =>URL::current()]) !!}

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><b>পূর্বের পাসওয়ার্ড:</b></label>
                        <div class="col-sm-12">


                          {!! Form::text('old_password', Request::old('old_password'),array('class' => 'form-control' , 'placeholder' => 'পূর্বের পাসওয়ার্ড' )) !!}
                          @if ($errors->first('old_password'))<div class="alert alert-danger">{!! $errors->first('old_password') !!}</div> @endif
                        </div>
                        

                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><b>নতুন পাসওয়ার্ড :</b></label>
                        <div class="col-sm-12">
                            {!! Form::text('password', Request::old('password'),array('class' => 'form-control' , 'placeholder' => 'নতুন পাসওয়ার্ড' )) !!}
                            @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif
                        </div>
                      


                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><b>কনফার্ম পাসওয়ার্ড:</b></label>
                        <div class="col-sm-12">
                            {!! Form::text('password_confirmation', Request::old('password_confirmation'),array('class' => 'form-control' , 'placeholder' => 'কনফার্ম পাসওয়ার্ড' )) !!}
                            @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif
                        </div>
                       


                    </div>




                    <div class="form-group">

                        <div class="col-sm-offset-2 col-sm-10">
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>   
       
                
            </div>                    
                 <!-- /. ROW  -->
                  <hr />
              
                    </div>
                </div>    
                 <!-- /. ROW  -->          
    </div>
             <!-- /. PAGE INNER  -->
            </div>
            </div>
@endsection


