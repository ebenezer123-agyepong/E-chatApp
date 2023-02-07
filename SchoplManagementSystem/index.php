<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" href="css/admin.css">
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
                    <div id="dashboard_top" class="tabContent">
                        <h2>Dashboard content</h2>
                    </div>

                    <div id="teacher_top" class="tabContent">
                        <h2>Teacher  content</h2>
                    </div>
                </div>
            </div>
        </section>
        <script src="./js/app.js"></script>
        <script src="./js/admin.js"></script>
      </main>
    </body>
</html>