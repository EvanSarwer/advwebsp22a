@extends('layouts.app')
@section('content')
<ul>
    @foreach($course as $c)
    <li>{{$c->Course}}</li>
    <li>{{$c->Instructor}}</li>
    <li>{{$c->Duration}}</li>
    <li>{{$c->Starts}}</li>
    @endforeach
</ul>
@endsection