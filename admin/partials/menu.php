<?php include('../config/constants.php');?>
<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OmniFood - Home Page</title>
    <link rel="stylesheet" type="text/css" href="../vendor/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css/grid.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css/animate.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<div class="menu text-center">
        <div class=wrapper>
        <div class="logo">
                <a href="#" title="Logo">
                    <img src="../images/logo.png" alt="Restaurant Logo" height=100px class="img-responsive">
                </a>
                <br>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-admin.php">Admin</a></li>
                <li><a href="manage-category.php">Catagory</a></li>
                <li><a href="manage-food.php">Food</a></li>
                <li><a href="manage-order.php">Order</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>

        </div>

    </div>