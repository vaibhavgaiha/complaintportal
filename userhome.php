<?php
    session_start();
    if(!isset($_SESSION['validcheck']))
    {
        header('Location: error404.php');
    }
    else
    {
        $regno=$_SESSION['regno'];
        $conn1=mysqli_connect("localhost","vaibhavgaiha","Vgaiha@1996","complaintportal");
        $conn2=mysqli_connect("localhost","vaibhavgaiha","Vgaiha@1996","complaintportal");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width,initial-scale=1" >
    <title>ComplaintPortal:Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
</head>
<body>
<div class="container col-lg-12 header" style="top: 0;">
    <img class="logo" src="images/mnnitlogo.png" alt="mnnit logo"/>
    <h1>Motilal Nehru National Institute of Technology<br>Allahabad,India<h1>
</div>
<nav class="navbar navbar-inverse" style="z-index: 3;position: absolute;top: 134px;width: 100%;border-radius: 0; ">
    <div class="container-fluid" style="color: white;">
        <div class="nav nav-header" style="padding-top: 10px;display: inline-block;float: right;">
            <div style="display: inline-block;position: absolute;left: 15px;top: 10px;">
                <button class="button"  data-toggle="collapse" data-target="#menunav" style="background-color: transparent;border: none;"><span class="glyphicon glyphicon-align-justify" style="font-size: 20px;"></span></button>
                <div class="navbar fade collapse navbar-inverse" id="menunav" style="margin-top: 12px;left: -16px;border-radius: 0;">
                    <ul class="nav navbar-nav" style="list-style-type: none; margin: 0;padding: 0;width: 200px;;">
                        <li><a href="#" style="display: block;text-decoration: none;text-align: center;width: 200px;border-bottom: solid 1px white;">Home</a></li>
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

<div class="row"">
    <div class="panel panel-default col-lg-3" style="left: 10px;z-index:2;margin-top: 60px;">
        <div class="panel-heading" style="color: #2aabd2;">
            <h2>Personal Info.</h2>
        </div>
        <div class="panel-body">
            <?php
            $query="SELECT * from stu_user WHERE regno=\"$regno\"";
            $result=mysqli_query($conn1,$query);
            $row=mysqli_fetch_assoc($result);
            $name=$row['name'];
            $mailid=$row['emailId'];
            $program=$row['program'];

            echo "<h3>Name:</h3><strong>$name</strong><br><h3>Reg. No.:</h3><strong>$regno</strong><br><h3>E-mail:</h3><strong>$mailid</strong><br><h3>Program:</h3><strong>$program</strong><br>";
            ?>

        </div>

    </div>

    <div class="panel panel-default col-lg-9" style="left: 10px;z-index: 2;margin-top: 60px;">
        <div class="panel-heading" style="color: #2aabd2">
           <h2 style="color: #2aabd2">Today's Updates</h2>
        </div>
        <div class="panel-body">
            <h2 style="color: #00dd00">Resolved today:</h2>
            <?php
            $query2="SELECT * FROM complaints WHERE regno=\"$regno\" AND dateRes=\"".date("Y-m-d")."\" AND status=\"1\"";
            $result2=mysqli_query($conn2,$query2);
            $no=mysqli_num_rows($result2);
            if($no==0)
                echo ("<h3>No complaints resolved today.</h3>");
            else {
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $id = $row['compId'];
                        echo("<span style='font-weight: bold;font-size: large;'>$id</span>");
                    }
                }
            ?>
            <h2 style="color: #d43f3a">Pending complaints:</h2>
            <?php
            $query2="SELECT * FROM complaints WHERE regno=\"$regno\" AND status=\"0\"";
            $result2=mysqli_query($conn2,$query2);
            $no=mysqli_num_rows($result2);
            if($no==0)
            {
                echo ("<h3>No unresolved complaints.</h3>");
            }
            else {
                    echo("<h3>The unresolved complaint ID's are:</h3>");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $id2 = $row['compId'];
                        echo "<span style=\"font-weight: bold;font-size: large;margin-right: 15px;\">$id2</span>";
                    }
                }
            ?>
        </div>
    </div>

</div>

</body>
</html>


<script>

    $(document).click(function(e) {
        if (!$(e.target).is('.nav')) {
            $('.collapse').collapse('hide');
        }
    });
</script>