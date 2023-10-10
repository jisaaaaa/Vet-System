<?php
session_start(); // Start the session

$phoneNumber = ""; // Initialize the variable to hold the phone number

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['phone_number'])) {
    // Sanitize and store the phone number in the session variable
    $_SESSION['phone_number'] = sanitize($_POST['phone_number']);
    $phoneNumber = $_SESSION['phone_number']; // Update the phone number variable for immediate display

    // Your code to insert the staff data into the database goes here
    // Make sure to properly insert the phone number into the database

    // Example: Inserting the phone number into the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "insertion";

    // Create a database connection
    $connection = mysqli_connect($host, $username, $password, $database);

    // Check if the connection is successful
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Prepare the phone number for insertion (you can use prepared statements for security)
    $phoneToInsert = mysqli_real_escape_string($connection, $phoneNumber);

    // SQL query to insert the phone number into a table named "phone_numbers"
    $insertQuery = "INSERT INTO phone_numbers (phone_number) VALUES ('$phoneToInsert')";

    // Perform the SQL query
    if (mysqli_query($connection, $insertQuery)) {
        echo "Phone number inserted into the database successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}

// Define the function to sanitize input
function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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
    <?php include './config/sidebar.php';
    include './config/header.php'; ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Staff</h1>
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
                                        <input id="falname" name="falname" type="text" placeholder="Staff Name" class="form-control input-md" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Designation">Last Name</label>
                                    <div class="col-md-5">
                                        <input id="Designation" name="Designation" type="text" placeholder="Last Name" class="form-control input-md" required>
                                    </div>
                                </div>

                                <!-- Add the "Phone Number" input field -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="phone_number">Phone Number</label>
                                    <div class="col-md-5">
                                        <input id="phone_number" name="phone_number" type="text" placeholder="Phone Number" class="form-control input-md" required>
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
