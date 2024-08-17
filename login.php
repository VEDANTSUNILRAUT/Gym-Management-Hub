<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: white;
            margin: 0px;
            padding: 0px;
            background:url(img/bg.png)
        }

        header {
            /* border: 3px solid rgb(85, 255, 0); */
            padding: 3px 3px;
            margin: 3px 3px;
        }

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

        .center {
            display: block;
            width: 35%;
            margin: 5px auto;
            /* border: 3px solid black; */
            border-radius: 8px;
        }

        /* .center:hover {
            border: 3px solid orangered;
        } */

        .right {
            position: absolute;
            right: 15px;
            top: 11px;
            display: inline-block;
        }
        .right:hover{
            border: 3px solid orangered;
           border-radius: 8px;
        }

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
            <!-- <h3 id="text">VED FITNESS</h3> -->
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
            <!-- <button class="btn"><a href="index.php">Home</a></button>
            <button class="btn">Feedback</button> -->
        </div>
    </header>
    
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM gymtable WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result,MYSQLI_BOTH);
            // Now you can use $user for further processing
            if ($user) {
                echo "<h1>You are login Succesfully.</h1>";
                    // session_start();
                    // $_SESSION["user"] = "yes";
                    // header("Location: msg1.php");
                    die();
                
                //     echo "<div class='alert alert-danger'>Password does not match</div>";
                
                // echo "<div class='alert alert-danger'>Email is present in the database</div>";

            }else{
                echo "<div class='alert alert-danger'>Email not in the database</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" >
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
</body>

</html>