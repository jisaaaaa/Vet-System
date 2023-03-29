<?php
include './config/connection.php';
include './common_service/common_functions.php';
include './config/site_js_links.php';
include './config/site_css_links.php'
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <title>Add Time - VET Clinical Information System in PHP</title>
</head>

<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed">
    <?php include './config/sidebar.php' ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Set Time</h1>
                        </div>
                    </div>
                </div>

            </section>

            <section class="content">
                <div class="card card-outline card-primary rounded-0 shadow">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="add.time.php">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="starttime">Start time</label>
                                    <div class="col-md-5">
                                        <input id="starttime" name="starttime" type="text" placeholder=""
                                            class="form-control input-md" required="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="endtime">End time</label>
                                    <div class="col-md-5">
                                        <input id="endtime" name="endtime" type="text" placeholder=""
                                            class="form-control input-md" required="">

                                    </div>
                                </div>



                                <!-- Button -->
                                <div class="form-group" align="right">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-5">
                                        <button id="submit" name="submit" class="btn btn-success">Add Time</button>
                                    </div>
                                </div>

                            </fieldset>
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