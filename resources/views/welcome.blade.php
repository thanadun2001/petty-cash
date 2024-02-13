@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
@include('layouts.nav')
    <img src="{{ URL('image/myring.png') }}" style="width: 355px; height: 227px; margin:200px 700px -300px;">
@endsection
