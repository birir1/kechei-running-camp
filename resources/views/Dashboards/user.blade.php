@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container" style="width: 250px; height: 100vh; background-color: #143009; padding: 20px; color: #eeb601; font-family: 'Times New Roman', Times, serif; position: fixed;">
            <ul style="list-style-type: none; padding: 0;">
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        My Profile
                    </a>
                </li>
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        Training Plans
                    </a>
                </li>
                <li style="padding: 10px 0;">
                    <a href="#" style="text-decoration: none; color: #eeb601; display: block; padding: 10px; border-radius: 5px; transition: background-color 0.3s;">
                        Events
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
    </div>
    <hr>
    <br>
@endsection
