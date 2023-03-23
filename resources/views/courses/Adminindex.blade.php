@extends('welcome')


@section('contect')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin Courses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('courses.create') }}">{{__('Create New Course')}} </a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>{{__('Name_Courses')}}</th>
            <th>{{__('description')}}</th>
            <th>{{__('Teacher')}}</th>
            <th>{{__('Course_Gategore')}}</th>
            <th>{{__('Count_hours')}}</th>
            <th>{{__('Action')}}</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->Name_Courses }}</td>
                <td>{{ $course->description }}</td>
                <td>@foreach($techares as $techare)
                        @if($techare->id == $course->teacher_id)
                            <p>{{$techare->Full_Name}}</p>
                        @endif
                    @endforeach</td>
                <td>
                @foreach($course_types as $course_type)
                    @if($course_type->id == $course->course_type_id)
                        <p>{{$course_type->Name}}</p>
                    @endif
                @endforeach
                    </td>
                <td>{{ $course->count_hours}}</td>
                <td>
                        <a href="/courses/{{ $course->id }}" class="btn btn-outline-primary">{{__('Show')}}</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
