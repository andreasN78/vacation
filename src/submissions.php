
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
    <tr>
        <th>Date Submitted</th>
        <th>Application ID</th>
        <th>Vacation Start</th>
        <th>Vacation End</th>
        <th>Days Requested</th>
        <th>Status</th>
    </tr>
    </thead>
    <?php
    include 'connection.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql1 =  "SELECT id_Application, DATEDIFF(vacation_Start,vacation_End) AS DateDiff FROM Application";
    $resultData=mysqli_query($conn,$sql1);
    $daysData=mysqli_fetch_all($resultData)[0];
    var_dump($daysData);


    $sql2 = "SELECT id_Application,date_Submitted,vacation_Start,vacation_End,days_Requested,application_Status FROM Application ORDER BY date_Submitted DESC";
    $resultForm2=mysqli_query($conn,$sql2);

    ?>
    <tbody>
    <?php while ($row = mysqli_fetch_array($resultForm2)) {
        echo "<tr>
        <td>" . $row[1] . "</td>
        <td>" . $row[0] . "</td>
        <td>" . $row[2] . "</td>
        <td>" . $row[3] . "</td>
        <td>" . $row[4] . "</td>
        <td>" . $row[5] . "</td>
    </tr>";
    }
    ?>
    </tbody>
</table>