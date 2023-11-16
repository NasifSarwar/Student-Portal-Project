@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Action Completed Successfully
                  </div>
@endif

          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <table class="table table-striped">
<thead>
<tr>



<th><center><b>Start Date</b></center></th>
<th><center><b>End Date</b></center></th>
<th><center>Tasks</center></th>
<th><center>Comments</center></th>

<th colspan="2"><center>Action</center></th>


</tr>

@foreach($tasks as $task)
<tr>

<td><center>{{$task->start_date}}</center></td>
<td><center>{{$task->end_date}}</center></td>
<td><center>

<?php

echo $task->description;

?>

</center></td>
<td><center>{{$task->comment}}</center></td>




<td>

{!! Form::open(['url' => URL::to('/task/'.$task->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}
</td>


<td>
<a href="{{ URL::to('/task/'.$task->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>
</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>


@endsection