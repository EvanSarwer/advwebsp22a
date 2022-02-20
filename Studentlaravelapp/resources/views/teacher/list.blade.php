<table class="table table-boardered">
    @foreach($teachers as $t)
    <tr>
        <td><a href="{{route('teacher.details',['id'=>encrypt($t->id)])}}">{{$t->name}}</a></td>
        <td>{{$t->name}}</td>
        <td>{{$t->designation}}</td>
       
    </tr>
    @endforeach
</table>