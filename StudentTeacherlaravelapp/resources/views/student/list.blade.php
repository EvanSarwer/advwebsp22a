@extends('layouts.app')
@section('content')
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>User Name</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($students as $s)
    <tr>
        <td><a href="{{route('student.details',['id'=>encrypt($s->id)])}}">{{$s->name}}</a></td>
        <td>{{$s->user_id}}</td>
        <td>{{$s->username}}</td>
    </tr>
    @endforeach
</table>
@endsection