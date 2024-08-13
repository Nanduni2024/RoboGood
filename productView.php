<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robogoods | Product View</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "header.php" ?>
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 md-2 my-3" style=" padding: 10px; border: 1; border-radius:10px">
                <h3 style="font-family: 'Times New Roman'; font-weight:bold; color: darkblue;">12V DC High Speed motor</h3>
                <div class="col-sm-8 d-flex justify-content-center align-items-center">
                    <img src="components/DC motor.jpg">
                </div>
                <div class="row">
                    <div class="col-sm-4 my-4">
                        <img src="components/DC motor.jpg">
                    </div>
                    <div class="col-sm-4 my-4">
                        <img src="components/DC motor.jpg">
                    </div>

                </div>
            </div>
            <div class="col-sm-4 md-2">
                <div class="row">
                    <div style="padding: 20px;"></div>
                    <div class="col-sm-4 my-4">
                        <div class="card" style="width: 400px;">
                            <div class="d-grid md-3 my-3" style="padding-left: 10px; padding-right: 10px;">
                                <input type="text" class="form-control" placeholder="Item Name">
                            </div>

                            <div class="d-grid md-3 my-3" style="padding-left: 10px; padding-right:10px;">
                                <input type="text" class="form-control" placeholder="Item Code">
                            </div>

                            <div class="d-grid md-3 my-3" style="padding-left: 10px; padding-right:10px;">
                                <select name="color" class="form-control">
                                    <option value="black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Silver">Silver</option>
                                </select>
                            </div>
                            <div class="d-grid md-3 my-3" style="padding-left: 10px; padding-right:10px;">
                                <select name="quantity" class="form-control">
                                    <option value="quantity">Quantity</option>
                                    <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                </select>
                            </div>

                            <div class="d-grid md-3 my-3" style="padding-left: 10px; padding-right:10px;">
                                <button class="btn btn-primary">10 Item Available</button>
                            </div>

                            <div class="d-grid md-3 my-3" style="padding-left: 10px; padding-right:10px;">
                                <input type="text-area" class="form-control" placeholder="Description">
                            </div>

                            <div class="d-grid md-3 my-3" style="padding-left: 10px; padding-right:10px;">
                                <h4 style="font-weight: bold;">1,600.00</h4>
                            </div>

                            <div class="d-grid md-3 my-3" style="padding-left: 10px; padding-right:10px;">
                                <button class="btn btn-outline-success">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p style="font-family:'Lucida Sans'; font-weight:bold; font-size:large;">Recommend</p>

                    <script src="bootstrap.bundle.js"></script>
                    <script src="bootstrap.js"></script>
                    <script src="script.js"></script>
</body>

</html>