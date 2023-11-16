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

                                       

                                      
                                         @if(Request::path()=="sector/36/edit")
                                         
                                         
                                         
                                             <div class="form-group">
                                            <label><b>বর্তমান ব্যানার:</b></label>
                                            <img src="{{ asset('images/' . $sector->filename) }}" alt="" height="90px" width="120">
                                            </div>





                                        <div class="form-group">
                                            <label><b>ছবি আপলোড:</b></label>
                                                <input type="file" name="filename" value="{{old('filename')}}" class="form-control" />
                                                <input type="hidden" name="hidden_image" value="{{ $sector->image}}" />
                                                <input type="hidden"  name="title" value="{{$sector->title}}" />
                                                <input type="hidden"  name="description" value="{{$sector->description}}" />
                                            </div>
                                            
                                            <div class="form-group">
                                            <label><b>ভিডিওর লিংক:</b></label>
                                            <input type="text"  name="link" placeholder="উদাহরণ:https://www.youtube.com/watch?v=WDDQ-Z7_N3k" value="{{$sector->link}}" class="form-control" />
                                            
                                        </div>

                                     @else
                                     
                                     
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
                            
                             @endif
                                     
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                
                                     

                                    
                         




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection