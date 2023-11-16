@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                 সফলভাবে সম্পূর্ণ হয়েছে 
                  </div>
@endif
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <center>
              <table class="table table-striped">
<thead>
<tr>


<th><center><b>নাম</b></center></th>

<th><center><b>জেলা</b></center></th>




<th><center><b>প্রতিষ্ঠান</b></center></th>

<th><center><b>শ্রেণী</b></center></th>


<th><center><b>ফোন</b></center></th>

<th><center><b>প্রশ্ন/জিজ্ঞাসা</b></center></th>

<th><center><b>উত্তর</b></center></th>





</tr>

@foreach($questions as $question)
<tr>

<td><center>{{$question->name}}</center></td>
<td><center>{{$question->district}}</center></td>
<td><center>{{$question->institution}}</center></td>
<td><center>{{$question->class}}</center></td>
<td><center>{{$question->phone}}</center></td>

<td><center><?php
    
    
    
    echo $question->question;
    
    
    ?></center></td>


<td><center><?php
    
    
    
    echo $question->answer;
    
    
    ?></center></td>



<!-- Modal content -->

</tr>
@endforeach
</table>
            </center>                      
                </div>
                
                  {{ $questions->links('pagination::bootstrap-4')}}
                
              </div>
             </div>






















@endsection