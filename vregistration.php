<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      /* Style the input fields */
      input[type="text"],
      input[type="password"],
      input[type="email"],
      input[type="number"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: none;
        border-radius: 10px;
        box-sizing: border-box;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      /* Style the submit button */
      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      /* Style the container for inputs */
      .container {
        padding: 16px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        width: 50%;
        margin: 0 auto;
        margin-top: 50px;
      }

      /* Style the label */
      label {
        font-size: 20px;
        font-weight: bold;
      }

      /* Style the image upload button */
      .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
      }

      .btn {
        border: 2px solid gray;
        color: gray;
        background-color: white;
        padding: 8px 20px;
        border-radius: 8px;
        font-size: 20px;
        font-weight: bold;
      }

      .upload-btn-wrapper input[type="file"] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
      }

      /* Style the navbar */
      .navbar {
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top: 0;
        width: 100%;
      }

      /* Style the links inside the navbar */
      .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      /* Change the color of links on hover */
      .navbar a:hover {
        background-color: #ddd;
        color: black;
      }

      /* Add a color to the active/current link */
      .navbar a.active {
        background-color: #4caf50;
        color: white;
      }
    </style>
</head>
<body>
    
<div class="container">
    <?php
    // Your PHP code goes here
    ?>
    <form action="registration.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email:">
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
    <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
  </div>
</div>
</body>
</html>
