@extends('layouts.app')

@section('content')
    <!-- Start gallery  -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-gallery-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Our Friends</h2>

                        </div>
                        <!-- end title -->
                        <!-- start gallery content -->
                        <div class="mu-gallery-content">
                            <div class="mu-gallery-body">
                                <ul id="mixit-container" class="row">
                                    <!-- start single gallery image -->
                                    <div style="overflow-x:auto;">
  <table>
    <tr>
      
      <th><center>নাম(ইংলিশ)</center></th>
      <th><center>নাম(বাংলা) </center></th>
    </tr>
     @foreach($friends as $friend)
    <tr>
      <td><center>{{$friend->name_bn}}</center></td>
      <td><center>{{$friend->name_en}}</center></td>
      <td>


    </tr>
   @endforeach
  </table>


</div>
                                </ul>
                                <br>
                              

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

