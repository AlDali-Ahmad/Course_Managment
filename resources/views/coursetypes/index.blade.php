@extends('welcome')
@section('contect')
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{__('Categories')}}</h6>
                <h1 class="mb-5">{{__('Courses Categories')}}</h1>
            </div>
            <div class="row g-3">
                @foreach($coursetypes as $coursetype)
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="{{route('gategore.course_courses',$coursetype->id)}}">
                                <img class="img-fluid" src="{{asset('img/cat-1.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">{{$coursetype->Name}}</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>





@endsection
