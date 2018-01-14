<?php
session_start();
if(!isset($_SESSION['validcheck']))
{
    echo("<html><head></head><body><div class=\"alert alert-danger\" style=\"top: 50%;text-align: center;font-family: Calibri;font-weight: bold;font-size: 20px;\">Please login first!!</div></body></html>");
                echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";
}
else
{
    $regno=$_SESSION['regno'];
    $conn=mysqli_connect("localhost","vaibhavgaiha","Vgaiha@1996","complaintportal");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width,initial-scale=1" >
    <title>NewComplaint::Fill form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container col-lg-12 header" style="top: 0;">
        <img class="logo" src="images/mnnitlogo.png" alt="mnnit logo"/>
        <h1 style="color: white;">Motilal Nehru National Institute of Technology<br>Allahabad,India<h1>
    </div>
    <nav class="navbar navbar-inverse" style="z-index: 3;position: absolute;top: 134px;width: 100%;border-radius: 0; ">
        <div class="container-fluid" style="color: white;">
            <div class="nav nav-header" style="padding-top: 10px;display: inline-block;float: right;">
                <div style="display: inline-block;position: absolute;left: 15px;top: 10px;">
                    <button class="button"  data-toggle="collapse" data-target="#menunav" style="background-color: transparent;border: none;"><span class="glyphicon glyphicon-align-justify" style="font-size: 20px;"></span></button>
                    <div class="navbar fade collapse navbar-inverse" id="menunav" style="margin-top: 12px;left: -16px;border-radius: 0;">
                        <ul class="nav navbar-nav" style="list-style-type: none; margin: 0;padding: 0;width: 200px;;">
                            <li><a href="userhome.php" style="display: block;text-decoration: none;text-align: center;width: 200px;border-bottom: solid 1px white;">Home</a></li>
                            <li><a href="complaints.php" style="display: block;text-decoration: none;text-align: center;width: 200px;border-bottom: solid 1px white;">My complaints</a></li>
                            <li><a href="newcomplaint.php" style="display: block;text-decoration: none;text-align: center;width: 200px;">File new complaint</a></li>
                        </ul>
                    </div>
                </div>
                <div style="display: inline-block;position: absolute;right: 15px;top: 10px;">
                    <button class="button" data-toggle="collapse" data-target="#logoutnav" style="position: fixed;background-color: transparent;border: none;right: 15px;">
                        <span class="glyphicon glyphicon-user" style="font-size: 20px;"></span>
                        <?php echo("<span><strong style=\"font-size: 20px;\">&nbsp&nbsp$regno</strong></span>")?>
                        <span class="glyphicon glyphicon-triangle-bottom" style="font-size: 10px;"></span>
                    </button>
                    <div class="navbar fade collapse navbar-inverse" id="logoutnav" style="margin-top: 37px;border-radius: 0;right: -18px">
                        <ul class="nav navbar-nav" style="list-style-type: none; margin: 0;padding: 0;width: 200px;">
                            <li><a href="logoutBack.php" style="display: block;text-decoration: none;text-align: center;width: 200px;"><span class="glyphicon glyphicon-switch"></span>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>



</body>

</html>

<script>

    $(document).click(function(e) {
        if (!$(e.target).is('.nav')) {
            $('.collapse').collapse('hide');
        }
    });
</script>