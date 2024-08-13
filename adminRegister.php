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
    <div class="col-12">
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center align-items-center">
                <div class="col-8 col-lg-6">
                    <div class="row card">
                        <div class="card-body">

                            <div class="col-12 mb-3">
                                <h3 style="font-family: 'Lucida Sans'; font-weight:bold; color:goldenrod">Admin Register</h3>
                            </div>

                            <div class="col-12 mb-3 row">
                                <div class="col-6 md-3">
                                    <!-- <label class="form-label" for="">First Name</label> -->
                                    <input class="form-control" type="first name" placeholder="First Name" />
                                </div>
                                <div class="col-6 md-3">
                                    <input class="form-control" type="last name" placeholder="Last Name" />
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <input class="form-control" type="email" placeholder="Email" />
                            </div>

                            <div class="col-12 mb-3">
                                <!-- <label class="form-label" for="">Password</label> -->
                                <input class="form-control" type="password" placeholder="Password" />
                            </div>

                            <div class="col-12 mb-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <input class="form-control" type="password" placeholder="Re-type Password" />
                            </div>
                            

                            <div class="col-12 md-3 row">
                                <div class="col-6 md-3">
                                    <!-- <label class="form-label" for="">Phone Number</label> -->
                                    <input class="form-control" id="phone" type="tel" name="phone" placeholder="Phone Number" />
                                </div>
                                <div class="col-6 md-3">
                                    <input class="form-control" type="password" placeholder="Zip Code" />
                                </div>
                            </div>
                            <br>
                            <div class="col-12 md-3 row">
                                <div class="col-6 md-3">
                                    <!-- <label class="form-label" for="">Phone Number</label> -->
                                    <input class="form-control" type="text" placeholder="Address Line 1" />
                                </div>
                                <div class="col-6 md-3">
                                    <input class="form-control" type="text" placeholder="Address Line 2" />
                                </div>
                            </div>
                           <br>
                            <div class="col-12 mb-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <input class="form-control" type="text" placeholder="City" />
                                
                            </div>

                            <div class="d-grid md-3 my-3">
                                <select name="Destination" class="form-control">
                                    <option value="quantity">Designation</option>
                                    <option value="one">Cashier</option>
                                    <option value="two">Manager</option>
                                    <option value="three">Cordinator</option>
                                    <option value="three">Developer</option>
                                </select>
                            </div>


                            <div class="d-grid md-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <button class="btn btn-primary">Submit</button>
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