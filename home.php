<?php
include './config/connection.php';
include './common_service/common_functions.php';
include './config/site_js_links.php';
$message = '';



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


// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= "header.php";
// include_once("header.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <?php include './config/site_css_links.php' ?>
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <title>Set Schedule - VET Clinical Information System in PHP</title>

    </head>
</head>

<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <?php include './config/sidebar.php' ?>


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

                <!-- Default box -->
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
                        <!-- best practices-->
                        <form method="post">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="faculty">Staff</label>
                                <div class="col-md-5">
                                    <select id="faculty" name="faculty" class="form-control">
                                        <?php echo $options; ?>
                                    </select>
                                </div>
                            </div>







                            <div class="row">
                                <h1>test</h1>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <label>Staff</label>
                                    <select id="patient" name="patient" class="form-control form-control-sm rounded-0"
                                        required="required">
                                        <?php echo $patients; ?>
                                    </select>
                                </div>


                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10">
                                    <div class="form-group">
                                        <label>Visit Date</label>
                                        <div class="input-group date" id="visit_date" data-target-input="nearest">
                                            <input type="text"
                                                class="form-control form-control-sm rounded-0 datetimepicker-input"
                                                data-target="#visit_date" name="visit_date" required="required"
                                                data-toggle="datetimepicker" autocomplete="off" />
                                            <div class="input-group-append" data-target="#visit_date"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10">
                                    <div class="form-group">
                                        <label>Next Visit Date</label>
                                        <div class="input-group date" id="next_visit_date" data-target-input="nearest">
                                            <input type="text"
                                                class="form-control form-control-sm rounded-0 datetimepicker-input"
                                                data-target="#next_visit_date" name="next_visit_date"
                                                data-toggle="datetimepicker" autocomplete="off" />
                                            <div class="input-group-append" data-target="#next_visit_date"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix">&nbsp;</div>

                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <label>BP</label>
                                    <input id="bp" class="form-control form-control-sm rounded-0" name="bp"
                                        required="required" />
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <label>Weight</label>
                                    <input id="weight" name="weight" class="form-control form-control-sm rounded-0"
                                        required="required" />
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                    <label>Disease</label>
                                    <input id="disease" required="required" name="disease"
                                        class="form-control form-control-sm rounded-0" />
                                </div>


                            </div>

                            <div class="col-md-12">
                                <hr />
                            </div>
                            <div class="clearfix">&nbsp;</div>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label>Select Treatment</label>
                                    <select id="medicine" class="form-control form-control-sm rounded-0">
                                        <?php echo $medicines; ?>
                                    </select>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label>Details</label>
                                    <select id="packing" class="form-control form-control-sm rounded-0">

                                    </select>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <label>Quantity</label>
                                    <input id="quantity" class="form-control form-control-sm rounded-0" />
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <label>Dosage</label>
                                    <input id="dosage" class="form-control form-control-sm rounded-0" />
                                </div>

                                <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
                                    <label>&nbsp;</label>
                                    <button id="add_to_list" type="button"
                                        class="btn btn-primary btn-sm btn-flat btn-block">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="clearfix">&nbsp;</div>
                            <div class="row table-responsive">
                                <table id="medication_list" class="table table-striped table-bordered">
                                    <colgroup>
                                        <col width="10%">
                                        <col width="50%">
                                        <col width="10%">
                                        <col width="10%">
                                        <col width="15%">
                                        <col width="5%">
                                    </colgroup>
                                    <thead class="bg-primary">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Treatment</th>
                                            <th>Details</th>
                                            <th>QTY</th>
                                            <th>Dosage</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="current_medicines_list">

                                    </tbody>
                                </table>
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
                <!-- /.card -->

            </section>
        </div>
    </div>













    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

</body>

</html>