@extends('layout')

@section('title')
    User
@endsection

@section('content')
    <h1>User</h1>
    <h3>Ini adalah halaman user dengan :</h3>
    <h3>Id : {{ $id }}</h3>
    <h3>Nama : {{ $name }}</h3>
@endsection