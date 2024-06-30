<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Disease Detection</title>
    
    <link rel="shortcut icon" href="image1.jpg" type="image/x-icon" height="50px" width="50px">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        .navbar {
            background-image: url('image1.jpg');
            background-size: cover;
            background-position: center;
            background-color: #F8BBD0;
        }

        .navbar-brand {
            cursor: pointer;
        }

        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: -250px;
            background-image: url('image1.jpg');
            padding-top: 60px;
            transition: all 0.3s ease;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 20px;
            color: #ccc;
            display: block;
            transition: color 0.3s ease;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            color: #fff;
        }

        /* Menu button in the sidebar */
        .sidebar-menu {
            position: absolute;
            top: 10px;
            left: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-tertially">
    <div class="container-fluid">
        <!-- Menu button image -->
        <a class="navbar-brand" href="#" onclick="toggleSidebar()">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 50 50">
                <path d="M0 7.5 L0 12.5 L50 12.5 L50 7.5 Z M0 22.5 L0 27.5 L50 27.5 L50 22.5 Z M0 37.5 L0 42.5 L50 42.5 L50 37.5 Z"></path>
            </svg>
        </a>
        <!-- Your site title -->
        <h1>Heart Disease Detection</h1>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex">
                <a class="btn btn-outline-success mx-2" href="signup.php">Signup</a>
                <a class="btn btn-outline-primary mx-2" href="login.php">Login</a>
                <a class="btn btn-outline-danger mx-2" href="logout.php">Logout</a>
            </form>
        </div>
    </div>
</nav>

<div id="sidebar" class="sidebar">
    <!-- Menu icon in the sidebar -->
    <div class="sidebar-menu" onclick="toggleSidebar()">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 50 50">
                <path d="M0 7.5 L0 12.5 L50 12.5 L50 7.5 Z M0 22.5 L0 27.5 L50 27.5 L50 22.5 Z M0 37.5 L0 42.5 L50 42.5 L50 37.5 Z"></path>
            </svg>
    </div>
    <a href="Home.php"><i class="fas fa-home"></i> Home</a>
    <a href="About us.php"><i class="fas fa-info-circle"></i> About Us</a> 
    <a href="Prediction.php"><i class="fas fa-chart-line"></i> Prediction</a>
    <a href="Profile.php"><i class="fas fa-user"></i> Profile</a>
</div>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        if (sidebar.style.left === "0px") {
            sidebar.style.left = "-250px";
        } else {
            sidebar.style.left = "0px";
        }
    }
</script>

</body>
</html>