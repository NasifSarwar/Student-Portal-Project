@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/sector" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                      

                                     

                                        <div class="form-group">
                                            <label><b>টাইটেল[ইংলিশ]:</b></label>
                                            <input type="text"  name="title" placeholder="উদাহরণ:কন্যাকথা " value="{{old('title')}}" class="form-control" />
                                            @if ($errors->first('title'))<div class="alert alert-danger">{!! $errors->first('title') !!}</div> @endif
                                            
                                        </div>

                                     

                                   
                                <div class="form-group">
                                <label><strong>বিস্তারিত(ইংলিশ টেক্সট ) :</strong></label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                                @if ($errors->first('description_english'))<div class="alert alert-danger">{!! $errors->first('description_english') !!}</div> @endif
                            </div>

                      




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection