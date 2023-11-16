@extends('layouts.user')

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

                    @if (session()->has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          Password Changed Succesfully
        </div>
@endif                   





                    {!! Form::open(['url' =>URL::current()]) !!}

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"><b>Old Password:</b></label>
    <div class="col-sm-12">


      {!! Form::text('old_password', Request::old('old_password'),array('class' => 'form-control' , 'placeholder' => 'Old Password' )) !!}
      @if ($errors->first('old_password'))<div class="alert alert-danger">{!! $errors->first('old_password') !!}</div> @endif
    </div>
    

</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"><b>New Password :</b></label>
    <div class="col-sm-12">
        {!! Form::text('password', Request::old('password'),array('class' => 'form-control' , 'placeholder' => 'New Password' )) !!}
        @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif
    </div>
  


</div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"><b>Confirm Password:</b></label>
    <div class="col-sm-12">
        {!! Form::text('password_confirmation', Request::old('password_confirmation'),array('class' => 'form-control' , 'placeholder' => 'Confirm Password' )) !!}
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


