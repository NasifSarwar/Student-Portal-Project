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




 

<th><center><b>নাম</b></center></th>
<th><center><b>শিক্ষা প্রতিষ্ঠান</b></center></th>
<th><center><b>শ্রেণী</b></center></th>
<th><center><b>ইমেইল</b></center></th>
<th><center><b>ফোন </b></center></th>






</tr>

@foreach($items as $item)
<tr>



   


<td><center><b>{{$item->name}}</b></center></td>
<td><center><b>{{$item->institution}}</b></center></td>
<td><center><b>{{$item->class}}</b></center></td>
<td><center><b>{{$item->email}}</b></center></td>
<td><center><b>{{$item->phone}}</b></center></td>
<td><center><b>{{$item->fathers_name}}</b></center></td>
<td><center><b>{{$item->mothers_name}}</b></center></td>










<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection