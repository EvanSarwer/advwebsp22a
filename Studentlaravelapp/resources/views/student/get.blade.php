@extends('layouts.app')
@section('content')
    <h1>Student Info</h1>
    <h3>Name: {{$student->name}}</h3>
    <h3>Id: {{$student->id}}</h3>
    <h3>Dob: {{$student->dob}}</h3>
    <h4>Department: {{$student->department->name}}</h4>
<table class="table table-boardered">
    <h1>Course details</h1>
    <tr>
        <th>Name</th>
        <th>Department</th>
    </tr>
    @foreach($student->courses as $c)
    <tr>
        <td>{{$c->course->name}}</td>
        <td>{{$c->course->department->name}}</td>
    </tr>
    @endforeach
</table>
{{$student}}
@endsection