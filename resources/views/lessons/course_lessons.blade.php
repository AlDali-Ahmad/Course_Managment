@extends('welcome')
@section('contect')
    <main class="flex-shrink-0">

        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">{{__('From our blog')}}</h2>
                            <p class="lead fw-normal text-muted mb-5">{{__('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.')}}</p>
                            @can('create lesson')
                            <a id="btn-submit" href="/lessons/create"  class="btn btn-outline-secondary">{{__('Create Lesson')}}</a><br>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    @foreach($lessons as $lesson)
                        <div class="col-lg-4 mb-5">

                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://thumbs.dreamstime.com/b/dice-form-expression-lessons-learned-188305504.jpg" alt="..." />

                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <h5 class="card-title mb-3">{{ $lesson->title }}</h5>
                                    <a href="{{ $lesson->description_lesson }}">{{ $lesson->description_lesson }}</a>
                                    <p class="card-text mb-0">duration : {{ $lesson->duration }}</p>
                                    <p class="card-text mb-0">number_lesson : {{ $lesson->number_course }}</p>
                                </div>

                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">

                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            @can('show lesson')
                                            <a href="/lessons/{{$lesson->id}}" class="btn btn-outline-primary">{{__('Show')}}</a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
