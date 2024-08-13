<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robogoods | Add Products</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources/roboparts.png">
</head>

<body>
    <div class="col-12" style="background-image: linear-gradient(black, blue, lightseagreen);">
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center align-items-center">
                <div class="col-7">
                    <div class="row card">
                        <div class="card-body">

                            <div class="col-12">
                                <h3 style="font-family: 'Lucida Sans'; font-weight:bold; color:goldenrod">Add New Products</h3>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="col-12">
                                    <!-- <label class="form-label" for="">First Name</label> -->
                                    <input class="form-control" type="item name" placeholder="Item Name" />
                                </div>
                                <!-- <div class="col-6 md-3">
                                    <input class="form-control" type="last name" placeholder="Last Name" />
                                </div> -->
                            </div>

                            <div class="col-12 mb-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <input class="form-control" type="email" placeholder="Item Code" />
                            </div>

                            <div class="col-12 mb-3">
                                <select name="category" class="form-control">
                                    <option value="black">Category</option>
                                    <option value="White">Mechanical Components</option>
                                    <option value="Silver">Control Systems</option>
                                    <option value="black">Software Components</option>
                                    <option value="White">Communication Systems</option>
                                    <option value="Silver">Human-Machine Interface (HMI)</option>
                                    <option value="White">End Effectors</option>
                                    <option value="Silver">Mobility Components</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <select name="color" class="form-control">
                                    <option value="black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Gold">Gold</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <select name="quantity" class="form-control">
                                    <option value="black">Colour</option>
                                    <option value="black">1</option>
                                    <option value="White">2</option>
                                    <option value="Silver">3</option>
                                    <option value="black">4</option>
                                    <option value="White">5</option>
                                    <option value="Silver">6</option>
                                    <option value="black">7</option>
                                    <option value="White">8</option>
                                    <option value="Silver">9</option>
                                    <option value="black">10</option>
                                    <option value="White">11</option>
                                    <option value="Silver">12</option>
                                </select>
                            </div>

                            <div class="col-12 my-3 d-grid">

                                <input type="text" class="form-control" style="height:100px">
                                <div class="col-12 d-grid my-3">
                            <form action="/upload" method="POST" enctype="multipart/form-data">
                                <label for="fileUpload">Upload a file:</label>
                                <input type="file" id="fileUpload" name="fileUpload">
                                <button type="submit">Upload</button>
                            </form>
                            </div>

                            </div>

                            <div class="col-12 d-grid my-3">
                                <textarea name="description" class="form-control" id="" style="height: 70px; border-radius:10px" placeholder="Type Description"></textarea>
                            </div>
                          
                           
                            <div class="d-grid md-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <button class="btn btn-primary">Add Product</button>
                            </div>
                            <p></p>

                            <div class="d-grid md-3">
                                <!-- <label class="form-label" for="">Email Address</label> -->
                                <button class="btn btn-success">Back</button>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="script.js"></script>
</body>

</html>