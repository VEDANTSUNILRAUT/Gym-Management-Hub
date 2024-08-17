<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="margin:50px;">
    <h1>LIST OF USERS.</h1>
    <br>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>FULLNAME</th>
            <th>EMAIL</th>
            <th>PLAN</th>
            <th>ADDRESS</th>
            <th>STATE</th>
            <th>PHONE No.</th>
        </thead>
        <tbody>
            <?php
            $hostName = "localhost";
            $dbUser = "root";
            $dbPassword = "";
            $dbName = "gymdatabase";
            $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

            $sql = "SELECT * FROM `gymtable`";
            $result = mysqli_query($conn, $sql);

            $num = mysqli_num_rows($result);
            echo $num;
            echo ":entrys found in the database.<br>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo 
             "<tr>
              <td>".$row["id"] ."</td>
              <td>".$row["fullname"] ."</td>
              <td>" .$row["email"] ."</td>
              <td>" .$row["plan"] . "</td>
              <td>".$row["address"] ."</td>
              <td>" .$row["state"] ."</td>
              <td>".$row["phonenumber"]."</td>
              </tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>