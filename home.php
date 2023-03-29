<?php
include './config/connection.php';
include './common_service/common_functions.php';
include './config/site_js_links.php';



$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";


$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT * FROM `course`";
$query = "SELECT * FROM `rooms`";
$query = "SELECT * FROM `subject`";
$query = "SELECT * FROM `faculty`";

$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query);

$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options = $options . "<option>$row2[1]</option>";
}

while ($row2 = mysqli_fetch_array($result2)) {
    $options = $options . "<option>$row2[2]</option>";
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <title>Set Schedule - VET Clinical Information System in PHP</title>
    <?php include './config/site_css_links.php' ?>
</head>

<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed">
    <?php include './config/sidebar.php' ?>
    <div class="wrapper">
        <?php while ($row2 = mysqli_fetch_array($result2)) :; ?>
        <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>
        <option value="<?php echo $row2[0]; ?>"><?php echo $row2[2]; ?></option>
        <?php endwhile; ?>


        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Set Schedule</h1>
                        </div>
                    </div>
                </div>

            </section>
            <section class="content">
                <div class="card card-outline card-primary rounded-0 shadow">
                    <div class="card-header">
                        <h3 class="card-title">Add New Schedule</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="faculty">Staff</label>
                                <div class="col-md-5">
                                    <select id="faculty" name="faculty" class="form-control">
                                        <?php echo $options; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="start_time">Start time</label>
                                <div class="col-md-5">
                                    <select id="start_time" name="start_time" class="form-control">
                                        <?php echo $options; ?>


                                        <?php while ($row2 = mysqli_fetch_array($result2)) :; ?>
                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[2]; ?></option>

                                        <?php endwhile; ?>

                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="end_time">End time</label>
                                <div class="col-md-5">
                                    <select id="end_time" name="end_time" class="form-control">
                                        <?php echo $options; ?>
                                    </select>
                                </div>
                            </div>


                            <div class="clearfix">&nbsp;</div>
                            <div class="row">
                                <div class="col-md-10">&nbsp;</div>
                                <div class="col-md-2">
                                    <button type="submit" id="submit" name="submit"
                                        class="btn btn-primary btn-sm btn-flat btn-block">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>













    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
</body>

</html>






<?php


$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";


$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT * FROM `rooms`";


$result1 = mysqli_query($connect, $query);

$query = "SELECT * FROM `subject`";
$result2 = mysqli_query($connect, $query);


$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options = $options . "<option>$row2[2]</option>";
}

?>