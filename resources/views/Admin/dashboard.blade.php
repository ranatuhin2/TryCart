@extends('admin.master')

@section('content')
    <h1 class="text-center" >Admin Panel Dashboard</h1>
    <a href="{{Route('admin.logout')}}" class="btn btn-sm btn-danger float-end mx-5">Logout</a>
@endsection