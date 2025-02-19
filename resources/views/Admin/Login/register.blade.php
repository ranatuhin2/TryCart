@extends('admin.master')

@section('content')

<div class="login-panel">
    <h2>Register</h2>
    <form action="{{Route('admin.registerSubmit')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" >
        <input type="text" name="email" placeholder="Email" >
        <input type="password" name="password" placeholder="Password" >
        <p class="text-danger" >
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @elseif($errors->has('email'))
                {{$errors->first('email')}}
            @elseif($errors->has('password'))
                {{$errors->first('password')}}
            @endif
        </p>
        <button type="submit">Register</button>
    </form>
</div>

@endsection
