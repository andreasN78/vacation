<?php

function login($username, $password, $conn)
{
    $sql = "SELECT * FROM `User` WHERE user_Email='" . mysqli_real_escape_string($conn, $username) . "'";

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        // echo "id: " . $row["id"] . " - Name: " . $row["AdminUserName"] . "<br> " . $row["AdminPassword"] . "<br>";
        //var_dump($row);
        if (md5($password) === $row["user_Password"]) {
            return "Success";
        } else {
            return 'Invalid password.';

        }
    } else {
        return 'Invalid username.';
    }
}
