@extends('layouts.app')
@section('content')
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Designation</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($teachers as $t)
    <tr>
        <td><a href="{{route('teacher.details',['id'=>encrypt($t->id)])}}">{{$t->name}}</a></td>
        <td>{{$t->user_id}}</td>
        <td>{{$t->designation}}</td>
    </tr>
    @endforeach
</table>
@endsection