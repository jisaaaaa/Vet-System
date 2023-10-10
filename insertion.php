<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    echo 'no connection';
}

$id = "";
$name = "";
$subject = "";
$room = "";
$startTime = "";
$endTime = "";
$phoneNumber = ""; // Add phone number variable

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['faculty'];
    $posts[1] = $_POST['course'];
    $posts[2] = $_POST['subject'];
    $posts[3] = $_POST['room'];
    $posts[4] = $_POST['start_time'];
    $posts[5] = $_POST['end_time'];
    $posts[6] = $_POST['phone_number']; // Add phone number to posts
    return $posts;
}

if (isset($_POST['insert'])) {
    $data = getPosts();

    $existing_Query = "SELECT * from `data` WHERE `faculty`='$data[0]' OR `course`='$data[1]'
    OR `subject`='$data[2]' OR `room`='$data[3]' OR `start_time`='$data[4]' OR `end_time`='$data[5]' OR `phone_number`='$data[6]'";
    $existing_Result = mysqli_query($connect, $existing_Query);
    if (mysqli_num_rows($existing_Result) > 0) {
        echo '<script type="text/javascript">
              alert("Duplicate Data! There is already existing schedule with the same details. Please choose another schedule. Thank you");
              location="insertion.php";
              </script>';
    } else {
        $insert_Query = "INSERT INTO `data`(`faculty`, `course`, `subject`, `room`, `start_time`, `end_time`, `phone_number`) VALUES ('$data[0]','$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]')";

        try {
            $insert_Result = mysqli_query($connect, $insert_Query);

            if ($insert_Result) {
                if (mysqli_affected_rows($connect) > 0) {
                    echo '<script type="text/javascript">
                          alert("New Schedule Added Successfully");
                          location="tb.php";
                          </script>';
                } else {
                    echo 'Data Not Inserted';
                }
            }
        } catch (Exception $ex) {
            echo 'Error Insert ' . $ex->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url();
            background-color: white;
        }
    </style>
    <title>Add Schedule</title>
</head>
<body>
<div class="content">
    <div class="form">
        <form class="form-horizontal" method="post" action="insertion.php">
            <fieldset>
                <legend>Add Schedule Here</legend>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="faculty">Faculty</label>
                    <div class="col-md-5">
                        <!-- Your faculty dropdown goes here -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="course">Course</label>
                    <div class="col-md-5">
                        <!-- Your course dropdown goes here -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="subject">Subject</label>
                    <div class="col-md-5">
                        <!-- Your subject dropdown goes here -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="room">Room</label>
                    <div class="col-md-5">
                        <!-- Your room dropdown goes here -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="start_time">Start time</label>
                    <div class="col-md-5">
                        <!-- Your start time dropdown goes here -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="end_time">End time</label>
                    <div class="col-md-5">
                        <!-- Your end time dropdown goes here -->
                    </div>
                </div>
                <!-- Add a phone number input field -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="phone_number">Phone Number</label>
                    <div class="col-md-5">
                        <input id="phone_number" name="phone_number" type="text" placeholder="Phone Number" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="add"></label>
                    <div class="col-md-4">
                        <input id="button" class="" type="submit" name="insert" value="Add">
                    </div>
                </div>
            </fieldset>
        </form>
        <div id="field">
            Note: Please fill all the fields.
        </div>
    </div>
</div>
</body>
</html>

