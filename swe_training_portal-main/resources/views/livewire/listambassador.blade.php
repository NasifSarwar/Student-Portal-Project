@extends('layouts.app')

@section('content')
    <!-- Start gallery  -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <center><h3><b>বিভিন্ন জেলার এম্বাসেডর(District Ambassadors)<br></b></h3></center>
                        <!-- end title -->
                        <!-- start gallery content -->
                        <div class="mu-gallery-content">
                            <div class="mu-gallery-body">
                                <ul id="mixit-container" class="row">
                                    <!-- start single gallery image -->
                                    @foreach($districts as $districtItem)
  <h4><b>{{$districtItem->name_bangla}} ({{$districtItem->name_english}}) </b></h4>
  
 </center>


                                    <div style="overflow-x:auto;">
                                  
  
                                    <br>
  <table>
    <tr>
<th><center><b>ক্রমিক নাম্বার </b></center></th>
<th><center><b>নাম</b></center></th>
<th><center><b>শিক্ষা প্রতিষ্ঠান</b></center></th>
<th><center><b>ফোন/ইমেইল </b></center></th>
<th><center><b>অভিভাবক </b></center></th>

    
    </tr>
    @foreach($districtItem->ambassador as $Item)
    <tr>
      <td><center>{{$Item->roll_no}}</center></td>
      <td><center>{{$Item->name}}</center></td>
      <td><center>{{$Item->institute}}</center></td>
      <td><center>ফোন:{{$Item->phone}}<br>
      ইমেইল: {{$Item->email}}
      
      
      </center></td>
      <td><center>পিতার নাম:{{$Item->fathers_name}}<br>
      মাতার নাম:{{$Item->mothers_name}}
      
      </center></td>
      
     
    </tr>
   @endforeach
  </table>
  <br><br>
  @endforeach

  

</div>
                                </ul>
                                <br>
                                {{ $districts->links('pagination::bootstrap-4')}}

                            </div>
                        </div>
                        <!-- end gallery content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery  -->

@endsection

