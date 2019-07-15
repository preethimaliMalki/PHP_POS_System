<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="js/semantic.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">

</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="header" >
                <div class="row">
                    <div class="col-md-3">
                        <div id="title" >POS System</div>
                    </div>
                    <div class="col-md-1">
                        <div class="nav-item" >Home</div>
                    </div>
                    <div class="col-md-1">
                        <div class="nav-item" >AboutUS</div>
                    </div>
                    <div class="col-md-1">
                        <div class="nav-item" >services</div>
                    </div>
                    <div class="col-md-6">
                        <div id="log-out" ><button class="ui blue button" style="margin-left:150px">Log Out</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<aside >
    <div class="row">
        <div class="col-md-2"  >
            <div class="row">
                <div>
                    <div id="admin" class="item">
                        <img src="images/admin.jpg" alt="" id="img-admin">
                        <lable id="label-admin">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdmin User</lable>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="aside_one">
                    <div class="item"><label class="side-item"><a href="index.php" style="color: white;text-decoration: none">Dash Board</a></label></div>
                </div>
            </div>
            <div class="row">
                <div class="aside_one">
                    <div class="item"><label class="side-item"><a href="customer.php" style="color: white;text-decoration: none"><i class="users"></i> Customer</a></label></div>
                </div>
            </div>
            <div class="row">
                <div class="aside_one">
                    <div class="item"><label class="side-item"><a href="item.php" style="color: white;text-decoration: none"><i class="boxes"></i>Item</a></label></div>
                </div>
            </div>
            <div class="row">
                <div class="aside_one">
                    <div class="item"><label class="side-item"><a href="order.php" style="color: white;text-decoration: none"><i class="shopping-cart"></i>Order</a></label></div>
                </div>
            </div>
            <div class="row">
                <div class="aside_one">
                    <div class="item"><label class="side-item"><a href="#" style="color: white;text-decoration: none"><i class="chart-line"></i> Report</a></label></div>
                </div>
            </div>
            <div class="row">
                <div class="aside_one">
                    <div class="item" style="height: 300px;border-bottom: none!important;"><label class="side-item"></label></div>
                </div>
            </div>
        </div>

        <div class="col-md-10" style="margin-top: 30px" >
            <div class="row">
                <div class="col-md-3">
                    <div class="card"><img src="images/Customer.JPG" alt="" class="card-img"><label class="card-label" >Customers
                            <br>  247</label></div>
                </div>
                <div class="col-md-3">
                    <div class="card"><img src="images/item.png" alt="" class="card-img"><label class="card-label" >Items
                            <br>  197</label></div>
                </div>
                <div class="col-md-3">
                    <div class="card"><img src="images/orders.png" alt="" class="card-img"><label class="card-label" >Orders
                            <br>  896</label></div>
                </div>
                <div class="col-md-3">
                    <div class="card" id="setting-card"><img src="images/setting.png" alt="" class="card-img" id="setting-img"><label class="card-label" id="setting-label" >Setting
                        </label></div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-12">
                    <img src="images/chart2.JPG" alt="" id="table1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/chart3.JPG" alt="" id="table2">
                </div>
                <div class="col-md-6">
                    <img src="images/C.JPG" alt="" id="table3">
                </div>
            </div>

        </div>
        <footer  >
            <div class="row">
                <div class="col-md-2" style="background-color: #0d71bb;"></div>
                <div class="col-md-10" id="footer" style="background-color:#0d71bb;padding: 6px ">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="btn-footer">
                                <button class="ui facebook button">
                                    <img src="images/fb.JPG" alt="" class="img-social">
                                    Facebook
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="btn-footer" style="width: 340px">
                                <button class="ui youtube button">
                                    <img src="images/ut.JPG" alt="" class="img-social">
                                    YouTube
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2" style="width: 340px">
                            <div class="btn-footer">
                                <button class="ui google plus button">
                                    <img src="images/gl.JPG" alt="" class="img-social">
                                    Google Plus
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2" style="width: 340px">
                            <div class="btn-footer">
                                <button class="ui linkedin button">
                                    <img src="images/li.JPG" alt="" class="img-social">
                                    LinkedIn
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2" style="width: 340px">
                            <div class="btn-footer">
                                <button class="ui linkedin button" id="whtapp">
                                    <img src="images/wp.JPG" alt="" class="img-social">
                                    WhatsApp
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2" style="width: 340px">
                            <div class="btn-footer">
                                <button class="ui linkedin button">
                                    <img src="images/tw.JPG" alt="" class="img-social">
                                    Twitter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
</aside>
</body>
</html>