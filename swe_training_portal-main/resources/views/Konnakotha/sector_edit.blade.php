@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              {!! Form::open(['url' => URL::to('/sector/'.$sector->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf   

                                       

                                      

                                     

                                        <div class="form-group">
                                            <label><b>টাইটেল[ইংলিশ]:</b></label>
                                            <input type="text"  name="title" placeholder="উদাহরণ:কন্যাকথা " value="{{$sector->title}}" class="form-control" />
                                            @if ($errors->first('title'))<div class="alert alert-danger">{!! $errors->first('title') !!}</div> @endif
                                            
                                        </div>

                                     

                                   
                                <div class="form-group">
                                <label><strong>বিস্তারিত(ইংলিশ টেক্সট ) :</strong></label>
                                <textarea class="ckeditor form-control" name="description">{{$sector->description}}</textarea>
                                @if ($errors->first('description'))<div class="alert alert-danger">{!! $errors->first('description') !!}</div> @endif
                            </div>

                      




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection