<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css?v=1.0">
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <a  href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="togglePanel()">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidepanel text-white bg-dark" id="sidepanel">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="admin.php" class="nav-link" aria-current="page">
                    <i class="bi bi-house"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="admin_packages.php" class="nav-link text-white">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="admin_packages.php" class="nav-link text-white">
                    <i class="bi bi-box-seam"></i>
                    Manage Packages
                </a>
            </li>
            <li>
                <a href="admin_contact.php" class="nav-link text-white">
                    <i class="bi bi-envelope"></i>
                    View Contacts
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://avatars.githubusercontent.com/u/81044583?v=4&size=64" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong><?php echo $_SESSION['username']; ?></strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a  href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
               
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to Admin Dashboard</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non elit vehicula, malesuada sapien eget, fermentum odio.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Packages</h5>
                        <p class="card-text fs-3 fw-bold">24</p>
                        <a href="admin_packages.php" class="btn btn-primary">View Packages</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Contacts</h5>
                        <p class="card-text fs-3 fw-bold">18</p>
                        <a href="admin_contact.php" class="btn btn-primary">View Contacts</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pending Approvals</h5>
                        <p class="card-text fs-3 fw-bold">5</p>
                        <a href="#" class="btn btn-primary">Manage Approvals</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        function togglePanel() {
            const panel = document.getElementById("sidepanel");
            panel.classList.toggle("open");
            const content = document.querySelector(".content");
            if (panel.classList.contains("open")) {
                content.style.marginLeft = "250px";
            } else {
                content.style.marginLeft = "0";
            }
        }
    </script>
</body>
</html>
