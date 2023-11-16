@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Successfully Done
                  </div>
@endif
          </div>

          <div class="row">
            <div class="col-lg-12">
           
              <table class="table table-striped">
<thead>
<tr>


<th><center><b>Category ID</b></center></th>   


<th><center><b>Preffered Coloumn</b></center></th>   


<th><center><b>Name</b></center></th>


<th colspan="3"><center></center></th>



</tr>

@foreach($types as $type)
<tr>





<td><center><b>{{$type->id}}</b></center></td>
<td><center><b>{{$type->position}}</b></center></td>
<td><center><b>{{$type->name}}</b></center></td>









<td>

{!! Form::open(['url' => URL::to('/content/'.$type->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}

    
    






</td>
<td><center><a class="btn btn-xs btn-warning" href="/" target="_blank" role="button">View</a></center></td>

<td>
<a href="{{ URL::to('/content/'.$type->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>

</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
              
              
              
                                {{ $types->links('pagination::bootstrap-4')}}

              
             </div>






















@endsection