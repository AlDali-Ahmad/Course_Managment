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
    <title>Create Courses</title>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <p class="navbar-brand" >{{__('Create courses')}}</p>
    </div>
</nav>

<div class="container my-5">
    <form action="{{route('courses.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Name_Courses">Title</label>
            <input
                type="text"
                class="form-control @error('Name_Courses') is-invalid @enderror"
                id="Name_Courses"
                name="Name_Courses"
                value="{{old('Name_Courses')}}"
                placeholder="Enter Name_Courses"
            />
            @error('Name_Courses')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <textarea
                class="form-control @error('description') is-invalid @enderror"
                id="description"
                name="description"
                rows="3"
                placeholder="Enter content"
            >{{old('description')}}</textarea>
            @error('description')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            <label for="count_hours">Hours</label>
            <input
                type="text"
                class="form-control @error('count_hours') is-invalid @enderror"
                id="count_hours"
                name="count_hours"
                value="{{old('count_hours')}}"
                placeholder="Enter count_hours"
            />
            @error('count_hours')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <label>teacher_id</label>
            <select class="form-control" name="teacher_id">
                @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->Full_Name}}</option>
                @endforeach
            </select>

            <label>course_type_id</label>
            <select class="form-control" name="course_type_id">
                @foreach($coursetypes as $coursetype)
                    <option value="{{$coursetype->id}}">{{$coursetype->Name}}</option>
                @endforeach
            </select>

        </div>
        <button id="btn-submit" class="btn btn-primary">Submit</button>
        <a href="/coursetypes" type="submit" class="btn btn-primary">Cansel</a>
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
