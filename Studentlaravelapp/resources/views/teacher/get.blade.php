@extends('layouts.app')
@section('content')
    <h1>Teacher Info</h1>
    <h3>Name: {{$teacher->name}}</h3>
    <h3>Designation: {{$teacher->designation}}</h3>
<table class="table table-boardered">
    <h1>Course details</h1>
    <tr>
        <th>Name</th>
        <th>Department</th>
    </tr>
    
    @foreach($teacher->courses as $c)
    <tr>
        <td>{{$c->course->name}}</td>
        <td>{{$c->course->department->name}}</td>
    </tr>
    @endforeach
</table>
{{$teacher}}
@endsection