@extends('welcome')
@section('contect')
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Name_Courses">Title</label>
            <input
                type="text"
                class="form-control @error('Name') is-invalid @enderror"
                id="Name"
                name="Name"
                value="{{ $coursetypes->Name }}"
                placeholder="Enter Name_Courses"
            />
            @error('Name')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>

        <button id="btn-submit" class="btn btn-primary">Submit</button>
        <a href="/courses" type="submit" class="btn btn-primary">Cansel</a>
    </form>
@endsection
