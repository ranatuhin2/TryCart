@extends('admin.master')

@section('content')

<div class="login-panel">
    <h2>Login</h2>
    @if(Session::has('success'))
        <p class="text-success" >{{session::get('success')}}</p>
    @endif
    <form action="{{Route('admin.loginSubmit')}}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

@endsection
