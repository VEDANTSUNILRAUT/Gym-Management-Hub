<?php
require("adminconn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* this is for body */
        body {
            color: white;
            margin: 0px;
            padding: 0px;
            background: url('img/bg.png');
        }

        /* this is for header. */
        header {
            /* border: 3px solid rgb(85, 255, 0); */
            padding: 3px 3px;
            margin: 3px 3px;
        }

        /*this is for left part of header. */
        .left {
            position: absolute;
            left: 7px;
            top: 7px;
            display: inline-block;
        }

        .left :hover {
            border: 3px solid orangered;
            padding: 5px;
            border-radius: 50%;
        }

        /*this is for center part of header. */
        .center {
            display:block;
            width: 35%;
            margin: 5px auto;
            /* border: 3px solid black; */
            border-radius: 8px;
        }
/* 
        .center:hover {
            border: 3px solid white;
        } */

        /*this is for right part of header. */
        .right {
            position: absolute;
            right: 15px;
            top: 11px;
            display: inline-block;
            /* border: 3px solid rgb(12, 5, 222); */
        }

        /*this is for the navbar */
        .navbar {
            /* overflow: auto; */

        }

        .navbar li {
            float: left;
            list-style: none;
        }

        .navbar li a {
            text-decoration: none;
            padding: 8px 8px;
            color: rgb(255, 255, 255);
        }

        .navbar li a:hover,
        .navbar li a:active {
            color: orangered;
            text-decoration: underline;
        }

        #text {
            color: aquamarine;
            text-align: center;
            font-family: monospace;
            font-size: large;
            float: right;
        }

        /*this is for Buttons. */
        .btn {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            padding: 5px 5px;
            margin: 5px 5px;
            border: 2px solid rgb(0, 0, 0);
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }

        .btn:hover {
            background-color: orangered;
        }

        .container {
            border: 2px solid white;
            margin: 106px 80px;
            display: block;
            padding: 60px;
            width: 28%;
            border-radius: 15px;
        }

        .container h1 {
            text-align: center;
            color: orangered;
        }

        .container:hover {
            font-size: 15px;
            border-color: orangered;
        }

        .form-group input {
            font-family: 'Baloo Bhai', cursive;
            text-align: center;
            display: block;
            width: 400px;
            padding: 1px;
            border: 2px solid black;
            margin: 11px auto;
            font-size: 25px;
            border-radius: 8px;
            color: black;
        }

        .form-btn {
            font-family: 'Baloo Bhai', cursive;
            text-align: center;
            display: block;
            width: 400px;
            padding: 1px;
            border: 2px solid black;
            margin: 11px auto;
            font-size: 25px;
            border-radius: 8px;
            color: black;
        }

        .container button {
            display: block;
            width: 74%;
            margin: 20px auto;
        }

        .img {
            padding: 2px 2px;
            margin: 2px 2px;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="left">
        <img src="img/vvv.gif" width="100px" height="100px">
        </div>
        <div class="center">
            <ul class="navbar">
            <li><a href="main.php #Home" class="active">Home</a></li>
                <li><a href="main.php #About">About Us</a></li>
                <li><a href="main.php #Trainer">Trainer</a></li>
                <li><a href="main.php #Con">Contact Us</a></li>
            </ul>
        </div>
        <div class="right">
            <!-- <button class="btn"><a href="registration.php">Registration</a></button>
            <button class="btn"><a href="login.php">Log In</a></button> -->
        </div>
    </header>

    <div class="container">
        <h1>
            <marquee>Admin Dashboard</marquee>
        </h1>
        <form method="post" action="adashboard.php">
            <div class="form-group">
                <input type="text" placeholder="Admin Name" name="AdminName">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" name="AdminPassword">
            </div>

            <button type="submit" name="Signin">Log In</button>
        
        </form>

    </div>
    <?php
    if (isset($_POST["Signin"])) {
        $query = "SELECT * FROM `admintable` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result)==1) 
        {
        session_start();
        header("Location: adminpanel.php");
        } 
        else {
            echo "<script>alert('Incorrect Password')</script>";
        }
    }
    ?>
</body>

</html>