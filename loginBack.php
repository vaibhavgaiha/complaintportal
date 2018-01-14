<?php

    require_once "functions.php";
    if($_SERVER['REQUEST_METHOD']!="POST")
    {
        header('Location: error404.php');
    }
    else
    {
        $regno=$_POST['regno'];
        $pwd=$_POST['pwd'];
        $regno=validate($regno);
        $connection=mysqli_connect("localhost","vaibhavgaiha","Vgaiha@1996","complaintportal");
        $query="SELECT * FROM stu_user WHERE regno=\"$regno\" AND password=\"$pwd\";";
        $success=mysqli_query($connection,$query);
        if(mysqli_num_rows($success)>0)
        {
            session_start();
            $_SESSION['regno']=$regno;
            $_SESSION['validcheck']="1";
            $query="UPDATE stu_user SET logStat=1 WHERE regno=\"$regno\";";

            echo("<!DOCTYPE html><html><head>    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                    </head><body><div class=\"alert alert-success\"  style=\"top: 50%;text-align: center;font-family: Calibri;font-weight: bold;font-size: 20px;\">
                    <span class=\"glyphicon glyphicon-ok\"></span>Successful Login.</div></body></html>");
            echo "<script>setTimeout(\"location.href = 'userhome.php';\",2000);</script>";

        }
        else
        {
            echo("<!DOCTYPE html><html><head>    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                    </head><body><div class=\"alert alert-danger\"  style=\"top: 50%;text-align: center;font-family: Calibri;font-weight: bold;font-size: 20px;\">Invalid credentials.</div></body></html>");
            echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";
        }
    }


?>