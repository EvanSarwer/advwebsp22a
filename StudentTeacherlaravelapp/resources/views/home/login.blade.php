@extends('layouts.app')
@section('content')
    <form action="{{route('login.submit')}}" method="post">
        {{@csrf_field()}}
        
        <input type="text" name="uname" value="{{old('uname')}}" placeholder="Username">
        @error('uname')
        <spam>{{$message}}</spam>
        @enderror
        <br>
        <input type="password" name="password" placeholder="Password">
        @error('password')
        <spam>{{$message}}</spam>
        @enderror
        <br>
        
        <input type="submit">
    </form>
@endsection
@section('demo')
    <h1>This is demo AA content</h1>
@endsection

