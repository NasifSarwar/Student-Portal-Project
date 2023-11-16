@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="/content" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                <div class="form-group">
                                            <label><b>Content Type:</b></label>
                                            <select class="form-control" name="type">

                          

                                    <option value=""> 
                                    Select from dropdown
     </option>
    
     <option value="Category">Category</option>
     <option value="Special Trainings">Special Trainings</option>
  
 </select>
                                            @if ($errors->first('type'))<div class="alert alert-danger">{!! $errors->first('type') !!}</div> @endif

                                        </div>

                                        

                                        <div class="form-group">
                                            <label><b>Preferred Coloumn:</b></label>
                                            <select class="form-control" name="position">

                          

                                    <option value=""> 
                                    Select from dropdown
     </option>
    
     <option value="1">First</option>
     <option value="2">Second</option>
     <option value="3">Third</option>
     <option value="4">Fourth</option>

  
 </select>
                                            @if ($errors->first('position'))<div class="alert alert-danger">{!! $errors->first('position') !!}</div> @endif

                                        </div>



                                   


                                        <div class="form-group">
                                            <label><b>Enter Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter Name"  class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>



                                     

                                   
                               


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection
