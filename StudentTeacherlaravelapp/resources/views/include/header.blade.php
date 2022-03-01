<div>
@if(!Session::get('user'))
    <a class="btn btn-primary" href="/login">Login</a>
    <a class="btn btn-secondary" href="{{route('register')}}">Register</a>
    @endif
    @if(Session::get('user'))
    <a class="btn btn-success" href="/student/create">Create Student</a>
    <a class="btn btn-danger" href="{{route('list')}}">Student List</a>
    <a class="btn btn-primary" href="/student/edit">Edit Student</a>
    <a class="btn btn-secondary" href="{{route('department.list')}}">Departments</a>
    <a class="btn btn-danger" href="{{route('teacher.list')}}">Teacher List</a>
    <a class="btn btn-success" href="{{route('logout')}}">Logout</a>
    @endif
</div>