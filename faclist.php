<html>

<head>
  <style>

  </style>
</head>

<body>
  <div class="card card-outline card-primary rounded-0 shadow">
    <?php
    echo "<tr>
            <td>";
    // your database connection
    $host       = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "insertion";

    // select database
    $connection = mysqli_connect($host, $username, $password);
    mysqli_select_db($connection, "insertion");

    $query = ("SELECT * FROM faculty");
    $result = mysqli_query($connection, $query);
    echo "<div>
      
      <table  class='table table-bordered'>
                            <tr >
                                <th>First Name</th>
                                <th>Last Name</th>
                                 <th>Action</th>
                            </tr>";
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['faculty_name'] . "</td>";
      echo "<td>" . $row['designation'] . "</td>";
      echo "<td><form method='post' action='faclist.php'>
                        <input name='faculty_id' type='hidden' value='" . $row['faculty_id'] . "';>
                        <input type='submit' class='btn btn-primary' name='delete' value='Delete'>
                        </form></td>";
      echo "</tr>";
    }
    echo "</table>";

    echo "</td>           
        </tr>";


    // delete record

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      echo '<script type="text/javascript">
                      alert("Staff Name Successfuly Deleted");
                         location="list.php";
                           </script>';
    }
    if (isset($_POST['faculty_id'])) {
      $faculty_id = $_POST['faculty_id'];
      $sql = mysqli_query($connection, "DELETE FROM faculty WHERE faculty_id='$faculty_id'");
    }
    ?>
  </div>
  </div>
  </div>
  </div>
</body>

</html>