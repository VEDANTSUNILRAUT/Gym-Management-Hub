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

        .center:hover {
            /* border: 3px solid white; */
        }
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
        /* this is for the form container. */
        .container {
            border: 2px solid white;
            margin: 106px 80px;
            display: block;
            padding: 60px;
            width: 35%;
            border-radius: 15px;
        }

        .container h1 {
            text-align: center;
            color: orangered;
        }
        .container:hover
        {
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
            color: Black;
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
            <button class="btn" ><a href="main.php">Home</a></button>
            <button class="btn"><a href="main.php #Con">Connect Us</a></button>
        </div>
    </header>

    <div class="container">
            <?php
            if (isset($_POST["submit"])) {
               $fullName = $_POST["fullname"];
               $email = $_POST["email"];
               $password = $_POST["password"];
               $passwordRepeat = $_POST["repeat_password"];
               $plan = $_POST["plan"];
               $address = $_POST["address"];
               $state = $_POST["state"];
               $phonenumber = $_POST["phonenumber"];
    
               
               $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
               $errors = array();
               
               if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat) OR empty($plan) OR empty($address) OR empty($state) OR empty($phonenumber)) {
                array_push($errors,"All fields are required");
               }
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
               }
               if (strlen($password)<8) {
                array_push($errors,"Password must be at least 8 charactes long");
               }
               if ($password!==$passwordRepeat) {
                array_push($errors,"Password does not match");
               }
               require_once "database.php";
               //it check email for one user for one email.
               $sql = "SELECT * FROM gymtable WHERE email = '$email'";
               $result = mysqli_query($conn, $sql);
               $rowCount = mysqli_num_rows($result);
               if ($rowCount > 0) {
                array_push($errors, "Email already exists!");
               }
             
               if (count($errors)>0) {
                foreach ($errors as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
               }else{
                
                $sql = "INSERT INTO gymtable (fullName, email, password ,plan,address,state,phonenumber) VALUES ( ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sssissi",$fullName, $email, $password ,$plan,$address,$state,$phonenumber);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                        // session_start();
                        // $_SESSION["user"] = "yes";
                        // header("Location: msg.php");
                        die();
                }else{
                    die("Something went wrong");
                }
               }
            }
            ?>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
                </div>
                <div class="form-group">
                    <input type="emamil" class="form-control" name="email" placeholder="Email:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="plan" placeholder="Plan(In Month):">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="FULL address : ">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="state" placeholder="state : ">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phonenumber" placeholder="phonenumber: ">
                </div>
                
    
                <div class="form-btn" method="POST" action="registration.php">
                    <!-- <a href="msg.php"> -->
                    <input type="submit" class="btn btn-primary" value="Register" name="submit" >
                    </a>
                </div>
                
            </form>
            <div>
            <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
          </div>
        </div>
</body>

</html>