@extends('layouts.app')
@section('content')
    <div>
        <h2 class="label label-secondary">{{$d->name}}</h2>
    </div>
    @if(count($d->students)>0)
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th>Dob</th>
                <th>Cgpa</th>
            </tr>
            @foreach($d->students as $s)
                <tr>
                    <td>{{$s->name}}</td>
                    <td>{{$s->id}}</td>
                    <td>{{$s->dob}}</td>
                    <td>{{$s->cgpa}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <span class="label label-info">No Student Found</span>
    @endif

    @if(count($d->courses)>0)
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($d->courses as $c)
                <tr>
                    <td>{{$c->name}}</td>
                    <td>{{$c->id}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <span class="label label-info">No Course Found</span>
    @endif
@endsection