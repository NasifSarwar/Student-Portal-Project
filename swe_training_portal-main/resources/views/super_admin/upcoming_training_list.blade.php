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




 
<th><center><b>তারিখ</b></center></th>
<th><center><b>শিরোনাম(ইংলিশ)</b></center></th>
<th><center><b> শিরোনাম(বাংলা)</b></center></th>
<th><center><b>স্থান(ইংলিশ)</b></center></th>
<th><center><b>স্থান(বাংলা)</b></center></th>
<th><center><b>মন্তব্য(ইংলিশ)</b></center></th>
<th><center><b>মন্তব্য(বাংলা)</b></center></th>
<th colspan="3"><center></center></th>



</tr>

@foreach($exams as $exam)
<tr>



   

<td><center><b>{{$exam->date}}</b></center></td>
<td><center><b>{{$exam->title_en}}</b></center></td>
<td><center><b>{{$exam->title_bn}}</b></center></td>
<td><center><b>{{$exam->place_en}}</b></center></td>
<td><center><b>{{$exam->place_bn}}</b></center></td>
<td><center><b>{{$exam->comments_en}}</b></center></td>
<td><center><b>{{$exam->comments_bn}}</b></center></td>








<td>

{!! Form::open(['url' => URL::to('/upcoming_training/'.$exam->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">ডিলিট</button>
    {!! Form::close() !!}

    
    






</td>
<td><center><a class="btn btn-xs btn-warning" target="_blank" href="/upcoming_training_bn" role="button">ভিউ</a></center></td>

<td>
<a href="{{ URL::to('/upcoming_training/'.$exam->id.'/edit') }}" class="btn btn-primary mb-1">এডিট</a>

</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
              
                   {{ $exams->links('pagination::bootstrap-4')}}
              
             </div>






















@endsection