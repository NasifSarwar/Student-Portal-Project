@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/video" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>ভিডিওর সিরিয়াল:</b></label>
                                            <input type="text"  name="weight" placeholder="উদাহরণ:1" value="{{old('weight')}}" class="form-control" />
                                            @if ($errors->first('weight'))<div class="alert alert-danger">{!! $errors->first('weight') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ভিডিওর শিরোনাম(ইংলিশ):</b></label>
                                            <input type="text"  name="vedio_caption_english" placeholder="Example:Opening Programme" value="{{old('vedio_caption_english')}}" class="form-control" />
                                            @if ($errors->first('vedio_caption_english'))<div class="alert alert-danger">{!! $errors->first('vedio_caption_english') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ভিডিওর শিরোনাম (বাংলা):</b></label>
                                            <input type="text"  name="vedio_caption_bangla" placeholder="উদাহরণ:উদ্বোধন অনুষ্ঠান " value="{{old('vedio_caption_bangla')}}" class="form-control" />
                                            @if ($errors->first('vedio_caption_bangla'))<div class="alert alert-danger">{!! $errors->first('vedio_caption_bangla') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>ভিডিওর লিংক:</b></label>
                                            <input type="text"  name="source" placeholder="উদাহরণ:https://www.youtube.com/watch?v=WDDQ-Z7_N3k" value="{{old('link')}}" class="form-control" />
                                            @if ($errors->first('source'))<div class="alert alert-danger">{!! $errors->first('source') !!}</div> @endif
                                            
                                        </div>


                                 
                                   

                              




                                     

                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection