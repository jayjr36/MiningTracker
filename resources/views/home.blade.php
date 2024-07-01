@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Mining Tracking System') }}</div>

                <div class="card-body">
                    <p>Welcome to our Mining Tracking System. This system tracks various parameters important for mining safety and efficiency.</p>

                    <p>You can view and manage mining tracking parameters <a href="{{ route('mining-tracking') }}">here</a>.</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
