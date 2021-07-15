@extends('resources.views.layout.layout-demo')
@section('title')
    Hello index
@endsection
@section('content')
    @include('resources.views.layout.special-block', ['message' => 'Very danger!'])
@endsection
