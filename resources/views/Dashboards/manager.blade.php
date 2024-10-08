@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Dashboard Overview</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">User Management</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Training Plans</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Event Management</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Reports</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Settings</a>
                </li>
                <li class="sidebar-item">
                    <a href="/Logout" class="sidebar-link">Logout</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h2 class="main-title">Dashboard Overview</h2>
            <p>Here you can find insights about the running camp, including user statistics, upcoming events, and training sessions.</p>
            <hr>
            
            <div class="section">
                <h3 class="section-title">User Statistics</h3>
                <p>Total Users: <span class="user-count">100</span></p>
                <p>Active Users: <span class="user-count">80</span></p>
            </div>

            <div class="section">
                <h3 class="section-title">Upcoming Events</h3>
                <p>Next Training Session: <span class="event-details">October 5, 2024</span></p>
            </div>

            <div class="section">
                <h3 class="section-title">Recent Activities</h3>
                <p>Recent sign-ups, training plan updates, and event registrations will be displayed here.</p>
            </div>

            <div class="section">
                <h3 class="section-title">Recent Sign-Ups</h3>
                <ul>
                    <li>User A - Joined on October 1, 2024</li>
                    <li>User B - Joined on September 28, 2024</li>
                    <li>User C - Joined on September 27, 2024</li>
                </ul>
            </div>

            <div class="section">
                <h3 class="section-title">Training Plan Updates</h3>
                <ul>
                    <li>Training Plan A - Updated on September 30, 2024</li>
                    <li>Training Plan B - Updated on September 29, 2024</li>
                </ul>
            </div>

            <div class="section">
                <h3 class="section-title">Event Registrations</h3>
                <ul>
                    <li>Event A - Registered on September 29, 2024</li>
                    <li>Event B - Registered on September 25, 2024</li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        .dashboard-container {
            display: flex;
            width: 100%;
            height: 100vh; /* Full height of the viewport */
            font-family: 'Times New Roman', Times, serif;
            font-size: 14px;
        }

        .sidebar {
            width: 250px;
            background-color: #143009;
            padding: 20px;
            color: #eeb601;
            position: fixed; /* Keeps the sidebar fixed to the left */
            top: 0; /* Aligns the sidebar to the top of the page */
            bottom: 0; /* Makes the sidebar extend to the bottom */
            overflow-y: auto; /* Enables scrolling if content exceeds the height */
        }

        .sidebar-menu {
            list-style-type: none;
            padding: 0;
        }

        .sidebar-item {
            padding: 10px 0;
        }

        .sidebar-link {
            text-decoration: none;
            color: #eeb601;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .main-content {
            margin-left: 270px; /* Ensure main content is not hidden under sidebar */
            padding: 20px;
            flex: 1; /* Allows main content to take up the remaining space */
        }

        .main-title,
        .section-title {
            margin-top: 20px;
            color: #333;
        }

        .user-count,
        .event-details {
            font-weight: bold;
        }

        .section {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                position: relative; /* Reset position for mobile */
                height: auto; /* Allow height to adjust based on content */
                padding-top: 60px; /* Adjust for navbar space */
            }

            .main-content {
                margin-left: 0; /* Reset margin for mobile view */
                padding: 10px; /* Adjust padding for mobile view */
            }
        }
    </style>
@endsection
