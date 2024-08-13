<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robogoods | Dashboard</title>
    <link rel="icon" href="resources/roboparts.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                title: 'My Daily Activities',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <?php include 'adminPanelHeader.php' ?>
    <div class="col-12">
        <div class="admin row" style="height: auto; width:auto;">
            <div class="col-3" style="background-color: black; padding:10px;">
                <br>
                <ul class="adminList" style="justify-content: center; align-items:center; border-radius:10px;">
                    <li class="listItems"><a href="default.asp">Home</a></li>
                    <li class="listItems"><a href="news.asp">Payments</a></li>
                    <li class="listItems"><a href="contact.asp">Help Center</a></li>
                    <li class="listItems"><a href="about.asp">Add Product</a></li>
                    <li class="listItems"><a href="about.asp">Settings</a></li>
                    <li class="listItems"><a href="about.asp">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img src="resources/user-interface-removebg-preview.png" style="height: 50px; width:50px">
                                </div>
                                <div class="col-sm-2" style="padding-left: 50px;">
                                    <p style="font-weight:bold;">Naduni Wanniarachchi</p>
                                </div>
                            </div>
                        </a></li>

                </ul>

            </div>
            <div class="col-8">

                <div class="col-12 row" style="display: block;">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card mb-3" style="max-width: 540px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="resources/th.jpg" class="img-fluid rounded-start" style="padding-top: 60px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Earnings</h5>
                                            <div class="single-chart">
                                                <svg viewBox="0 0 36 36" class="circular-chart green">
                                                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                    <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                    <text x="18" y="20.35" class="percentage">60%</text>
                                                </svg>
                                            </div>

                                            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="max-width: 540px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="col">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="resources/boxes-clipart-boxes-two-red-t-es-1920x1465.jpg" class="img-fluid rounded-start" style="padding-top: 60px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Sold</h5>
                                            <div class="flex-wrapper">
                                                <div class="single-chart">
                                                    <svg viewBox="0 0 36 36" class="circular-chart orange">
                                                        <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                        <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                        <text x="18" y="20.35" class="percentage">30%</text>
                                                    </svg>
                                                </div>



                                            </div>
                                            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="col-md-5">
                        <div class="card" style="border-radius: ;">
                            <div id="donutchart" style="width: 900px; height: 500px;"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>

</html>