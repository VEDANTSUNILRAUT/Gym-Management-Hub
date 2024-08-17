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
</head>
<style>
    * {
        margin: 0px;
        padding: 0%;
        box-sizing: border-box;
        scroll-behavior: smooth;
        overflow-x: hidden;
        font-family: 'Foldit', cursive;
        font-family: 'Konkhmer Sleokchher', cursive;
        font-family: 'Mooli', sans-serif;

    }

    body {
       background: url('img/bg.png');
        /* background-color: #000000; */
        color: #ffffff;
    }

    .curser {
        width: 15px;
        height: 15px;
        mix-blend-mode: difference;
        background-color: rgb(255, 255, 255);
        box-shadow: 0 0 10px rgb(237, 237, 237);
        border-radius: 50%;
        position: absolute;
        transition: all linear 0.2s;
    }

    ::-webkit-scrollbar {
        height: 0px;
        width: .2rem;
    }

    ::-webkit-scrollbar-track {
        background: rgb(0, 0, 0);
    }

    ::-webkit-scrollbar-thumb {
        background-color: rgb(14, 159, 169);
        border-radius: 20px;
    }

    #header {
        width: 100%;
        height: 30%;
        background-size: cover;
        background-position: center;
    }

    #container {
        padding: 20px 5%;

    }

    #logo {
        width: 200px;
        height: 130px;
        opacity: 1;
        margin-left: 55px;
        animation: slideright 1s ease forwards;
        animation-delay: 0.5s;

    }

    #logo:hover {
        border: 3px solid #57bcd7;
        padding: 10px;
        border-radius: 100%;
    }

    nav {
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;

    }

    ul li {
        list-style: none;
        text-decoration: none;
        display: inline-flex;
        margin: 10px 20px;
        justify-content: space-between;
        animation: slideTop 1s ease forwards;
        animation-delay: 0.5s;
    }

    ul li a {
        font-weight: 900;
        text-decoration: none;
        color: #08bfdb;
        font-size: 20px;
        position: relative;
        transition: all 0.1s ease-in-out;
    }

    ul li a:hover {
        color: #28ceb5;
        transform: translate(0px, -3px);

    }

    #GName {
        margin-top: 130px;
    }

    #Mo1 {
        height: 40px;
        font-size: 25px;
        display: flex;
        justify-content: center;
        width: 700px;
    }

    /* fix */

    .head-text {
        padding: 0% 10%;
        width: 100%;
        height: 80vh;
        align-items: center;
        background: url(img/v.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        background-size: 2250px 1000px;
        background-position-x: -275px;
        /* background-size: 1000px 1200px;
  background-position-x: 400px; */
        background-position-y: -29px;
        /* background-size:1000px 1200px;
    background-position-x:400px; */

        overflow-y: hidden;
    }

    .divbtn1 {
        height: 260px;
        margin-left: -4px;
        margin-top: -48px;

    }

    #btn1 {
        width: 150px;
        height: 40px;
        font-size: 20px;
        border: 2px solid black;
        border-radius: 10px;
        background: #278ab1;
        margin: 100px 0 0 233px;
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
        margin: 100px 0 0 30px;
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

    #About {
        background: url(img/about-fitness-edited.png) no-repeat;
        /* background-position-x: 0%;
    background-position-y: 0%;
    background-size: auto; */
        background-size: cover;
        background-position: center;
        background-size: 500px 500px;
        background-position-x: 1000px;
        background-position-y: 70px;

    }

    #secContainter {
        margin-top: -18px;
        width: 96vw;
        height: 100vh;
        padding: 10% 2%;
        overflow-y: hidden;
    }

    #img2 {
        border: #000;
        border-radius: 5%;
        height: 45vh;
        width: 250px;
        animation: slideTop 6s ease forwards;
        animation-delay: 0s;

    }

    #Parabout {
        padding-left: 30px;
        width: 50%;
        font-size: 20px;
        height: 500px;
    }

    /* traner section */
    #Trainer {
        height: 100vh;
    }

    .trann {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;

    }

    .trann img {
        border-radius: 30px;
        height: 300px;
        width: 300px;
        margin-left: 40px;
        margin-top: 50px;
        box-shadow: 0 0 5px cyan,
            0 0 25px rgb(12, 41, 41), 0 0 10px rgb(255, 17, 0),
            0 0 10px rgb(29, 50, 50), 0 0 30px rgb(255, 0, 0);
    }

    .tran1 {
        margin-top: 60px;
        width: 400px;
    }

    .tran2 {
        margin-top: 60px;
        width: 400px;
    }

    .tran3 {
        margin-top: 60px;
        width: 400px;
    }

    #Plans {
        height: 100vh;
        overflow-y: hidden;
    }

    #planss {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
        height: 500px;
    }

    #planss div {
        background-color: transparent;
        color: white;
        border: 3px solid rgb(86, 32, 32);
        border-radius: 50px;
        margin-top: 60px;
        width: 350px;
        height: 400px;
    }

    .img1 {
        border: 2px solid rgb(0, 0, 0);
        border-radius: 30px;
        height: 258px;
    }

    .img2 {
        border: 2px solid rgb(0, 0, 0);
        border-radius: 30px;
        height: 258px;
        width: 249px;
    }

    .img3 {
        border: 2px solid black;
        border-radius: 30px;
        height: 258px;
        width: 249px;
        overflow-y: hidden;

    }

    #planss div:hover {
        color: #278ab1;
        border: 0px;

        overflow-y: hidden;
        box-shadow: 0 0 5px rgb(85, 25, 124),
            0 0 25px rgb(85, 25, 124), 0 0 20px rgb(85, 25, 124),
            0 0 100px rgb(85, 25, 124), 0 0 20px rgb(85, 25, 124);
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
    .vv{
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

<body>
    <!-- CURSER -->
    <div>
        <h1 class="curser"></h1>
    </div>
    <!-- Navigation bar of the portfolio -->
    <div id="header">
        <div id="container">
            <nav>
                <img src="img/vvv.gif" alt="not load" id="logo">
                <ul>
                    <li><a class="active" href="#Home">Home</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#Trainer">Trainer</a></li>
                    <li><a href="#Plans">Plans</a></li>
                    <li><a href="#Con">Contact</a></li>
                    <li><a href="bmi\bmi.html">BMI Calculater</a></li>

        </div>
        </nav>

    </div>
    </div>
    <section id="Home">
        <div class="head-text">
            <div id="GName">
                <h1 style="font-size: 60px;color: rgb(126, 47, 47);">BRICK FIT GYM</h1>
                <p id="Mo1"><span class="Motion" style="color: goldenrod;"></span>></p>
            </div>

            <div class="divbtn1"><button id="btn1"><a href="index1.php" style="color: #000; text-decoration: none;">Sign
                        Up</a></button>
            </div>
        </div>
    </section>
    <section id="About">
        <div id="secContainter">
            <!-- <img src="build.jpg" alt="image is not load" id="img2" > -->
            <p id="Parabout"><span style="font-size: 40px; color: rgb(221, 100, 98);"><b>About US</b></span><br><b><span
                        style="font-size: 19px;"> Best Gym In City With Advance Instrument</span></b><br><br>
                <span style="font-size: 20px;">Hello EveryOne !</span> <br>
                My Name is <b class="vv">STEVE ROGERS</b>.<br>A certified nutrition and fitness consultant, who offers personalized diet
                plans
                and guidance tothe members.The club has a team of qualified and experienced trainers who
                provide general and personal
                training sessions, as well as physiotherapy and counselling. The club also has a cafe where members can
                enjoy healthy and delicious <br>
                <b class="vv">BRICK FIT CLUB</b> is more than just a gym; it is a community of fitness enthusiasts
                who share a
                common passion and vision. It is a place where one can achieve their fitness goals and enjoy their
                journey. It is a
                place where one can find their doctor in the gym. <br>
                <span style="font-size: 30px;">Address</span><br>
                ==> Sipna Town ,Badnera Road , Nemani Godown , Amravati.
                <br> Let's Contact us By below links <a href="#Trainer"><i class='bx bx-down-arrow-alt'
                        style="font-size:40px; margin-top: 4px;color: white;"></i></a>
            </p>
        </div><br>
    </section>
    <section id="Trainer">
        <h1 style="font-size: 70px;">
            <center>Trainers <span style="color: aquamarine;">Of</span> Gym</center>
        </h1>
        <div class="trann">
            <div class="tran1">
                <div>
                    <img src="img\rock.jpg" alt="image not Load">
                    <center>
                        <p style="font-size: 30px;"><b>ROCK</b></p>
                    </center>
                </div>

            </div>
            <div class="tran2">
                <div>
                    <img src="img\cena.jpg" alt="image not Load">
                    <center>
                        <p style="font-size: 30px;"><b>JOHN CENA</b></p>
                    </center>
                </div>
            </div>
            <div class="tran3">
                <div>
                    <img src="img\cbum.jpg" alt="image not Load">
                    <center>
                        <p style="font-size: 30px;"><b>C BUM</b></p>
                    </center>
                </div>

            </div>
        </div>
    </section>
    <section id="Plans">
        <h1 style="font-size: 70px;">
            <center>Plans <span style="color: aquamarine;">Of</span>Gym</center>
        </h1>
        <div id="planss">
            <div class="">
                <center style="font-size: 40px;"><a href="PLANS\1m.html">Monthly Plan</a>
                    <br>
                    <!-- <img class="img1" src="img\500rs.jpg" alt=" not load"> -->
                    <br><span style="color: gold;font-size: 60px; margin-top: 40px;"></span><span
                        style="font-size: 40px; color: brown;"> <b>500 Rs/Month</span></b>
                </center>
            </div>

            <div>
                <center style="font-size: 40px;"><a href="PLANS\3m.html">3 Month Plan</a>
                    <br>
                    <!-- <img class="img2" src="img\frame.png" alt=" not load"> -->
                    <br><span style="color: goldenrod;font-size: 60px; margin-top: 40px;"></span><span
                        style="font-size: 40px; color: brown;"> <b> 1000 Rs/Month</span></b>
                </center>
            </div>

            <div>
                <center style="font-size: 40px;"><a href="PLANS\1y.html">Year Plan</a>
                    <br>
                    <!-- <img class="img3" src="img\frame.png" alt=" not load"> -->
                    <br><span style="color: rgb(255, 230, 0);font-size: 60px; margin-top: 40px;"></span><span
                        style="font-size: 40px; color: brown;"> <b>1200 Rs/Year</span></b>
                </center>
            </div>
        </div>
        <div id="Con">
            <div class="linkes">

                <center>
                    <a href="https://www.facebook.com/profile.php?id=61553419311614" target="_blank"><i
                            class='bx bxl-facebook-circle'></i></a>
                    <a href="https://instagram.com/brick_fit_club?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i
                            class='bx bxl-instagram'></i></a>
                    <a href="https://youtube.com/@BrickFitClub-ei9lq?feature=shared" target="_blank"><i
                            class='bx bxl-youtube'></i></a>
                    <a href="https://chat.whatsapp.com/Hb4QtCqbrvY50g1RMgBmix"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#header"><i class='bx bx-up-arrow-alt'
                            style="color: white;font-size: 40px;justify-content: right; "></i></a>
                </center>

            </div>
        </div>

    </section>
    <script>
        const main = document.querySelector("body");
        const crsr = document.querySelector(".curser");
        main.addEventListener("mousemove", function (dets) {
            crsr.style.left = dets.x + "px";
            crsr.style.top = dets.y + "px";
        });
        var typed2 = new Typed('.Motion', {
            strings: ['Never Give Up', 'Try again,Falied Better','Sore today. Strong tomorrow'],
            typeSpeed: 100,
            backSpeed: 10,
            loop: true
        });
    </script>

</body>

</html>