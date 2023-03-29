<html>

<head>
    <style>

    </style>
</head>

<body>
    <div class="card card-outline card-primary rounded-0 shadow">

        <body>
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

            $query = ("SELECT * FROM timer");
            $result = mysqli_query($connection, $query);
            echo "<div>
            <table class='table table-bordered'>
                            <tr>
                             <th>Start time</th>
								             <th>End time</th>
                                <th>Action</th>
                            </tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['start_time'] . "</td>";
                echo "<td>" . $row['end_time'] . "</td>";
                echo "<td><form method='post' action='timelist.php'>
                        <input name='id' type='hidden' value='" . $row['id'] . "';>
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
                      alert("Time Successfuly Deleted");
                         location="list.php";
                           </script>';
            }
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $sql = mysqli_query($connection, "DELETE FROM timer WHERE id='$id'");
            }
            ?>
            </fieldset>
            </form>
    </div>
    </div>
    </div>
    </div>
</body>

</html>