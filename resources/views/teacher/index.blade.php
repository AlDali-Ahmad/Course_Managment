@extends('welcome')
@section('contect')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{__('Instructors')}}</h6>
                <h1 class="mb-5">{{__('Expert Instructors')}}</h1>
            </div>

            <div class="row g-4">
                @foreach($teachers as $teacher)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">

                    <div class="team-item bg-light">

                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('img/team-3.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{$teacher->Full_Name}}</h5>
                            <small>{{$teacher->Academic_education}}</small>
                        </div>

                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
