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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="editmodal" tableindex="-1" role=""dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class ="modal-dialog" role=""document">
        <div class ="modal-content">
            <div class=""modal-header">
                <h5 class ="modal-title" id ="exampleModalLabel"> Update User Data</h5>
                <button type="button" class="close" data-dismiss=""modal" aria-label ="Close">
            <span aria-hidden="true">&times;</span>
            </button>


</div>

    <form action="user_properties.php" method="POST">
        <div class ="modal-body">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="fname " class="form-control" placeholder="Enter First Name">


            </div>
            <div class ="form-group">
                <label> Last Name    </label>
                <input type="text" name="fname" class ="form-control" placeholder ="Enter Last Name">

            </div>

        <div class=""modal-footer">

         <button type="button" class ="btn btn-secondary" data-dismiss="modal"> Close</button>
            <button type="submit"  name ="insertdata" class ="btn btn-primary" data-dismiss="modal"> Close</button>

        </div>





    </form>


</div>
</div>
</div>
</div>






<div class="centerThis">
    <a class="thisButton" href="createUser.php" >Create New User</a>
</div>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
                <div class="table100-head">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="row100 head">
                            <th class="cell100 column1">User Firstname</th>
                            <th class="cell100 column2">User Lastname</th>
                            <th class="cell100 column3">User Email</th>
                            <th class="cell100 column4">User Type</th>
                            <th class="cell100 column5">Operations</th>

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


                        $sql2 = "SELECT user_Firstname,user_Lastname,user_Email,user_Type FROM User ORDER BY user_Firstname ";
                        $resultForm2=mysqli_query($conn,$sql2);

                        while ($row = mysqli_fetch_array($resultForm2)) {
                            echo "<tr class='row100 body'>
                                        <td class='cell100 column1'>" . $row[0] . "</td>
                                        <td class='cell100 column2'>" . $row[1] . "</td>
                                        
                                        <td class='cell100 column3'>" . $row[2] . "</td>
                                        <td class='cell100 column4'>" . $row[3] . "</td>
                                        <td class='cell100 column5'> 
                                            <div class=\"text-right\"> 
                                            <a class='btn btn-success editbtn' href='createUser.php?email=$row[2]'> Edit </a></td>
                                              </div> 
                                     
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

<script>

$(document).ready(function () {
    $('.editbtn').on('click',function () {
        $(#'editmodal').modal('show');

    });

});

</script>





<!--===============================================================================================-->
<script src="js/main.js"></script>
<script src="adminShowForm.js"></script>


</body>
</html>