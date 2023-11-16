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
<th><center><b>সিরিয়াল নাম্বার</b></center></th> 
<th><center><b>নাম(ইংলিশ) </b></center></th>
<th><center><b>নাম(বাংলা)</b></center></th>
<th><center><b>পদবি(ইংলিশ) </b></center></th>
<th><center><b>পদবি(বাংলা)</b></center></th>

<th colspan="3"><center></center></th>



</tr>

@foreach($speeches as $speech)
<tr>



<td><center><b>
    <a class="image-link" target="_blank" href="{{ asset('/images/' .$speech->filename) }}">
    <img src="{{ asset('/images/' .$speech->filename) }}" alt="" height="75px" width="80px"></center></td>
   </a>
    </b></center></td>    
<td><center><b>{{$speech->weight}}</b></center></td>

<td><center><b>{{$speech->name_english}}</b></center></td>
<td><center><b>{{$speech->name_bangla}}</b></center></td>
<td><center><b>{{$speech->designation_english}}</b></center></td>
<td><center><b>{{$speech->designation_bangla}}</b></center></td>








<td>

{!! Form::open(['url' => URL::to('/speech/'.$speech->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">ডিলিট</button>
    {!! Form::close() !!}

    
    






</td>
<td><center><a class="btn btn-xs btn-warning" target="_blank" href="/#mu-testimonial" role="button">ভিউ</a></center></td>
<td>
<a href="{{ URL::to('/speech/'.$speech->id.'/edit') }}" class="btn btn-primary mb-1">এডিট</a>

</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection