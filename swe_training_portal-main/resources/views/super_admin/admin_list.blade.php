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
           
              <table class="table table-striped">
<thead>
<tr>



<th><center><b>ছবি </b></center></th>   
<th><center><b>নাম</b></center></th>   
<th><center><b>ইমেইল</b></center></th> 
<th><center><b>ফোন</b></center></th>


<th colspan="3"><center></center></th>



</tr>

@foreach($users as $user)
<tr>



<td><center><b><img src="{{ asset('/images/' .$user->image) }}" alt="" height="75px" width="80px"></center></td></b></center></td>    
<td><center><b>{{$user->name}}</b></center></td>

<td><center><b>{{$user->email}}</b></center></td>
<td><center><b>{{$user->phone}}</b></center></td>









<td>

{!! Form::open(['url' => URL::to('/add_admin/'.$user->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">ডিলিট</button>
    {!! Form::close() !!}

    
    








<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection