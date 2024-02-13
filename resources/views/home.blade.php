@extends('layouts.app')
@section('title', 'home')
@section('content')
@include('layouts.nav')
<div class="container" style="margin: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name}}
                    <br>
                    {{$msg}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
