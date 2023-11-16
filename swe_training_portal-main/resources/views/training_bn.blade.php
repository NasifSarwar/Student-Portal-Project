@extends('layouts.master')

@section('content')
    <!-- Start gallery  -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-gallery-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>অনুষ্ঠিত সকল প্রশিক্ষণের তালিকা </h2>

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
      <th><center>প্রশিক্ষণের স্থান</center></th>
      <th><center>তারিখ</center></th>
      <th><center>বিস্তারিত</center></th>
    </tr>
     @foreach($events as $event)
    <tr>
      <td><center>{{$event->training_place_bangla}}</center></td>
      <td><center>{{$event->date}}</center></td>
      <td><center><a class="btn btn-xs btn-warning" href="/training_bangla/{{$event->id}}" role="button">view</a></center></td>

    </tr>
   @endforeach
  </table>


</div>
                                </ul>
                                <br>
                                {{ $events->links('pagination::bootstrap-4')}}

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

