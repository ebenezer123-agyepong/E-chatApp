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
        </div>
    </div>
</section>