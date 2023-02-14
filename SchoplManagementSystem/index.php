<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="">

	<link rel="stylesheet" href="fontawesome-6.1/css/all.min.css" />
	<title>School Management System</title>

	<script src="https://kit.fontawesome.com/630a6a2775.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/teacher.css">
    <link rel="stylesheet" href="css/students.css">
    <link rel="stylesheet" href="css/parent.css">
    <link rel="stylesheet" href="css/add_admin.css">

</head>
	<body>
	  <main>
        <section class="admin-top">
            <div class="row">
                <div class="admin-left " id="slideNav">
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

                        <div class="tablinks"  onclick="openTab(event, 'students')">
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
                        <i onclick="menuAnimation()" class="fa-solid fa-bars menu-bars"></i>
                        </div>
                        <div class="header-right">
                            haha
                        </div>
                    </div>
                    <div id="dashboard_top" class="tabcontent">
                        <?php include "assets/dashboard.php" ?>
                    </div>

                    <div id="teacher_top" class="tabcontent">
                        <?php include "assets/teacher.php" ?>
                    </div>

                    <div id="students" class="tabcontent">
                        <?php include "assets/students.php" ?>
                    </div>

                    <div id="parent" class="tabcontent">
                        <?php include "assets/parent.php" ?>
                    </div>

                    <div id="schedule" class="tabcontent">
                        <h2>Schedule  Content</h2>
                    </div>

                    <div id="admin" class="tabcontent">
                        <?php include "assets/add_admin.php" ?>
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
        <script src="./js/teacher.js"></script>
        <script src="./js/student.js"></script>
        <script src="./js/parent.js"></script>
        <script src="./js/add_admin.js"></script>
      </main>
      <?php
  /*  $sql = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'male' THEN 1 END) Male,
    COUNT(CASE WHEN UPPER(Gender) = 'female' THEN 1 END) Female
    FROM student";
    $fire = mysqli_query($conn,$sql);
    // $fetchMaleCount = mysqli_num_rows($fire);
    $json = [];
    $json2 = [];
    while($row = mysqli_fetch_assoc($fire)){
        $json[] = (int)$row['Male'];
        $json2[] =(int)$row['Female'];
    }
    // $array[] = json_decode($json, true);
    // $array[] = json_decode($json2, true);
    // $result = json_encode($array, JSON_PRETTY_PRINT);
    // echo $result;
    $newArray =array_merge($json,$json2);
    // echo json_encode($newArray);
    // echo json_encode($json2);
        // $fetchMaleCount; */

?>
<?php
   /* $sql2 = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'male' THEN 1 END) Male,
    COUNT(CASE WHEN UPPER(Gender) = 'female' THEN 1 END) Female
    FROM teacher";
    $fire2 = mysqli_query($conn,$sql2);
    // $fetchMaleCount = mysqli_num_rows($fire);
    $jsonTeacher = [];
    $jsonTeacher2 = [];
    while($row = mysqli_fetch_assoc($fire2)){
        $jsonTeacher[] = (int)$row['Male'];
        $jsonTeacher2[] =(int)$row['Female'];
    }
    // $array[] = json_decode($json, true);
    // $array[] = json_decode($json2, true);
    // $result = json_encode($array, JSON_PRETTY_PRINT);
    // echo $result;
    $newTeacherArray = array_merge($jsonTeacher,$jsonTeacher2);
    // echo json_encode($newArray);
    // echo json_encode($json2);
        // $fetchMaleCount; */

?>
    <script>
      // chart for teacher start here ===============================

      // chart for student here ========================================
var ctx3 = document.getElementById("myChart3").getContext("2d");
var myChart = new Chart(ctx3, {
  type: "doughnut",
  data: {
    // labels: ["Male Students", "Female Students"],
    datasets: [
      {
        // label: '# of Votes',

        data: <?php echo json_encode($newArray); ?>,
        backgroundColor: ["rgba(247, 202, 24, 0.7)", "rgba(154,205,50,0.7)"],
        // borderColor: [
        //   "rgba(255, 99, 132, 1)",
        //   "rgba(54, 162, 235, 1)",
        //   "rgba(255, 206, 86, 1)",
        //   "rgba(75, 192, 192, 1)",
        //   "rgba(153, 102, 255, 1)",
        //   "rgba(255, 159, 64, 1)",
        // ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false,
    // scales: {
    //     y: {
    //         beginAtZero: true
    //     }
    // }
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
    legend: {
      display: false,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "red",
        fontSize: 16,
        boxWidth: 20,
      },
    },
    // title: {
    //   display: true,
    //   text: "Custom Chart Title",
    //   position: "bottom",
    //   fontSize: 25,
    //   fontFamily: "Comic Sans MS",
    //   fontColor: "red",
    //   fontStyle: "bold italic",
    //   padding: 20,
    //   lineHeight: 5,
    // },
  },
});
// function addData(chart, label, data) {
//     chart.data.labels.push(label);
//     chart.data.datasets.forEach((dataset) => {
//         dataset.data.push(data);
//     });
//     chart.update();
// }

// function removeData(chart) {
//     chart.data.labels.pop();
//     chart.data.datasets.forEach((dataset) => {
//         dataset.data.pop();
//     });
//     chart.update();
// }
// function update_student_chart(){
//   chart.data.datasets[0].data = 
//   chart.update();
// }
var ctx2 = document.getElementById("myChart2").getContext("2d");
var myChart = new Chart(ctx2, {
  type: "pie",
  data: {
    // labels: ["Male Teacher", "Female Teacher"],
    datasets: [
      {
        // label: '# of Votes',

        data: <?php echo json_encode($newTeacherArray); ?>,
        backgroundColor: ["rgba(247, 202, 24, 0.7)", "rgba(154,205,50,0.7)"],
        // borderColor: [
        //   "rgba(255, 99, 132, 1)",
        //   "rgba(54, 162, 235, 1)",
        //   "rgba(255, 206, 86, 1)",
        //   "rgba(75, 192, 192, 1)",
        //   "rgba(153, 102, 255, 1)",
        //   "rgba(255, 159, 64, 1)",
        // ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false,
    // scales: {
    //     y: {
    //         beginAtZero: true
    //     }
    // }
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
    legend: {
      display: false,
      // position: "bottom", // top left bottom right
      // align: "end", // start end center
      // labels: {
      //   fontColor: "red",
      //   fontSize: 16,
      //   boxWidth: 20,
      // },
    },
    // title: {
    //   display: true,
    //   text: "Custom Chart Title",
    //   position: "bottom",
    //   fontSize: 25,
    //   fontFamily: "Comic Sans MS",
    //   fontColor: "red",
    //   fontStyle: "bold italic",
    //   padding: 20,
    //   lineHeight: 5,
    // },
  },
});
    </script>
    </body>
</html>