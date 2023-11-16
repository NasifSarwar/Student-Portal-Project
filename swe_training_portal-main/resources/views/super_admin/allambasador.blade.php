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




 

<th><center><b>ক্রমিক নাম্বার </b></center></th>
<th><center><b>শিক্ষা প্রতিষ্ঠান</b></center></th>
<th><center><b>ইমেইল</b></center></th>
<th><center><b>ফোন </b></center></th>
<th><center><b>পিতার নাম </b></center></th>
<th><center><b>মাতার নাম </b></center></th>

<th colspan="3"><center></center></th>



</tr>

@foreach($items as $item)
<tr>



   


<td><center><b>{{$item->roll_no}}</b></center></td>
<td><center><b>{{$item->institute}}</b></center></td>
<td><center><b>{{$item->email}}</b></center></td>
<td><center><b>{{$item->phone}}</b></center></td>
<td><center><b>{{$item->fathers_name}}</b></center></td>
<td><center><b>{{$item->mothers_name}}</b></center></td>








<td>

{!! Form::open(['url' => URL::to('/ambassador/'.$item->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">ডিলিট</button>
    {!! Form::close() !!}

    
    






</td>
<td><center><a class="btn btn-xs btn-warning" target="_blank" href="/ambassadors_of_districts" role="button">ভিউ</a></center></td>

<td>
<a href="{{ URL::to('/ambassador/'.$item->id.'/edit') }}" class="btn btn-primary mb-1">এডিট</a>

</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection