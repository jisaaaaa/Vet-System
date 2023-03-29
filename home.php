<?php
include './config/connection.php';
include './common_service/common_functions.php';
include './config/site_js_links.php';

// select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

//connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `faculty`";
// for method staff
$result2 = mysqli_query($connect, $query);

$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options = $options . "<option>$row2[1]</option>";
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
    <?php include './config/sidebar.php';
    include './config/header.php'; ?>
    <div class="wrapper">
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
                        <form method="post" action="add.home.php">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="faculty">Staff Name</label>
                                <div class="col-md-5">
                                    <select id="faculty" name="faculty" class="form-control" required>
                                        <?php echo $options; ?>
                                    </select>
                                </div>
                            </div>
</body>

</html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options = $options . "<option>$row2[1]</option>";
}


?>



<html>

<head>
</head>

<body>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>



        <!--Method One-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="start_time">Start time</label>
            <div class="col-md-5">
                <select id="start_time" name="start_time" class="form-control" required>
                    <?php echo $options; ?>


                    <?php while ($row2 = mysqli_fetch_array($result2)) :; ?>

                        <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>


                    <?php endwhile; ?>

                </select>

            </div>
        </div>
    </body>
    </head>

</html>


<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options = $options . "<option>$row2[2]</option>";
}

?>





<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <!-- Method Two -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="end_time">End time</label>
        <div class="col-md-5">
            <select id="end_time" name="end_time" class="form-control" required>
                <?php echo $options; ?>
            </select>
        </div>
    </div>



    <?php while ($row2 = mysqli_fetch_array($result2)) :; ?>

        <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>

    <?php endwhile; ?>

    </select>
    <!-- Button -->
    <div class="form-group" align="right">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-5">
            <button id="submit" name="insert" class="btn btn-primary"> Set </button>
        </div>
    </div>


    </fieldset>
    </form>

    </div>
    </div>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
</body>


</head>

</html>