@extends('layouts.app')
@section('content')
    <h1>Teacher Info</h1>
    <h3>Name: {{$teacher->name}}</h3>
    <h3>User Id: {{$teacher->user_id}}</h3>
    <h3>Designation: {{$teacher->designation}}</h3>

    <h1>Course Details : </h1>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Department Name</th>
            <th>Semester</th>
        </tr>
        @foreach($teacher->taught_courses as $c)
            <tr>
                <td>{{$c->course->name}}</td>
                <td>{{$c->course->department->name}}</td>
                <td>{{$c->semester->name}}</td>
            </tr>
        @endforeach
    </table>

@endsection