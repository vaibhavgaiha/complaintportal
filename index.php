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
<div class="container col-lg-12 header">
<img class="logo" src="images/mnnitlogo.png" alt="mnnit logo"/>
<h1>Motilal Nehru National Institute of Technology<br>Allahabad,India<h1>
</div>
<div class="container col-lg-12" style="background-color: lightcyan;margin-top: 125px;">
<h1>Welcome to the complaint portal</h1>
        <button type="button" class="btn btn-primary btn-lg x1" id="bt1" data-toggle="modal" data-target="#SignUpModal" >Sign Up</button>

    <!-- SignUp Modal -->
    <div class="modal fade" id="SignUpModal" role="dialog">
        <div class="modal-dialog">

            <!-- SignUp Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #3678ab;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title" style="color: white;"><strong>Sign Up</strong></h2>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="SignUpform" onsubmit="return checkfun()" method="POST" action="signupBack.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="regno">Reg. No.:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="regno" placeholder="Enter Registration Number" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="mailId">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="mailId" placeholder="Enter e-mail address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="program">Program:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="program" placeholder="Enter program" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="pwd" placeholder="Enter password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="repwd">Re-enter Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="repwd" placeholder="Re-enter password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <button type="button" class="btn btn-primary btn-lg x1" id="bt2" data-toggle="modal" data-target="#LoginModal">Login</button>
        <!-- Login Modal -->
        <div class="modal fade" id="LoginModal" role="dialog">
            <div class="modal-dialog">

                <!-- Login Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #3678ab;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title" style="color: white;"><strong>Login</strong></h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="loginBack.php">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="regno">Reg. No.:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="regno" placeholder="Enter Registration Number" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="pwd" placeholder="Enter password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <button type="button" class="btn btn-primary btn-lg x1" id="bt3" data-toggle="modal" data-target="#ContactUsModal">Contact Us <span class="glyphicon glyphicon-envelope"></span></button>

    <!-- Contacts Modal -->
    <div class="modal fade" id="ContactUsModal" role="dialog">
        <div class="modal-dialog">

            <!-- Contacts Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #3678ab;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title" style="color: white;"><strong>Contact Us</strong></h2>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default">
                    <div class="panel-body" style="font-family: monospace;font-size: 18px;font-weight: bold;">Vaibhav Gaiha<br>MNNIT Allahabad,India<br>vaibhavgaiha1996@gmail.com</div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <br>
    <br>
    <div class="col-lg-4">
        <h3 class="withgly">LOGIN</h3>
        <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
    </div>
    <div class="col-lg-4">
        <h3 class="withgly">COMPLAIN</h3>
        <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
    </div>
    <div class="col-lg-1">
        <h3>RESOLVE</h3>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

</body>

</html>


