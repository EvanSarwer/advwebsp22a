@extends('layouts.app')
@section('content')
<form action="{{route('product.editProductSubmit',['id'=>$product->Id])}}" method="POST">
    {{@csrf_field()}}
    <br>
        <span>Update Name:</span>
        <input type="text" name="name" value={{$product->Name}}>
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <span>Update Price:</span>
        <input type="text" name="price" value={{$product->Price}}>
        @error('price')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <span>Update Quantity:</span>
        <input type="text" name="quantity" value={{$product->Quantity}} >
        @error('quantity')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <span>Update Description:</span>
        <input type="text" name="description" value={{$product->Description}} >
        @error('description')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <input type="submit">

    </form>


@endsection