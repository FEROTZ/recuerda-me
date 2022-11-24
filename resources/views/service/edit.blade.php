
@extends('layouts.landing')

@section('content')
<div class="container">
    <div class="section-title text-center pb-4">
        <div class="row text-center">
            <form method="POST" action="{{ route('servicios.edit') }}">
                @csrf
                @include('service.form');
               
            </form>
       
   

@endsection