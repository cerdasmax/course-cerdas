<?php
session_start();

// Cek jika user belum login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - LearnPress</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #4a6cf7;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info {
            color: #333;
        }

        .logout-btn {
            background: #dc3545;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .logout-btn:hover {
            background: #c82333;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .welcome-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .welcome-section h1 {
            color: #333;
            margin-bottom: 10px;
        }

        .welcome-section p {
            color: #666;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .stat-card h3 {
            font-size: 32px;
            color: #4a6cf7;
            margin-bottom: 10px;
        }

        .stat-card p {
            color: #666;
        }

        .courses-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .courses-section h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .course-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .course-card h4 {
            color: #333;
            margin-bottom: 10px;
        }

        .course-card p {
            color: #666;
            margin-bottom: 15px;
        }

        .progress-bar {
            background: #e0e0e0;
            border-radius: 10px;
            height: 8px;
            margin-bottom: 10px;
        }

        .progress {
            background: #4a6cf7;
            height: 100%;
            border-radius: 10px;
            width: 65%;
        }
        .logo {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }
        .logo img {
            height: 70px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="" class="logo">
                    <img src="logo/logo.jpg" alt="LearnPress Logo">
                </a>
            <div class="user-menu">
                <div class="user-info">
                    Welcome, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
                </div>
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h1>Welcome to Your Dashboard</h1>
            <p>Hello <?php echo htmlspecialchars($_SESSION['username']); ?>! Here's your learning progress and available courses.</p>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3>5</h3>
                <p>Enrolled Courses</p>
            </div>
            <div class="stat-card">
                <h3>12</h3>
                <p>Completed Lessons</p>
            </div>
            <div class="stat-card">
                <h3>65%</h3>
                <p>Overall Progress</p>
            </div>
            <div class="stat-card">
                <h3>3</h3>
                <p>Certificates</p>
            </div>
        </div>

        <!-- Courses Section -->
        <div class="courses-section">
            <h2>Your Courses</h2>
            <div class="courses-grid">
                <div class="course-card">
                    <h4>Web Development Basics</h4>
                    <p>Learn HTML, CSS, and JavaScript fundamentals</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 80%"></div>
                    </div>
                    <p>80% Complete</p>
                </div>
                
                <div class="course-card">
                    <h4>PHP & MySQL</h4>
                    <p>Backend development with PHP and database management</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 65%"></div>
                    </div>
                    <p>65% Complete</p>
                </div>
                
                <div class="course-card">
                    <h4>React.js Fundamentals</h4>
                    <p>Modern frontend development with React</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 45%"></div>
                    </div>
                    <p>45% Complete</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>