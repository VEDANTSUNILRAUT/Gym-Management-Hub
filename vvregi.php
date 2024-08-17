<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Your CSS styles go here -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="navbar">
      <!-- Your navbar links go here -->
    </div>

    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cattle_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
if (isset($_POST['submit'])) {
  $name = $conn->real_escape_string($_POST['name']);
  $address = $conn->real_escape_string($_POST['address']);
  $contact = $conn->real_escape_string($_POST['contact']);
  $email = $conn->real_escape_string($_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $cattle_age = $conn->real_escape_string($_POST['cattle-age']);
  $price = $conn->real_escape_string($_POST['price']);
  $repeat_password = $_POST['repeat_password'];

  // Handle the uploaded file
  $image = $_FILES['image-upload']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image-upload"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if(in_array($imageFileType,$extensions_arr) ){
    // Upload file
    if(move_uploaded_file($_FILES['image-upload']['tmp_name'],$target_file)){
      // Check if passwords match
      if ($_POST['password'] != $repeat_password) {
        echo "<div class='alert alert-danger'>Passwords do not match.</div>";
      } else {
        $sql = "INSERT INTO users (name, address, contact, email, password, cattle_age, price, image)
        VALUES ('$name', '$address', '$contact', '$email', '$password', '$cattle_age', '$price', '$image')";

        if ($conn->query($sql) === TRUE) {
          echo "<div class='alert alert-success'>You are registered successfully.</div>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    }
  }

}

$conn->close();
?>

    <form action="submit_form.php" method="post" enctype="multipart/form-data">
      <div class="container">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required />

        <label for="contact">Contact Number:</label>
        <input type="number" id="contact" name="contact" required />

        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />

        <label for="repeat_password">Repeat Password:</label>
        <input type="password" id="repeat_password" name="repeat_password" required />

        <label for="cattle-age">Age of Cattle:</label>
        <input type="number" id="cattle-age" name="cattle-age" required />

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required />

        <label for="image-upload">Image Upload:</label>
        <div class="upload-btn-wrapper">
          <button class="btn">Upload a file</button>
          <input
            type="file"
            name="image-upload"
            id="image-upload"
            accept="image/*"
            required
          />
        </div>

        <!-- <input type="submit" name="submit" value="Submit" /> -->
        <div class="form-btn" method="POST" action="vvregi.php">
                    <!-- <a href="msg.php"> -->
                    <input type="submit" class="btn btn-primary" value="Register" name="submit" >
                    </a>
                </div>
      </div>
    </form>
    <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
  </div>
</div>
</body>
</html>
