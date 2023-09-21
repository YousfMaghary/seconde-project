@extends('layouts.nav')

@section('title', 'users')

@section('cont')
    <h1>This Users</h1>
@endsection



@section('sidebar')
    @parent

    <p>This is appended to the master users.</p>

@endsection
