<?php ?>

<!DOCTYPE html>
<html>

<head>
    <title>GreenLeaf Elektronics | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="welcome.php">GreenLeaf Elektronics</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="aboutus.php">About Us</a></li>
                 <!-- <li class=""><a href="products.php">Products</a></li> -->
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="products.php">All Products</a></li>
                        <li><a href="mostvistedproducts.php">Most Visited Products</a></li>
                        <li><a href="recentlyvisitedproducts.php">Last Visited Products</a></li>
                    </ul>
                </li>
                <li class=""><a href="news.php">News</a></li>
                <li class=""><a href="contacts.php">Our Contacts</a></li>
                <li class="active"><a href="users.php">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="reset-password.php"><span class="glyphicon glyphicon-user"></span> Reset Password</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="row" style="margin-top: 60px;">
        <div class="container" style="padding: 20px; background-color:whitesmoke; border: 3px solid  #bbb ">
            <div class="row-style-login-page-pannel">
                <div class="col-sm-9 col-xs-12">
                    <h2><b><u>USERS</u></b></h2>
                </div>

            </div>
        </div>
    </div>
    <br /><br />
    <section class="main-section alabaster" id="users">
        <div class="container fullsize">
            <br />
            <br />
            <center>
                <a class="link animated fadeInUp delay-2s servicelink" href="register.php">ADD USER</a>&nbsp;&nbsp;&nbsp;
                <a class="link animated fadeInDown delay-1s servicelink" href="searchuser.php">SEARCH USER</a>&nbsp;&nbsp;&nbsp;
                <a class="link animated fadeInDown delay-1s servicelink" href="fetchAllUsers.php">CURL USERS</a>&nbsp;&nbsp;&nbsp;
            </center>
        </div>
    </section>
</body>

</html>