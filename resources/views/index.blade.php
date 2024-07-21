<!-- resources/views/mining/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Mining Tracking Data</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gas</th>
                    <th>Frame</th>
                    <th>Vibration</th>
                    <th>Heartbeat</th>
                    <th>Temperature</th>
                    <th>Humidity</th>
                    <th>Card ID</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($miningData as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->gas ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->frame ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->vibration ? 'Yes' : 'No' }}</td>
                        <td>{{ $data->heartbeat }}</td>
                        <td>{{ $data->temperature }}</td>
                        <td>{{ $data->humidity }}</td>
                        <td>{{ $data->card_id }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
