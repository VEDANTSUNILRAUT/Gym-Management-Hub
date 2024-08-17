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
            padding:5px;
            border-radius: 50%;
        }

        /*this is for center part of header. */
        .center {
            display: block;
            width: 35%;
            margin: 5px auto;
            /* border: 3px solid black; */
            border-radius: 8px;
        }

        /* .center:hover {
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
            color: aliceblue;
        }

        .container .divbtn1 {
            display: contents;
            width: 50%;
            height: 25%;
            margin: 20px auto;
           
        }

        .img {
            padding: 2px 2px;
            margin: 2px 2px;
        }
        /* for container button only */
        .divbtn1 {
        height: 260px;
        margin-left: 90px;
        margin-top: -58px;
        }

        #btn1 {
        width: 150px;
        height: 40px;
        font-size: 20px;
        border: 2px solid black;
        border-radius: 10px;
        background: #278ab1;
        margin: 50px 30px 50px 30px;
        animation: slideright 3s ease forwards;
        animation-delay: 0s;
        box-shadow: 0 0 5px rgb(124, 27, 154),
            0 0 2px rgb(124, 27, 154), 0 0 10px rgb(124, 27, 154);

        }

        .btn2 {
        width: 150px;
        height: 40px;
        font-size: 20px;
        border: 2px solid black;
        border-radius: 10px;
        background: #278ab1;
        margin: 50px 30px 50px 30px;
        animation: slideLeft 3s ease forwards;
        animation-delay: 0s;
        box-shadow: 0 0 5px rgb(124, 27, 154),
            0 0 2px rgb(124, 27, 154), 0 0 10px rgb(124, 27, 154);
        }

         #btn1:hover {
        color: white;
        box-shadow: 0 0 5px rgb(124, 27, 154),
            0 0 25px rgb(124, 27, 154), 0 0 10px rgb(124, 27, 154),
            0 0 10px rgb(124, 27, 154), 0 0 30px rgb(124, 27, 154);
        }

        .btn2:hover {
        color: white;
        box-shadow: 0 0 5px rgb(124, 27, 154),
            0 0 25px rgb(124, 27, 154), 0 0 10px rgb(124, 27, 154),
            0 0 10px rgb(124, 27, 154), 0 0 30px rgb(124, 27, 154);
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
            <!-- <button class="btn"><a href="registration.php">User Registration</a></button>
            <button class="btn"><a href="login.php">User Login</a></button> -->
        </div>
    </header>

    <div class="container">
    <h1><marquee>User Dashboard</marquee></h1>
        <div class="divbtn1">
            <button id="btn1"><a href="registration.php" style="color: #000; text-decoration: none;">Registration</a></button>
            <button class="btn2"><a href="login.php" style="color: #000; text-decoration: none;"class="downCV">Login</a></button>
        </div>
    </div>
</body>
