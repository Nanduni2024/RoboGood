<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources/roboparts.png">
    <title>Robogoods</title>
</head>

<body>
    <?php include "header.php" ?>
    <div class="body col-12 col-my-4">
        <div class="main-div">
            <div class="main-title">
                <h1>We are <b style="color: blue;">Robogoods</b> Robotic parts collection...</h1>
                <h3>You can now buy the new generation of robotic accessories from us.</h3>
                <br>
                <button class="btn btn-primary col-lg-4" id="login" onclick="signIn();">Login</button>
                <button class="btn btn-success col-lg-4" id="signup" onclick="signup();">Signup</button>
            </div>
            <div class="main-img">
                <img src="resources/pngegg (1).png" class="main-image">
            </div>
        </div>

        <div class="features">
            <div class="features-div1">
                <h1>Amazing Services & Features for you</h1>
            </div>

            <div class="features-div2">
                <h5 style="color: white; font-family:'Franklin Gothic Medium';">Your premier destination for high-quality robotic components! Whether you're a
                    hobbyist, an engineer, or a manufacturer, we have everything you need to build and
                    enhance your robotic projects.</h5>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card" style="background-image:url(resources/th\ \(4\).jfif); background-repeat:no-repeat; background-size: 100% 100%; outline:none important;">
                        <p class="card-title" style="font-family: 'Franklin Gothic Medium'; color:white; font-weight:bold; padding: 10px; font-size:large;">Robotics Parts Sales and Inventory</p>
                        <p style="color:white; padding-left: 15px; padding-right: 15px;">We like Global Robot Parts and Firgelli Automations offer a wide selection of robotics parts, components, and accessories that can be purchased online.</p>
                        <br>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card" style="background-image:url(resources/th\ \(4\).jfif); background-repeat:no-repeat; background-size: 100% 100%; outline:none important;">
                        <p class="card-title" style="font-family: 'Franklin Gothic Medium'; color:white; font-weight:bold; padding: 10px; font-size:large;">Robotics Parts Sourcing and Manufacturing</p>
                        <p style="color:white; padding-left: 15px; padding-right: 15px;">We like connect customers with qualified domestic and international manufacturers that can produce custom robotics parts and prototypes to the customer's specifications.</p>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card" style="background-image:url(resources/th\ \(4\).jfif); background-repeat:no-repeat; background-size: 100% 100%; outline:none important;">
                        <p class="card-title" style="font-family: 'Franklin Gothic Medium'; color:white; font-weight:bold; padding: 10px; font-size:large;">Robotics Education and Resources</p>
                        <p style="color:white; padding-left: 15px; padding-right: 15px;">We are also provide educational content and resources for robotics enthusiasts and professionals. Topics like motion control, linear actuators, and integrating robotics components.</p>
                    </div>
                </div>
            </div>
        </div>   

        
    </div>

    <?php include "footer.php" ?>
        <script src="bootstrap.bundle.js"></script>
        <script src="bootstrap.js"></script>
        <script src="script.js"></script>
</body>

</html>