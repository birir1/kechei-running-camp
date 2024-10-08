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