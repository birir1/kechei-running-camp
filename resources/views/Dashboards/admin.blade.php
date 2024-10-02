@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="sidebar" style="width: 250px; height: auto; background-color: #143009; padding: 20px; color: #eeb601; font-family: 'Times New Roman', Times, serif; position: fixed; top: 0; left: 0; height: 100%; overflow-y: auto;">
            {{-- <h2 style="text-align: center; color: #eeb601;">Admin Dashboard</h2> --}}
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
            <p>Here you can find insights about the camp operations, user activities, and upcoming events.</p>
            <hr>
            
            <h3>User Management</h3>
            <p>Total Users: 200</p>
            <p>Active Users: 150</p>
            <p>Inactive Users: 50</p>
    
            <h3>Upcoming Events</h3>
            <p>Next Event: Community Run on October 10, 2024</p>
    
            <h3>Recent Activities</h3>
            <p>New sign-ups and updates can be monitored here.</p>
            
            <h3>Reports</h3>
            <p>Access detailed reports regarding user engagement, event attendance, and more.</p>
        </div>
    </div>
@endsection
