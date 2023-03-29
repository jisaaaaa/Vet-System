<?php
include './config/connection.php';
include './common_service/common_functions.php';
include './config/site_js_links.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <title>Add Staff - VET Clinical Information System in PHP</title>
    <?php include './config/site_css_links.php' ?>
</head>

<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed">
    <?php include './config/sidebar.php' ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Set Staff</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card card-outline card-primary rounded-0 shadow">
                    <div class="card-header">
                        <h3 class="card-title">Add New Staff</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="add.fac.php">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="falname">Staff Name</label>
                                    <div class="col-md-5">
                                        <input id="falname" name="falname" type="text" placeholder="Staff Name"
                                            class="form-control input-md" required>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Designation">Designation</label>
                                    <div class="col-md-5">
                                        <input id="Designation" name="Designation" type="text" placeholder="Designation"
                                            class="form-control input-md" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group" align="right">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-5">
                                        <button id="submit" name="submit" class="btn btn-primary">Add Staff</button>
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