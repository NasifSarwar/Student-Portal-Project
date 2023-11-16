@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/notice" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>নোটিসের তারিখ:</b></label>
                                            <input type="date"  name="date" placeholder="উদাহরণ:1" value="{{old('date')}}" class="form-control" />
                                            @if ($errors->first('date'))<div class="alert alert-danger">{!! $errors->first('date') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>নোটিসের টাইটেল(ইংলিশ):</b></label>
                                            <input type="text"  name="name" placeholder="Example:Konnakotha" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>নোটিসের টাইটেল(বাংলা):</b></label>
                                            <input type="text"  name="notice_bangla" placeholder="উদাহরণ:কন্যাকথা " value="{{old('notice_bangla')}}" class="form-control" />
                                            @if ($errors->first('notice_bangla'))<div class="alert alert-danger">{!! $errors->first('notice_bangla') !!}</div> @endif
                                            
                                        </div>

                                      

                              




                                        <div class="form-group">
                                            <label><b>নোটিশ আপলোড :</b></label>
                                                <input type="file" name="filename" value="{{old('filename')}}" class="form-control" />
                                                @if ($errors->first('filename'))<div class="alert alert-danger">{!! $errors->first('filename') !!}</div> @endif
                                            </div>


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection