<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mining Tracking Parameter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const emergencyButtons = document.querySelectorAll('.emergency-button');
            emergencyButtons.forEach(button => {
                if (button.dataset.emergency == '1') {
                    alert(`Emergency button pressed at location: ${button.dataset.location}`);
                }
            });
        });
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Mining Tracking Parameters</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Gas Value</th>
                    <th>Heartrate Beat</th>
                    <th>Flame Detection</th>
                    <th>Vibration Detection</th>
                    <th>Temperature & Humidity</th>
                    <th>Location</th>
                    <th>Emergency Button</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->gas_value }}</td>
                    <td>{{ $item->heartrate }}</td>
                    <td>{{ $item->flame_detection ? 'Yes' : 'No' }}</td>
                    <td>{{ $item->vibration_detection ? 'Yes' : 'No' }}</td>
                    <td>{{ $item->temperature }} °C, {{ $item->humidity }} %</td>
                    <td>{{ $item->location }}</td>
                    <td class="emergency-button" data-emergency="{{ $item->emergency_button }}" data-location="{{ $item->location }}">
                        {{ $item->emergency_button ? 'Yes' : 'No' }}
                      
                    </td>
                    <td>
                        {{$item->created_at}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>