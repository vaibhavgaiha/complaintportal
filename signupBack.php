<?php

    require_once "functions.php";

    if($_SERVER['REQUEST_METHOD']!== 'POST')
    {
        header('Location: error404.php');
    }
    else
    {
        $regno=validate($_POST['regno']);
        $name=validate($_POST['name']);
        $program=validate($_POST['program']);
        $pwd=$_POST['pwd'];
        $mailId=validate($_POST['mailId']);
        $status=0;
        if($regno=="" || $name=="" || $program=="" || $pwd=="")
        {
            echo("<!DOCTYPE html><html><head>    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                    </head><body><div class=\"alert alert-danger\"  style=\"top: 50%;text-align: center;font-family: Calibri;font-weight: bold;font-size: 20px;\">Please enter valid details.</div></body></html>");
            echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";

        }
        else
        {
            $connection=mysqli_connect("localhost","vaibhavgaiha",'Vgaiha@1996',"complaintportal");
            $query="INSERT INTO stu_user VALUES(\"$regno\",\"$name\",\"$mailId\",\"$program\",\"$pwd\",$status)";
            $success=mysqli_query($connection,$query);
            if($success)
            {
                echo("<!DOCTYPE html><html><head>    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
                        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
                        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                        </head><body><div class=\"alert alert-success\" style=\"top: 50%;text-align: center;font-family: Calibri;font-weight: bold;font-size: 20px;\">Succesfully Signed In.</div></body></html>");
                echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";
            }
            else
                echo(mysqli_error($connection));
            mysqli_close($connection);
        }

    }
?>