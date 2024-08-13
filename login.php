<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robogoods | LogIn</title>
    <link rel="icon" href="resources/roboparts.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body style="background-color:black;">
    <?php include "header.php" ?>
    <div class="container">

        <div class="row d-flex justify-content-center align-items-center" style="margin-top: 100px;">

            <!-- Sign In Box -->
            <div class="col-10 col-lg-4" id="signinBox">

                <div class="row card">
                    <div class="card-body">

                        <div class="col-12 sign">
                            <h2 class="text-center">Sign In</h2>
                        </div>

                        <?php

                        $email = "";
                        $password = "";

                        if (isset($_COOKIE["email"])) {
                            $email = $_COOKIE["email"];
                        }

                        if (isset($_COOKIE["password"])) {
                            $password = $_COOKIE["password"];
                        }

                        ?>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="">Email Address</label>
                            <input class="form-control" type="email" id="email2"/>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="">Password</label>
                            <input class="form-control" type="password" id="password2"/>
                        </div>

                        <div class="form-check col-12 mb-3">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="" id="rememberme">Remember Me</label>
                        </div>

                        <div class="col-12 mb-3">
                            <a href="#" class="link-primary" onclick="forgotPassword();">Forgot Password?</a>
                        </div>

                        <div class="d-grid mb-3">
                            <button class="btn btn-secondary" onclick="logIn();">User Log In</button>
                        </div>

                        <div class="d-grid mb-3">
                            <button class="btn btn-secondary" onclick="adminLogin();">Admin Log In</button>
                        </div>


                        <div class="d-grid mb-3">
                            <button class="btn btn-primary" id="signUp" onclick="signup();">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal -->

            <div class="modal" tabindex="-1" id="forgotPasswordModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reset Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">

                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="npi" />
                                        <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword1();"><i id="e1" class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Re-type Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="rnp" />
                                        <button class="btn btn-outline-secondary" type="button" id="rnpb" onclick="showPassword2();"><i id="e2" class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Verification Code</label>
                                    <input type="text" class="form-control" id="vc" />
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetpw();">Reset Password</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal -->
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>