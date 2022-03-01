@extends('layouts.app')
@section('content')
    <form action="{{route('register.submit')}}" method="post">
        {{@csrf_field()}}
        <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
        @error('name')
        <spam>{{$message}}</spam>
        @enderror
        <br>
        <input type="text" name="id" value="{{old('id')}}" placeholder="Id">
        @error('id')
        <spam>{{$message}}</spam>
        @enderror
        <br>
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
        <input type="password" name="conf_password" placeholder="Confirm Password">
        @error('conf_password')
        <spam>{{$message}}</spam>
        @enderror
        <br>
        <input type="submit">
    </form>

    @endsection
