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
        <img src="./images/school_bulding.jpg" alt="cover image">
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
                            <i class="far fa-user-plus"></i>
                        </div>
                    </div>
                    <div class="teacher-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
        </div>

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
                            <i class="far fa-user-plus"></i>
                        </div>
                    </div>
                    <div class="teacher-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
        </div>

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
                            <i class="far fa-user-plus"></i>
                        </div>
                    </div>
                    <div class="teacher-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
        </div>

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
                            <i class="far fa-user-plus"></i>
                        </div>
                    </div>
                    <div class="teacher-footer">
                        <a href="#">More Info <i class="fas fa-angle-double-alt"></i></a>
                    </div>
            </div>
        </div>
    </div>
</section>