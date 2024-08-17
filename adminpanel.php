<!-- <?php session_start(); ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gym Fitness</title>
  <!-- <link rel="stylesheet" href="index.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Foldit:wght@200;500;900&family=Konkhmer+Sleokchher&family=Mooli&display=swap"
    rel="stylesheet">
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Admin Panel</title>
  <style>
    body {
      margin: 0px;
      background: url(img/bg.png);
    }

    .header {
      font-family: poppins;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 60px;
      background-color: skyblue;
    }

    div.header button {
      background-color: lightseagreen;
      font-size: 15px;
      font-weight: 550;
      padding: 8px 12pxs;
      border: 2px solid black;
      border-radius: 5px;

    }

    .bb {
      padding: 6px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 80%;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .profile-card {
      width: 500px;
      height: 600px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    .profile-image {
      width: 100%;
      height: 50%;
      object-fit: cover;
    }

    .profile-info {
      padding: 20px;
      text-align: center;
    }

    .profile-name {
      font-size: 24px;
      font-weight: bold;
      color: orangered;
      margin-bottom: 10px;
    }

    .profile-role {
      font-size: 18px;
      font-weight: normal;
      color: rgb(144 0 230);
      margin-bottom: 20px;
    }

    .profile-bio {
      font-size: 16px;
      font-weight: normal;
      color: black;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    .profile-social {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #f0f0f0;
      margin: 0 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-decoration: none;
    }

    .social-link:hover {
      background-color: #e0e0e0;
    }

    .social-link i {
      font-size: 20px;
      color: #333;
    }

    .linkes {
      height: 161px;
      background: #1f051b;

    }

    .linkes a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      /* width: 35px;
    height: 35px; */
      border: 2px solid rgb(39, 138, 177);
      border-radius: 10px;
      background: transparent;
      color: #278ab1;
      font-size: 30px;
      margin: 8px;
      margin-top: 33px;
      margin-left: 30px;
      text-decoration: none;
      scroll-behavior: smooth;
      overflow: hidden;
      animation: slideLeft 1s ease forwards;
      animation-delay: 0s;
      box-shadow: 0 0 2px cyan,
        0 0 6px cyan, 0 0 0px cyan;
    }

    .vv {
      color: rgb(126, 47, 47);
    }

    @keyframes slideLeft {
      0% {
        transform: translateX(100px);
        opacity: 0;
      }

      100% {
        transform: translateX(0px);
        opacity: 1;
      }
    }

    @keyframes slideright {
      0% {
        transform: translateX(-100px);
        opacity: 0;
      }

      100% {
        transform: translateX(0px);
        opacity: 1;
      }
    }

    @keyframes slideTop {
      0% {
        transform: translateY(-100px);
        opacity: 0;
      }

      100% {
        transform: translateY(0px);
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <div class="header">
    <h1>
      <marquee>WELCOME STEVE ROGER</marquee>
    </h1>
    <form>
      <button class="bb"><a href="dataview.php">VIEW DATA</a></button>
      <button class="bb"><a href="adashboard.php">LOG OUT</a></button>
    </form>
  </div>
  <div class="container">
    <div class="profile-card">
      <div class="profile-image">
        <img src="img/PP.jpg" alt="Gym admin photo" width="500px" height="730px">
      </div>
      <div class="profile-info">
        <h3 class="profile-name">STEVE ROGERS</h3>
        <p class="profile-role">GYM ADMIN</p>
        <p class="profile-bio">I am a fitness enthusiast and a certified trainer. I love to help people achieve their
          fitness goals and improve their health and well-being.</p>
        <div class="linkes">

          <center>
            <a href="https://www.facebook.com/profile.php?id=61553419311614https://www.bing.com/ck/a?!&&p=7576d996ddf23937JmltdHM9MTY5OTE0MjQwMCZpZ3VpZD0xNTQ0OTk3NC05OWI0LTYzZTEtMWE2Mi04YTc3OTgyZjYyM2UmaW5zaWQ9NTE5Nw&ptn=3&hsh=3&fclid=15449974-99b4-63e1-1a62-8a77982f623e&psq=steve+rogers+facebook&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL3B1YmxpYy9TdGV2ZS1Sb2dlcnM&ntb=1"
              target="_blank"><i class='bx bxl-facebook-circle'></i></a>
            <a href="https://www.instagram.com/official_captainamerica" target="_blank"><i
                class='bx bxl-instagram'></i></a>
           
          </center>

        </div>
      </div>
    </div>
  </div>

</body>

</html>