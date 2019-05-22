<?php

session_start();

$userId = $_POST['inputUsername'];
$password = $_POST['inputPassword'];

if ($userId && $password)
{
    include "connection.php";
    
    $query = "SELECT * FROM users WHERE userId = '$userId'";
    $result = $db_connect->query('$query');

    if(!$result) die($db_connect->error);
    elseif ($result->num_rows)
    {
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close;

        $saved_userId = $row['userId'];
        $saved_password = $row['password'];

        if ($userId == $saved_userId && $password == $saved_password)
        {
            echo "Welcome $userId, you are connected!";
            $_SESSION['userId'] = $userId; 

        } else {
            die ("Invalid username or password");
        }
    }



    


}






?>