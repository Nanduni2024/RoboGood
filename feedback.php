<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robogoods | Feedbacks</title>
    <link rel="icon" href="resources/roboparts.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <?php include "header.php" ?>
    <div class="col-12" style="background-color: black; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; height:900px;">
        <h1 style="color: white;">Feedbacks</h1>
        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0 my-3">
                <div class="card" style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title">John Smith</h5>
                        <p class="card-text">"Aenean pulvinar dui ornare, feugiat lorem non, ultrices justo. Mauris efficitur, mauris in auctor euismod, quam elit ultrices urna, eget eleifend arcu risus id metus. Maecenas ex enim, mattis eu velit vitae, blandit mattis sapien. Sed aliquam leo et semper vestibulum."</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card" style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card" style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="col-sm-12 mb-3 mb-sm-0 my-3">
                <div class="card">
                    <h3>Please provide your feedback in the form below</h3>

                    <form name="feedback_form" id="feedback_form" method="post">
                        <label>How do you rate your overall experience?</label>
                        <div class="mb-3 d-flex flex-row py-1">
                            <div class="form-check mr-3">
                                <input class="form-check-input" type="radio" name="rating" id="rating_bad" value="bad">
                                <label class="form-check-label" for="rating_bad">
                                    Bad
                                </label>
                            </div>

                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" name="rating" id="rating_good" value="good">
                                <label class="form-check-label" for="rating_good">
                                    Good
                                </label>
                            </div>

                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" name="rating" id="rating_excellent" value="excellent">
                                <label class="form-check-label" for="rating_excellent">
                                    Excellent!
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="feedback_comments">Comments:</label>
                            <textarea class="form-control" required rows="6" name="comments" id="feedback_comments"></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="feedback_name">Your Name:</label>
                                <input type="text" required name="name" class="form-control" id="feedback_name" />
                            </div>

                            <div class="col mb-4">
                                <label class="form-label" for="feedback_email">Email:</label>
                                <input type="email" name="email" required class="form-control" id="feedback_email" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Post</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>