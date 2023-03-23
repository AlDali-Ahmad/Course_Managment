@extends('welcome')
@section('contect')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Popular Courses</h1>
            <a id="btn-submit" href="/courses/create"  class="btn btn-outline-secondary">Create Course</a><br>
        </div>
        <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                @can('ReadMore')
                                    <a href="{{route('lessons.course_lessons',$course->id)}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                @endcan
                                <a href="/login" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">


                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4>{{$course->Name_Courses}}</h4>
                            <h3 class="mb-4">{{$course->description}}</h3>
                            @foreach($course_types as $course_type)
                                @if($course_type->id == $course->course_type_id)
                                    <h6>{{$course_type->Name}}</h6>
                                @endif
                            @endforeach
                        </div>
                        <div class="d-flex border-top">
                            @foreach($techares as $techare)
                                @if($techare->id == $course->teacher_id)
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>{{$techare->Full_Name}}</small>
                                @endif
                            @endforeach

                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{$course->count_hours}} Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20 Students</small>
                        </div>
                        <br>
                        <form id="delete-form" class="" action="" method="POST">
                            <a href="/Adminindex" class="btn btn-outline-primary">Back</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>

                </div>

        </div>
    </div>
</div>

@endsection
