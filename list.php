<?php
include './config/connection.php';
include './common_service/common_functions.php';
include './config/site_js_links.php';
include './config/site_css_links.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <title>List - VET Clinical Information System in PHP</title>
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
                            <h1>List of Staff</h1>
                        </div>
                    </div>
                </div>

            </section>

            <?php
            include_once("faclist.php");
            ?>
            <div class="wrapper">
                <div class="content-wrapper">
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>List of Time</h1>
                                </div>
                            </div>
                        </div>

                    </section>

                    <?php
                    include_once("timelist.php");
                    ?>


                </div>
            </div>
        </div>
    </div>
</body>

</html>