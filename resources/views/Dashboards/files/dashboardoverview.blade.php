@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <!-- Dashboard Overview Section -->
        <div class="overview-section">
            <h2>Dashboard Overview</h2>
            
            <!-- Row containing the graph and the table -->
            <div class="row">
                <!-- Line Graph -->
                <div class="col-md-6">
                    <canvas id="userLineChart"></canvas>
                </div>

                <!-- User Table -->
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script>
        const userChartData = @json($userChartData);

        const ctx = document.getElementById('userLineChart').getContext('2d');
        const userLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Users Registered',
                    data: userChartData,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
