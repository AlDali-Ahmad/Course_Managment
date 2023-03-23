<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />
    <title>Create Lesson</title>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <p class="navbar-brand" >{{__('Create Lesson')}}</p>
    </div>
</nav>

<div class="container my-5">
    <form action="{{route('lessons.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="hidden" name="course_id">
            <label for="Name_Courses">Title</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{old('title')}}"
                placeholder="Enter title"
            />
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">{{__('description')}}</label>
            <textarea
                class="form-control @error('description_lesson') is-invalid @enderror"
                id="description_lesson"
                name="description_lesson"
                rows="3"
                placeholder="Enter content"
            >{{old('description_lesson')}}</textarea>
            @error('description_lesson')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            <label for="duration">duration</label>
            <input
                type="text"
                class="form-control @error('duration') is-invalid @enderror"
                id="duration"
                name="duration"
                value="{{old('duration')}}"
                placeholder="Enter duration"
            />
            @error('duration')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            <label for="number_course">{{__('number_course')}}</label>
            <input
                type="text"
                class="form-control @error('number_course') is-invalid @enderror"
                id="number_course"
                name="number_course"
                value="{{old('number_course')}}"
                placeholder="Enter number_course"
            />
            @error('number_course')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror


            <label>{{__('Course')}}</label>
            <select class="form-control" name="course_id">
                @foreach($courses as $course)
                    <option value="{{$course->id}}">{{$course->Name_Courses}}</option>
                @endforeach
            </select>



            {{--
            <label for="course_id"></label>
            <input
                type="text"
                class="form-control @error('number_course') is-invalid @enderror"
                id="course_id"
                name="course_id"
                value="{{old('course_id')}}"
                placeholder="Enter course_id"
            />--}}
        </div>
        <button id="btn-submit" class="btn btn-primary">Submit</button>
        <a href="/lessons" type="submit" class="btn btn-primary">Cansel</a>
    </form>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; ِAhmad Dali , lessons Maneger 2023</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
