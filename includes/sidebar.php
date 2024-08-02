<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SciTrack</title>
    <link rel="stylesheet" href="css/adminhome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="side-bar">
        <img src="./image/logo.png" alt="" class="sidebar-logo">
        <div class="menu">
            <div class="item"><img src="image/def.png" alt="Admin" /><i class="fas fa-admin"></i><span class="menu-admin">Admin</span></div>
            <div class="item"><a href="AdminHome.php"><img src="image/home.png" alt="Home" /><i class="fas fa-homes"></i><span class="menu-text">Home</span></a></div>
            <div class="item"><a href="AdminStudents.php"><img src="image/student.png" alt="Students" /><i class="fas fa-student"></i><span class="menu-text">Students</span></a></div>
            <div class="item"><a href="AdminTeachers.php"><img src="image/teacher.png" alt="Teachers" /><i class="fas fa-teacher"></i><span class="menu-text">Teachers</span></a></div>
            <div class="item"><a href="loginPage.php"><img src="image/logout.png" alt="Logout" /><i class="fas fa-logout"></i><span class="menu-text">Logout</span></a></div>
        </div>
    </div>
    
    <div class="menu-btn">
        <button id="sidebarToggleBtn" aria-label="Toggle Sidebar">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</body>
</html>