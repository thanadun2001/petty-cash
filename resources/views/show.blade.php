@extends('layouts.app')
@section('title', 'show')
@section('content')
@include('layouts.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(-135deg, #8795aa, #287abc); color:white;">
                        {{ __('Show Status') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <strong>Status:</strong>
                        <br>
                        <a class="btn btn-primary" href="/home"> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
