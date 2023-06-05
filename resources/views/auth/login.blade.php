@extends('tpl.default')

@section('content')
<form action="{{ route('postLogin') }}" method="post">
    @csrf
    <input type="text" name="username" id="" placeholder="Username">
    <input type="password" name="password" id="" placeholder="Password">
    <input type="submit" value="Logga in">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection