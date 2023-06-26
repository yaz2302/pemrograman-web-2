@extends('layouts.app')
@section('content')
    <h1 style="text-align: center">Halo {{ Auth::user()->name }}, Selamat datang di dashboard frontend</h1>
@endsection