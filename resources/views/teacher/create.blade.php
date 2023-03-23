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
    <title>{{__('Create Teacher')}}</title>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <p class="navbar-brand" >{{__('Create Teacher')}}</p>
    </div>
</nav>

<div class="container my-5">
    <form action="{{route('teacher.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Full_Name">{{__('Name')}}</label>
            <input
                type="text"
                class="form-control @error('Full_Name') is-invalid @enderror"
                id="Full_Name"
                name="Full_Name"
                value="{{old('Full_Name')}}"
                placeholder="Enter Full_Name"
            />
            @error('Full_Name')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">{{__('Phone_number')}}</label>
            <input
                type="text"
                class="form-control @error('Phone_number') is-invalid @enderror"
                id="Phone_number"
                name="Phone_number"
                value="{{old('Phone_number')}}"
                placeholder="Enter Phone_number"
            />
            <label for="count_hours">{{__('Academic_education')}}</label>
            <textarea
                class="form-control @error('Academic_education') is-invalid @enderror"
                id="Academic_education"
                name="Academic_education"
                rows="3"
                placeholder="Enter Phone_number"
            >{{old('Academic_education')}}</textarea>
            @error('Academic_education')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <button id="btn-submit" class="btn btn-primary">{{__('Submit')}}</button>
        <a href="/teacher" type="submit" class="btn btn-primary">{{__('Cansel')}}</a>
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
