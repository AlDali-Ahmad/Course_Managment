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
    <title>{{__('Create Courses')}}</title>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <p class="navbar-brand" >{{__('Platform courses')}}</p>
    </div>
</nav>

<div class="container my-5">
    <form action="{{route('coursetypes.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Name_Courses">Title</label>
            <input
                type="text"
                class="form-control @error('Name') is-invalid @enderror"
                id="Name"
                name="Name"
                value="{{old('Name')}}"
                placeholder="Enter Name"
            />
            @error('Name')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>

        <button id="btn-submit" class="btn btn-primary">{{__('Submit')}}</button>
        <a href="/courses" type="submit" class="btn btn-primary">{{__('Cansel')}}</a>
    </form>

</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
