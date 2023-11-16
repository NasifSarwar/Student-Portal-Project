@extends('layouts.user')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/training/'.$event->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf

                                       

                                        <div class="form-group">
                                            <label><b>Name :</b></label>
                                            <input type="text"  name="training_name"  value="{{$event->training_name}}" class="form-control" />
                                            @if ($errors->first('training_name'))<div class="alert alert-danger">{!! $errors->first('training_name') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Start Date:</b></label>
                                            <input type="date"  name="start_date" value="{{$event->start_date}}" class="form-control" />
                                            @if ($errors->first('start_date'))<div class="alert alert-danger">{!! $errors->first('start_date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>End Date:</b></label>
                                            <input type="date"  name="end_date" value="{{$event->end_date}}" class="form-control" />
                                            @if ($errors->first('end_date'))<div class="alert alert-danger">{!! $errors->first('end_date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Training Place :</b></label>
                                            <select class="form-control" name="training_id">

                          

                                    <option value="Not Choosen"> 
                                   {{$event->training_id}}
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
                                            <label><b>Category:</b></label>
                                            <select class="form-control" name="category_id">

                          
                                     
                                    <option value="{{$event->category_id}}"> 
                                   {{$event->category_id}}
     </option>
     @foreach($types as $type)
     <option value="{{$type->name}}"> 
      {{$type->type}}
     </option>
     @endforeach
    
 </select>
                                            @if ($errors->first('training_id'))<div class="alert alert-danger">{!! $errors->first('training_id') !!}</div> @endif

                                        </div>    

                                       

                                   
                                <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="ckeditor form-control" name="description">{{$event->description}}</textarea>
                                @if ($errors->first('description'))<div class="alert alert-danger">{!! $errors->first('description') !!}</div> @endif
                            </div>


                            <div class="form-group">
                                            <label><b>Status :</b></label>
                                            <select class="form-control" name="status">

                          

                                    <option value="Not Choosen"> 
                                    {{$event->status}}
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
                                            <label><b>Current Banner:</b></label>
                                            <img src="{{ asset('images/' . $event->photos) }}" alt="" height="90px" width="120">
                                            </div>





                                        <div class="form-group">
                                            <label><b>Upload New Image:</b></label>
                                                <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                                @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                                <input type="hidden" name="hidden_image" value="{{ $event->photos}}" />
                                            </div>


                                      
                              

                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection