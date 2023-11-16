@extends('layouts.user')

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
                                            <label><b>Training Name:</b></label>
                                            <input type="text"  name="training_name" placeholder="Laravel" value="{{old('training_name')}}" class="form-control" />
                                            @if ($errors->first('training_name'))<div class="alert alert-danger">{!! $errors->first('training_name') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Starting Date:</b></label>
                                            <input type="date"  name="start_date"  value="{{old('start_date')}}" class="form-control" />
                                            @if ($errors->first('start_date'))<div class="alert alert-danger">{!! $errors->first('start_date') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>End Date:</b></label>
                                            <input type="date"  name="end_date"  value="{{old('end_date')}}" class="form-control" />
                                            @if ($errors->first('end_date'))<div class="alert alert-danger">{!! $errors->first('end_date') !!}</div> @endif
                                            
                                        </div>




                                        <div class="form-group">
                                            <label><b>Training Place :</b></label>
                                            <select class="form-control" name="training_id">

                          

                                    <option value="Not Choosen"> 
                                    Select from dropdown
     </option>
     @foreach($districts as $district)
     <option value="{{$district->name_english}}"> 
      {{$district->name_english}}
     </option>
     @endforeach
    
 </select>
                                            @if ($errors->first('training_id'))<div class="alert alert-danger">{!! $errors->first('training_id') !!}</div> @endif

                                        </div>    

                                        <div class="form-group">
                                            <label><b>Category :</b></label>
                                            <select class="form-control" name="category_id">

                          

                                    <option value="Not Choosen"> 
                                    Select from dropdown
     </option>
     @foreach($types as $type)
     <option value="{{$type->name}}"> 
      {{$type->name}}
     </option>
     @endforeach
    
 </select>
                                            @if ($errors->first('category_id'))<div class="alert alert-danger">{!! $errors->first('category_id') !!}</div> @endif

                                        </div>    


                                        <div class="form-group">
                                            <label><b>Status :</b></label>
                                            <select class="form-control" name="status">

                          

                                    <option value="Not Choosen"> 
                                    Select from dropdown
     </option>
     
     <option value="ongoing"> 
      Ongoing
     </option>

     <option value="upcoming"> 
      Upcoming
     </option>
     
 </select>
                                            @if ($errors->first('status'))<div class="alert alert-danger">{!! $errors->first('status') !!}</div> @endif

                                        </div>    





                                     

                                   
                                <div class="form-group">
                                <label><strong>Training Details:</strong></label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                                @if ($errors->first('description'))<div class="alert alert-danger">{!! $errors->first('description') !!}</div> @endif
                            </div>

                           




                                        <div class="form-group">
                                            <label><b>Upload Banner:</b></label>
                                                <input type="file" name="filename" value="{{old('filename')}}" class="form-control" />
                                                @if ($errors->first('filename'))<div class="alert alert-danger">{!! $errors->first('filename') !!}</div> @endif
                                            </div>


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection