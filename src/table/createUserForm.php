<html>
<head>
    <style>
        .newUser{
            max-width:25%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .

    </style>
    <img src="newUser.png" class="newUser" alt="Photo of sea">


    <title>Create New User</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
</head>
<body>


<div class="container">

    <div class="row">

        <div class="col-xl-8 offset-xl-2 py-5">

            <?php if ($newUser):?>
            <h1>Create New User </h1>
            <?php else:?>
            <h1>Edit User </h1>
            <?php endif;?>




            <p class="lead">In the following form complete the User personal information.</p>

            <!-- We're going to place the form here in the next step -->
            <form id="contact-form" method="post" action="createUser.php" role="form" oninput='up2.setCustomValidity(up2.value != up.value ? "Passwords do not match." : "")'>

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_Firstname">Firstname *</label>
                                <input id="user_Firstname" value="<?php echo $user['user_Firstname']?>" type="text" name="user_Firstname" class="form-control" placeholder="Please enter user First Name" required="required" data-error="Date From is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_Lastname">LastName *</label>
                                <input id="user_Lastname" value="<?php echo $user['user_Firstname']?>" type="text" name="user_Lastname" class="form-control" placeholder="Please enter user LastName" required="required" data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email"  value="<?= $user['user_Email']?>" type="email" name="email" class="form-control" placeholder="Please enter user email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_Password1">Password *</label>
                                <input id="user_Password1" type=password required name=up class="form-control" placeholder="Please enter user password *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_Password2">Confirm Password *</label>
                                <input id="user_Password2" type=password  name=up2 class="form-control" placeholder="Please enter user password *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>



                    <form action="createUser.php" method="post">

                    <div class="dropdown" >

                        <select class="form-control" name="theUserChoices">
                            <option value="Employee" <?php echo $user['user_Type'] == 'Employee' ? 'selected' : ''?>>Employee</option>
                            <option value="Administrator" <?php echo $user['user_Type'] == 'Administrator' ? 'selected' : ''?>>Administrator</option>

                        </select>

                    </div>


                    </form>



                    <!-- A dropdown

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" name="user_Dropdown" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <label for="dropdownMenuButton">Select Employee/Administrator *</label>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><h6>Employee</h6></a>
                            <a class="dropdown-item" href="#"><h6>Administrator</h6></a>

                        </div>
                    </div>
                    -->


                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Create User" name ="create_User">
                    </div>
                </div>


                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted">
                                <strong>*</strong> These fields are required.

                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
<script src="contact.js"></script>
</body>
</html>