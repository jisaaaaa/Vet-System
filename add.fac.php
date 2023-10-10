<?php
$con = mysqli_connect('localhost', 'root', '');

if (!$con) {
    die('Error: Not connected to the server');
}

if (!mysqli_select_db($con, 'insertion')) {
    die('Error: Database not selected');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Faculty_Name = $_POST['falname'];
    $Designation = $_POST['Designation'];
    $Phone_Number = $_POST['phone_number'];

    // Add the "Phone Number" column in the SQL query
    $sql = "INSERT INTO faculty (Faculty_Name, Designation, phone_number) VALUES ('$Faculty_Name', '$Designation', '$Phone_Number')";

    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
                      alert("New Staff Added!");
                      location="home.php";
                  </script>';
    } else {
        echo 'Error: ' . mysqli_error($con);
    }
}

mysqli_close($con);
?>
