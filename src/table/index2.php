<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

    <div class="centerThis">
        <a class="thisButton" href="application.html" >submit request</a>
    </div>
    
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1">Date Submitted</th>
                                <th class="cell100 column1">Application ID</th>
                                <th class="cell100 column1">Vacation Start</th>
                                <th class="cell100 column1">Vacation End</th>
                                <th class="cell100 column1">Days Requested</th>
                                <th class="cell100 column1">Status</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                        <div class="table100-body js-pscroll ps ps--active-y">
                            <table>
                                <tbody>
                                <?php
                                include '../connection.php';
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql1 =  "SELECT id_Application, DATEDIFF(vacation_Start,vacation_End) AS DateDiff FROM Application";
                                $resultData=mysqli_query($conn,$sql1);
                                $daysData=mysqli_fetch_all($resultData)[0];

                                $sql2 = "SELECT id_Application,date_Submitted,vacation_Start,vacation_End,days_Requested,application_Status FROM Application ORDER BY date_Submitted DESC";
                                $resultForm2=mysqli_query($conn,$sql2);

                                while ($row = mysqli_fetch_array($resultForm2)) {
                                    echo "<tr class='row100 body'>
        <td class='cell100 column1'>" . $row[1] . "</td>
        <td class='cell100 column2'>" . $row[0] . "</td>
        <td class='cell100 column3'>" . $row[2] . "</td>
        <td class='cell100 column4'>" . $row[3] . "</td>
        <td class='cell100 column5'>" . $row[4] . "</td>
        <td class='cell100 column6'>" . $row[5] . "</td>
    </tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                </div>
            </div>
            </div>
        </div>

    </div>



<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>