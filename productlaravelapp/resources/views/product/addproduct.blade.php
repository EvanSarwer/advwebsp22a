@extends('layouts.app')
@section('content')
    <form action="{{route('addproduct.submit')}}" method="POST">
    {{@csrf_field()}}
        <input type="text" name="name" placeholder="Name">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="price" placeholder="Price">
        @error('price')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="quantity" placeholder="Quantity">
        @error('quantity')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="description" placeholder="Description">
        @error('description')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit">

    </form>
    @endsection