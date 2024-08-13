<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robogoods | Registration</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources/roboparts.png">
</head>

<body style="background-color: black;">
    <?php include "header.php" ?>
    <?php require "connection.php" ?>
    <div class="col-12">
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center align-items-center">
                <div class="col-10 col-lg-8">
                    <div class="row card">
                        <div class="card-body">

                            <div class="col-12">
                                <h3 style="font-family: 'Lucida Sans'; font-weight:bold; color:goldenrod">Register</h3>
                            </div>

                            <div class="col-12 d-none" id="msgdiv">
                                <div class="alert alert-danger" role="alert" id="alertdiv">
                                    <i class="bi bi-x-octagon-fill fs-5" id="msg">

                                    </i>
                                </div>
                            </div>

                            <div class="col-12 mb-3 row">
                                <div class="col-6 md-3">
                                    <!-- <label class="form-label" for="">First Name</label> -->
                                    <input class="form-control" type="first name" placeholder="First Name" id="f"/>
                                </div>
                                <div class="col-6 md-3">
                                    <input class="form-control" type="last name" placeholder="Last Name" id="l"/>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <input class="form-control" type="email" placeholder="Email" id="e"/>
                            </div>

                            <div class="col-12 mb-3">
                                <!-- <label class="form-label" for="">Password</label> -->
                                <input class="form-control" type="password" placeholder="Password" id="p"/>
                            </div>

                            <div class="col-12 mb-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <input class="form-control" type="password" placeholder="Re-type Password" id="p"/>
                            </div>
                        
                            <div class="col-12 md-3 row">
                                <div class="col-6 md-3">
                                    <!-- <label class="form-label" for="">Phone Number</label> -->
                                    <input class="form-control" id="phone" type="tel" name="phone" placeholder="Phone Number" id="m"/>
                                </div>
                                <div class="col-6 md-3">
                                    <input class="form-control" type="text" placeholder="Zip Code" id="z"/>
                                </div>
                            </div>
                            <br>
                            <div class="col-12 md-3 row">
                                <div class="col-6 md-3">
                                    <!-- <label class="form-label" for="">Phone Number</label> -->
                                    <input class="form-control" type="text" placeholder="Address Line 1" id="ad1"/>
                                </div>
                                <div class="col-6 md-3">
                                    <input class="form-control" type="text" placeholder="Address Line 2" id="ad2"/>
                                </div>
                            </div>
                           <br>
                           <div class="d-grid md-3 my-3">
                           <input class="form-control" type="text" placeholder="City" id="c"/>
                            </div>

                            <div class="d-grid md-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <button class="btn btn-primary" onclick="submit();">Submit</button>
                            </div>
                            
                            <p style="padding: 10px;">Already have an account?</p>

                            <div class="d-grid md-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <button class="btn btn-success">Log In</button>
                            </div>

                            </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="bootstrap.js"></script>
</body>

</html>