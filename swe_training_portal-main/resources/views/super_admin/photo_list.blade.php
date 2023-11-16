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
<th><center><b>ক্যাপশন (ইংলিশ) </b></center></th>
<th><center><b>ক্যাপশন (বাংলা)</b></center></th>


<th colspan="3"><center></center></th>



</tr>

@foreach($photos as $photo)
<tr>



<td><center><b>
    
    <a class="image-link" target="_blank" href="{{ asset('/images/' .$photo->filename) }}">
    <img src="{{ asset('/images/' .$photo->filename) }}" alt="" height="75px" width="80px"></center></td>
    </a>
    
    </b></center></td>    
<td><center><b>{{$photo->weight}}</b></center></td>

<td><center><b>{{$photo->photo_caption_english}}</b></center></td>
<td><center><b>{{$photo->photo_caption_bangla}}</b></center></td>








<td>

{!! Form::open(['url' => URL::to('/photo/'.$photo->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">ডিলিট</button>
    {!! Form::close() !!}

    
    






</td>
<td><center><a class="btn btn-xs btn-warning" target="_blank" href="/gallery_bn" role="button">ভিউ</a></center></td>

<td>
<a href="{{ URL::to('/photo/'.$photo->id.'/edit') }}" class="btn btn-primary mb-1">এডিট</a>

</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
              
               {{ $photos->links('pagination::bootstrap-4')}}
             </div>






















@endsection