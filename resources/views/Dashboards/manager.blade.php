@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container" style="width: 250px; height: 100vh; background-color: #143009; padding: 20px; color: #eeb601; font-family: 'Times New Roman', Times, serif; position: fixed;">
            <ul style="list-style-type: none; padding: 0;">
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        Dashboard Overview
                    </a>
                </li>
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        User Management
                    </a>
                </li>
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        Training Plans
                    </a>
                </li>
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        Event Management
                    </a>
                </li>
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        Reports
                    </a>
                </li>
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        Settings
                    </a>
                </li>
                <li style="padding: 10px 0;">
                    <a href="/Logout" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    
        <div style="margin-left: 270px; padding: 20px;">
            <h2>Dashboard Overview</h2>
            <p>Here you can find insights about the running camp, including user statistics, upcoming events, and training sessions.</p>
            <hr>
            
            <h3>User Statistics</h3>
            <p>Total Users: 100</p>
            <p>Active Users: 80</p>
    
            <h3>Upcoming Events</h3>
            <p>Next Training Session: October 5, 2024</p>
    
            <h3>Recent Activities</h3>
            <p>Recent sign-ups, training plan updates, and event registrations will be displayed here.</p>
        </div>
    </div>
    <hr>
    <br>

    
@endsection
