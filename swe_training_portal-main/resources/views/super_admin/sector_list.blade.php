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






<th><center><b>কন্টেন্টের নাম</b></center></th>






<th colspan="3"><center></center></th>


</tr>

@foreach($sectors as $sector)
<tr>




<td><center>{{$sector->title}}</center></td>





<td><center><a class="btn btn-xs btn-warning" target="_blank" href="{{$sector->link}}" role="button">ভিউ</a></center></td>

<td>
<a href="{{ URL::to('/sector/'.$sector->id.'/edit') }}" class="btn btn-primary mb-1">এডিট</a>

</td>



<!-- Modal content -->

</tr>
@endforeach
</table>
            </center>                      
                </div>
                
                 {{ $sectors->links('pagination::bootstrap-4')}}
              </div>
             </div>






















@endsection