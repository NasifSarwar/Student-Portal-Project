@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/content/'.$store->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                           

                                       

                                


                                   


                                        <div class="form-group">
                                            <label><b>Category:</b></label>
                                            <select class="form-control" name="type">

                          

                                 
     
     <option value="{{$store->type}}">  Existing: {{$store->type}}</option>
     @foreach($types as $type)
     <option value="{{$type->type}}">{{$type->type}}</option>
     @endforeach
     
 </select>
                                            @if ($errors->first('type'))<div class="alert alert-danger">{!! $errors->first('type') !!}</div> @endif
                                            
                                        </div>



                                        <div class="form-group">
                                            <label><b>Position:</b></label>
                                            <select class="form-control" name="position">

                          

                          Existing:          
     
     <option value="{{$store->position}}">  Existing:{{$store->position}}</option>
     @foreach($types as $type)
     <option value="{{$type->position}}">{{$type->position}}</option>
     @endforeach
     
 </select>
                                            @if ($errors->first('type'))<div class="alert alert-danger">{!! $errors->first('type') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name"  value="{{$store->name}}" class="form-control" />
                                            @if ($errors->first('title_bn'))<div class="alert alert-danger">{!! $errors->first('title_bn') !!}</div> @endif
                                            
                                        </div>

                                     

                                   
                                
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                      
                                      
                                     
                                      
                                  
                </div>
              </div>
             </div>






















@endsection
