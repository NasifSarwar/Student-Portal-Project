@extends('layouts.super_admin')






@section('content')



<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          @if (session()->has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         Action Completed Successfully
        </div>
@endif

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="task" method="POST" enctype="multipart/form-data">
                                @csrf
                                                                  

                                     

                                        <div class="form-group">
                                            <label><b>Starting Date:</b></label>
                                            <input type="date"  name="start_date" placeholder="Enter starting date" value="{{old('start_date')}}" class="form-control" />
                                            @if ($errors->first('start_date'))<div class="alert alert-danger">{!! $errors->first('start_date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>End Date:</b></label>
                                            <input type="date"  name="end_date" placeholder="Enter end date" value="{{old('end_date')}}" class="form-control" />
                                            @if ($errors->first('end_date'))<div class="alert alert-danger">{!! $errors->first('end_date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                <label><strong>বিস্তারিত(বাংলা অথবা ইংলিশ টেক্সট ) :</strong></label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                                @if ($errors->first('description'))<div class="alert alert-danger">{!! $errors->first('description') !!}</div> @endif
                            </div>


                            



                                       

                                   
                                        <div class="form-group">
                                            <label><b>Comments:</b></label>
                                            <input type="text"  name="comment" placeholder="Enter comments" value="{{old('comment')}}" class="form-control" />
                                            @if ($errors->first('comment'))<div class="alert alert-danger">{!! $errors->first('comment') !!}</div> @endif
                                            
                                        </div>

                                    
                               
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>



             <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>


@endsection