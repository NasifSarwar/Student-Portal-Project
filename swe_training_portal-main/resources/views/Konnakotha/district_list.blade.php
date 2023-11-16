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






<th><center><b>জেলার নাম(ইংলিশ)</b></center></th>

<th><center><b>জেলার নাম(বাংলা)</b></center></th>




<th colspan="3"><center></center></th>


</tr>

@foreach($districts as $doc)
<tr>




<td><center>{{$doc->name_english}}</center></td>
<td><center>{{$doc->name_bangla}}</center></td>



<td>

{!! Form::open(['url' => URL::to('/district/'.$doc->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">ডিলিট</button>
    {!! Form::close() !!}

    
    






</td>
<td><center><a class="btn btn-xs btn-warning" href="/" role="button">ভিউ</a></center></td>

<td>
<a href="{{ URL::to('/district/'.$doc->id.'/edit') }}" class="btn btn-primary mb-1">এডিট</a>

</td>



<!-- Modal content -->

</tr>
@endforeach
</table>
            </center>                      
                </div>
              </div>
             </div>






















@endsection