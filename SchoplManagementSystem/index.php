<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="./fontawesome-6.1/css/all.min.css" />
	<title>School Management System</title>
	<script src="https://kit.fontawesome.com/630a6a2775.js" crossorigin="anonymous"></script>
</head>
	<body>
	  <main>
        <section class="admin-top">
            <div class="row">
                <div class="admin-left" id="slideNav">
                    <div class="admin">
                        <img src="images/me3.jpg" alt="profile pic">
                        <h4>Eben Keys</h4>
                    </div>
                    <div class="tab">
                        <div class="tablinks" id='defaultOpen' onclick="openTab(event, 'dashboard_top')" >
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="tooltip">Dashboard</span>
                            <h4>Dashboard</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'teacher_top')">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span class="tooltip">Teacher</span>
                            <h4>Teacher</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'student')">
                            <i class="fas fa-user"></i>
                            <span class="tooltip">Student</span>
                            <h4>Student</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'parent')">
                            <i class="fas fa-user"></i>
                            <span class="tooltip">Parent</span>
                            <h4>Parent</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'schedule')">
                            <i class="fas fa-clock"></i>
                            <span class="tooltip">Schedule</span>
                            <h4>Schedule</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'admin')">
                            <i class="fas fa-chart-bar"></i>
                            <span class="tooltip">Admin</span>
                            <h4>Admin</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'library')">
                            <i class="fas fa-folder-open"></i>
                            <span class="tooltip">Library</span>
                            <h4>Library</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'media')">
                            <i class="fas fa-video"></i>
                            <span class="tooltip">Media</span>
                            <h4>Media</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'expenses')">
                            <i class="fas fa-money-check-alt"></i>
                            <span class="tooltip">Expenses</span>
                            <h4>Expenses</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'hostel')">
                            <i class="fas fa-hotel"></i>
                            <span class="tooltip">Hostel</span>
                            <h4>Hostel</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'transport')">
                            <i class="fas fa-car"></i>
                            <span class="tooltip">Transport</span>
                            <h4>Transport</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'exam')">
                            <i class="fas fa-graduation-cap"></i>
                            <span class="tooltip">Exams</span>
                            <h4>Exams</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'events')">
                            <i class="fas fa-clock"></i>
                            <span class="tooltip">Event</span>
                            <h4>Event</h4>
                        </div>

                        <div class="tablinks"  onclick="openTab(event, 'map')">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="tooltip">Map</span>
                            <h4>Map</h4>
                        </div>
                    </div>
                </div>
                <div class="admin-right" id="admin-right">
                    <div class="header">
                        <div class="header-left">
                        <i onclick="menuAnimation()" class="fas fa-bars"></i>
                        </div>
                        <div class="header-right">
                            haha
                        </div>
                    </div>
                    <div id="dashboard_top" class="tabcontent">
                        <?php include "assets/dashboard.php" ?>
                    </div>

                    <div id="teacher_top" class="tabcontent">
                        <h2>Teacher  Content</h2>
                    </div>

                    <div id="student" class="tabcontent">
                        <h2>Student  Content</h2>
                    </div>

                    <div id="parent" class="tabcontent">
                        <h2>Parent  Content</h2>
                    </div>

                    <div id="schedule" class="tabcontent">
                        <h2>Schedule  Content</h2>
                    </div>

                    <div id="admin" class="tabcontent">
                        <h2>Admin  Content</h2>
                    </div>

                    <div id="library" class="tabcontent">
                        <h2>Library  Content</h2>
                    </div>

                    <div id="media" class="tabcontent">
                        <h2>Media  Content</h2>
                    </div>

                    <div id="expenses" class="tabcontent">
                        <h2>Expenses  Content</h2>
                    </div>

                    <div id="hostel" class="tabcontent">
                        <h2>Hostel  Content</h2>
                    </div>

                    <div id="transport" class="tabcontent">
                        <h2>Transport  Content</h2>
                    </div>

                    <div id="exam" class="tabcontent">
                        <h2>Exams  Content</h2>
                    </div>

                    <div id="events" class="tabcontent">
                        <h2>Events  Content</h2>
                    </div>

                    <div id="map" class="tabcontent">
                        <h2>Map  Content</h2>
                    </div>
                </div>
            </div>
        </section>
        <script src="./js/app.js"></script>
        <script src="./js/admin.js"></script>
      </main>
    </body>
</html>