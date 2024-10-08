<!-- Sidebar -->
<div class="sidebar">
    <h3 class="sidebar-category">Management</h3>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="files/dashboardoverview" class="sidebar-link">Dashboard Overview</a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">User Management</a>
        </li>
        <li class="sidebar-item dropdown">
            <a href="#" class="sidebar-link dropdown-toggle">Event Management</a>
            <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item">Create Event</a></li>
                <li><a href="#" class="dropdown-item">View Events</a></li>
            </ul>
        </li>
    </ul>

    <h3 class="sidebar-category">Reports</h3>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">User Reports</a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">Event Reports</a>
        </li>
    </ul>

    <h3 class="sidebar-category">Settings</h3>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">Profile Settings</a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">Notification Settings</a>
        </li>
    </ul>
</div>

<!-- Main Content -->
<div class="main-content">
    <h2 class="main-title">Dashboard Overview</h2>
    <p>Here you can find insights about the camp operations, user activities, and upcoming events.</p>
    <hr>

    <h3 class="section-title">User Management</h3>
    <p>Total Users: <span class="user-count">200</span></p>
    <p>Active Users: <span class="user-count">150</span></p>
    <p>Inactive Users: <span class="user-count">50</span></p>

    <h3 class="section-title">Upcoming Events</h3>
    <p>Next Event: <span class="event-details">Community Run on October 10, 2024</span></p>

    <h3 class="section-title">Recent Activities</h3>
    <p>New sign-ups and updates can be monitored here.</p>

    <h3 class="section-title">Reports</h3>
    <p>Access detailed reports regarding user engagement, event attendance, and more.</p>
</div>
</div>

<style>
body {
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px;
    margin: 0;
    padding: 0;
}

.dashboard-container {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100vh;
}

.sidebar {
    width: 250px;
    background-color: #143009;
    color: #eeb601;
    padding: 20px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh; /* Sidebar takes the full height of the viewport */
    overflow-y: auto; /* Scroll if content overflows */
}

.sidebar-category {
    margin: 20px 0 10px;
    font-weight: bold;
    color: #eeb601;
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

.dropdown {
    position: relative;
}

.dropdown-toggle::after {
    content: ' ▼';
}

.dropdown-menu {
    display: none; /* Hidden by default */
    background-color: #1c4d02;
    list-style-type: none;
    padding: 0;
    margin: 0;
    border-radius: 5px;
}

.dropdown:hover .dropdown-menu {
    display: block; /* Show on hover */
}

.dropdown-item {
    padding: 10px;
    text-decoration: none;
    color: #eeb601;
    display: block;
}

.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.main-content {
    margin-left: 270px; /* Ensure main content is not hidden under sidebar */
    padding: 20px;
    flex-grow: 1;
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

/* Responsive styles */
@media (max-width: 768px) {
    .dashboard-container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        height: auto; /* Allow height to adjust based on content */
        position: relative;
    }

    .main-content {
        margin-left: 0; /* Reset margin for mobile view */
        padding: 10px;
    }
}
</style>