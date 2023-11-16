@extends('layouts.user')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Succesfully Done
                  </div>
@endif
          </div>

          <div class="row">
            <div class="col-lg-12">
           
              <table class="table table-striped">
<thead>
<tr>



<th><center><b>Name</b></center></th> 
<th><center><b>Banner</b></center></th>   
<th><center><b>Start Date</b></center></th>
<th><center><b>End Date</b></center></th>
<th><center><b>Category</b></center></th>
<th><center><b>District</b></center></th>
<th><center><b>Status</b></center></th>



<th colspan="3"><center></center></th>



</tr>

@foreach($events as $event)
<tr>


<td><center><b>{{$event->training_name}}</b></center></td>
<td><center><b><img src="{{ asset('/images/' .$event->photos) }}" alt="" height="75px" width="80px"></center></td></b></center></td>    


<td><center><b>{{$event->start_date}}</b></center></td>
<td><center><b>{{$event->end_date}}</b></center></td>
<td><center><b>{{$event->category_id}}</b></center></td>
<td><center><b>{{$event->training_id}}</b></center></td>


<td><button type="button" class="btn btn-dark">{{$event->status}}</td>







<td>
{!! Form::open(['url' => URL::to('/training/'.$event->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}

    
    






</td>
<td><center><a class="btn btn-xs btn-warning" target="_blank" href="/training_details/{{$event->id}}" role="button">View</a></center></td>

<td>
<a href="{{ URL::to('/training/'.$event->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>

</td>






<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
                
                   {{ $events->links('pagination::bootstrap-4')}}
                
              </div>
             </div>






















@endsection