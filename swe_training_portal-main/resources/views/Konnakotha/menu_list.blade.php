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




<th><center><b>মেন্যু আইডি</b></center></th> 
<th><center><b>সিরিয়াল নাম্বার</b></center></th> 
<th><center><b>মেন্যুর নাম(ইংলিশ) </b></center></th>
<th><center><b>মেন্যুর নাম(বাংলা)</b></center></th>
<th><center><b>লিংক(ইংলিশ)</b></center></th>
<th><center><b>লিংক((বাংলার)</b></center></th>

<th colspan="3"><center></center></th>



</tr>

@foreach($menus as $menu)
<tr>


<td><center><b>{{$menu->id}}</b></center></td>
   
<td><center><b>{{$menu->weight}}</b></center></td>

<td><center><b>{{$menu->menu_name}}</b></center></td>
<td><center><b>{{$menu->menu_name_bangla}}</b></center></td>
<td><center><b>{{$menu->link}}</b></center></td>
<td><center><b>{{$menu->link_bangla}}</b></center></td>








<td>

{!! Form::open(['url' => URL::to('/menu/'.$menu->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">ডিলিট</button>
    {!! Form::close() !!}

    
    






</td>
<td><center><a class="btn btn-xs btn-warning" href="/" role="button">ভিউ</a></center></td>

<td>
<a href="{{ URL::to('/menu/'.$menu->id.'/edit') }}" class="btn btn-primary mb-1">এডিট</a>

</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection