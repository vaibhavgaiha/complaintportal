<?php
session_start();
if(!isset($_SESSION['validcheck']))
{
    header('Location: error404.php');
}
unset($_SESSION['validcheck']);
session_destroy();

echo("<!DOCTYPE html><html><head>    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                    </head><body><div class=\"alert alert-success\"  style=\"top: 50%;text-align: center;font-family: Calibri;font-weight: bold;font-size: 20px;\">Successfully Logged Out.</div></body></html>");
echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";

?>

