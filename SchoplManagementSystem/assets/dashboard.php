<section class="dashboard">
    <div class="welcome_admin">
        <h1 class="dashboard_heading">Dashboard</h1>
        <div class="welcome_admin_message">
            <h1>
                <?php 
                    $time = date("H");
                    if($time < "12"){
                        echo "Good Morning";
                    }else if ($time >= "12" && $time < "17") {
                        # code...
                        echo "Good Afternoon";
                    }else if($time >= "17" && $time < "19") {
                        echo "Good Evening";
                    }else if($time >= "19") {
                        echo "Good Night";
                    }
                ?>
            </h1>
            <h1 class="admin_name">Ebenezer Agyepong</h1>
            <h1 class="current_date"><?php echo date('M d, Y'); ?></h1>
        </div>
    </div>
    <div class="cover-img">
        <span class="text">
            <h1>Eben School System</h1>
            <p>
                Education is the key to future success, for tomorrow belongs
                to people who prepare for it. 
            </p>
        </span>
    </div>
</section>
<section class="all-info">
    <div class="row">
        <div class="col">
            <div id="teacher" class="card">
                    <div class="teacher-inner">
                        <div class="column column-left">
                            <div class="column-left-inner">
                                <h1 id="teacherCount">01</h1>
                                <p>Teacher</p>
                            </div>
                        </div>
                        <div class="column column-right">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="teacher-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
            <div id="attendance" class="card">
            <div class="attendance-inner">
                        <div class="column column-left">
                            <div class="column-left-inner">
                                <h1 id="examsCount">01</h1>
                                <p>Exams</p>
                            </div>
                        </div>
                        <div class="column column-right">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                    </div>
                    <div class="attendance-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
        </div>

        <div class="col">
            <div id="student" class="card">
                    <div class="student-inner">
                        <div class="column column-left">
                            <div class="column-left-inner">
                                <h1 id="studentCount">01</h1>
                                <p>Student</p>
                            </div>
                        </div>
                        <div class="column column-right">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </div>
                    <div class="student-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
            <div id="accountants" class="card">
            <div class="accountants-inner">
                        <div class="column column-left">
                            <div class="column-left-inner">
                                <h1 id="hostelCount">01</h1>
                                <p>Hostel</p>
                            </div>
                        </div>
                        <div class="column column-right">
                            <i class="fa-solid fa-hotel"></i>
                        </div>
                    </div>
                    <div class="accountants-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
        </div>

        <div class="col">
            <div id="parents" class="card">
                    <div class="parents-inner">
                        <div class="column column-left">
                            <div class="column-left-inner">
                                <h1 id="parentCount">01</h1>
                                <p>Parents</p>
                            </div>
                        </div>
                        <div class="column column-right">
                            <i class="fa-solid fa-users"></i>
                        </div>
                    </div>
                    <div class="parents-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
            <div id="library" class="card">
            <div class="library-inner">
                        <div class="column column-left">
                            <div class="column-left-inner">
                                <h1 id="libraryCount">01</h1>
                                <p>Librarian</p>
                            </div>
                        </div>
                        <div class="column column-right">
                        <i class="fa-solid fa-book-open-reader"></i>
                        </div>
                    </div>
                    <div class="library-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
        </div>

        <div class="col">
            <div id="stuff" class="card">
                    <div class="stuff-inner">
                        <div class="column column-left">
                            <div class="column-left-inner">
                                <h1 id="stuffCount">01</h1>
                                <p>Transport</p>
                            </div>
                        </div>
                        <div class="column column-right">
                            <i class="fa-solid fa-bus"></i>
                        </div>
                    </div>
                    <div class="stuff-footer">
                        <a href="#">More Info <i class="fa-solid fa-angles-right"></i></a>
                    </div>
            </div>
            <div id="notice" class="card">
            <div class="notice-inner">
                        <div class="column column-left">
                            <div class="column-left-inner">
                                <h1 id="noticeCount">01</h1>
                                <p>Events</p>
                            </div>
                        </div>
                        <div class="column column-right">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                    </div>
                    <div class="notice-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
        </div>
    </div>
</section>
<section class="chart">
    <div class="row">
        <div class="chart_left">
            <h1>All Teacher</h1>
            <canvas id="myChart2"></canvas>
            <div class="chart_footer">
                <div class="row">
                    <div class="chart_footer-left">
                        <hr>
                        <span>Female Teacher</span>
                        <h1 id="fetchFemale_teacher_count">00</h1>
                    </div>
                    <div class="chart_footer-right">
                        <hr>
                        <span>Male Teacher</span>
                        <h1 id="fetchMale_teacher_count">00</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart_right">
            <div class="top_male_female_count">
                <h1>All Students</h1>
                <button onclick="window.location.reload()">Refresh</button>
            </div>
            <canvas id="myChart3"></canvas>
            <div class="chart_footer">
                <div class=""row>
                    <div class="chart_footer_left">
                        <hr>
                        <h1 id="fetchChartData"></h1>
                        <span>Female Student</span>
                        <h1 id="fetchFemaleStudents">00</h1>
                    </div>
                    <div class="chart_footer_left">
                        <hr>
                        <span>Male Student</span>
                        <h1 id="fetchMaleStudents">00</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>             
</section>

