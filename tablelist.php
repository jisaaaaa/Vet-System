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
    <title>Schedules - VET Clinical Information System in PHP</title>
</head>

<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed">
    <?php include './config/sidebar.php' ?>

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Schedules Overview</h1>
                        </div>
                    </div>
                </div>
            </section>
            <form>
                <fieldset>
                    <?php
                echo 
                "<tr>
                    <td>";
                        $host       = "localhost";
                        $username   = "root";
                        $password   = "";
                        $database   = "insertion";

                        // select database
                        $connection = mysqli_connect($host, $username, $password);
                        mysqli_select_db($connection, "insertion");

                        $query = ("SELECT * FROM addtable");
                        $result = mysqli_query($connection, $query);
                        echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                                    <tr>
                                        <th>Staff</th>
                                        <th>Start time</th>
                                        <th>End time</th>
                                        <th>Action</th>
                                    </tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['faculty'] . "</td>";
                            echo "<td>" . $row['start_time'] . "</td>";
                            echo "<td>" . $row['end_time'] . "</td>";
                            echo "<td><form class='form-horizontal' method='post' action='tablelist.php'>
                                <input name='id' type='hidden' value='" . $row['id'] . "';>
                                <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                                </form></td>";
                            echo "</tr>";
                        }
                        echo "</table>";

                        echo "</td>           
                </tr>";

                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    echo '<script type="text/javascript">
                      alert("Schedule Successfuly Deleted");
                        location="tablelist.php";
                        </script>';
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $sql = mysqli_query($connection, "DELETE FROM addtable WHERE id='$id'");
                }
                ?>
                </fieldset>
                <div align="center">
                    <br>
                    <a href="home.php"><input type='submit' class='btn btn-success' name='delete' value='New'></a>
                    <a href="Index.php"><input type='submit' class='btn btn-primary' name='delete' value='Logout'></a>
                </div>
            </form>

        </div>

    </div>
    </div>

</body>

</html>