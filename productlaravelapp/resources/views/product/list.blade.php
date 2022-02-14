@extends('layouts.app')
@section('content')
<table class="table">
    @foreach($products as $p)
    <tr>
        <td>{{$p->Name}}</td>
        <td>{{$p->Price}}</td>
        <td>{{$p->Quantity}}</td>
        <td>{{$p->Description}}</td>
        <td><a href="{{route('product.editProduct',['id'=>$p->Id])}}">Edit Product</a></td>
        <td><a href="{{route('product.deleteProduct',['id'=>$p->Id])}}">Delete Product</a></td>
    </tr>
    @endforeach
</table>
@endsection