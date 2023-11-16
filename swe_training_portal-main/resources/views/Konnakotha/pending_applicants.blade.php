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




<th><center><b>ছবি</b></center></th> 
<th><center><b>নাম</b></center></th> 
<th><center><b>ইমেইল</b></center></th>
<th><center><b>জেলা</b></center></th>
<th><center><b>ফোন</b></center></th>
<th><center><b>প্রতিষ্ঠান</b></center></th>
<th><center><b>শ্রেণী</b></center></th>


<th colspan="3"><center></center></th>



</tr>

@foreach($registers as $register)
<tr>


@if($register->image=="N/A")
   
 <td><center> <img src="{{asset('images/girls_icon.jpg')}}" height="75px" width="80px"></center></td>

@else
<td><center><b><img src="{{ asset('/images/' .$register->image) }}" alt="" height="75px" width="80px"></center></td></b></center></td>    

@endif
<td><center><b>{{$register->name}}</b></center></td>

<td><center><b>{{$register->email}}</b></center></td>
<td><center><b>{{$register->district}}</b></center></td>
<td><center><b>{{$register->phone}}</b></center></td>
<td><center><b>{{$register->institution}}</b></center></td>
<td><center><b>{{$register->class}}</b></center></td>


<td><center><a class="btn btn-xs btn-success" href="approve/{{$register->id}}" role="button">এক্সেপ্ট</a></center></td>




<td>

{!! Form::open(['url' => URL::to('/pending_applicants/'.$register->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">
রিজেক্ট</button>
    {!! Form::close() !!}

    
    






</td>




<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection