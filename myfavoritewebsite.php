<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    # code...
    header("location: ./MyLoginSystem/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome-Food-Services</title>
    <link rel="stylesheet" href="mycss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="images/awesome.webp" type="image/jpeg">
    <style>
        .dropbtn {
            background-color: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgb(99, 240, 81);
            color: black;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: black;
            /* background-color: black; */
            color: white;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: orange;
            color: white;
        }
    </style>
</head>

<body>
    <div id="navigationid">
        <div id="logoweb">
            <img src="images/awesome.webp" alt="error">

        </div>
        <ul>
            <li class="litem1"><a href="#">Home</a></li>
            <li class="litem1"><a href="#related">Relaed website</a></li>
            <li class="litem1"><a href="#myservice">About Services</a></li>
            <li class="litem1"><a href="#vdo">Our all info</a></li>
            <li class="litem1"><a href="../myPortfolio/index.html" target="_blank">About Developers</a></li>
            <li class="litem1"><a href="./food-selection.html" target="_blank">Items/Menu</a></li>
        </ul>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="dropdown">
            <button class="dropbtn"><?php echo $_SESSION['username'] ?></button>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="./food-selection.html">Menu/Payment</a>
                <!-- <a href="#">SignOut</a> -->
                <a href="#">List</a>
                <a href="#">Acoount History</a>
                <a href="/project-ITW2/MyFoodWebsite/MyLoginSystem/logout.php">Logout</a>
                <a href="#">SignOut</a>
            </div>
        </div>
    </div>
    <section id="my12" style="background: url(images/menu_image.jpg) no-repeat center center/cover;">
        <h1 class="h-prm">Thanks <?php echo $_SESSION['username'] ?> for opening this service</h1>
        <p style="font-family: cursive;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eum obcaecati dolores fuga veniam vel
            vitae dolorem provident similique vero, voluptas, ipsa quae? Beatae sapiente odit voluptates architecto,
            blanditiis consequuntur odio nihil ipsam laboriosam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore iste odio beatae non incidunt velit
            adipisci, natus optio blanditiis id alias placeat, dolor earum temporibus provident, nobis soluta sunt
            sapiente.</p>

    </section>

    <div style=" border-radius: 2px solid black; margin-top: -120px; padding: 35px 28px;">
        <center> <button id=" btn4321" onclick="toggleHide()"><strong id="spu" style="background-color: rgb(255, 104, 104);">Click To See Digital Clock </strong></button></center>
        <br>
        <br>
        <br>
        <br>
        <div class="container7676" id="para21" style="padding: 28px;display: none; background-color: rgb(143, 255, 79); ">
            <center style="color: orangered; font-size: 65px;">Digital Clock</center>
            Current time is <span id="time"></span>
            <!-- <center style="color: rgb(0, 255, 34); font-size: 45px;"">I have added this clock bcz i want to give more features to our customers</center> -->
        </div>
        <!-- <button></button> -->
    </div>
    <h2 class=" myservice-h2">Our Services</h2>
    <section id="myservice">
        <div class="serbo">
            <img src="images/food_viva12.jfif" alt="">
            <h2 class="h-seco" style="text-align: center;">Order services</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut ab voluptatibus impedit magnam.
            </p>
        </div>
        <div class="serbo">
            <img src="images/food_viva14.jfif" alt="">
            <h2 class="h-seco" style="text-align: center;">Order services</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut ab voluptatibus impedit magnam.
            </p>
        </div>

    </section>
    <section class="customer-req" id="related">
        <h1 class="h-prm center">Customers Choice</h1>
        <div id="custom">
            <div class="custom-it">
                <img src="images/food_viva5.webp" alt="error">
                <img src="images/food_viva6.webp" alt="error">
                <img src="images/food_viva7.webp" alt="error">
                <img src="images/food_viva9.jpg" alt="error">
            </div>
        </div>

    </section>
    <div style="background-color: rgb(247, 202, 120);" id="vdo">

        <center><iframe width="560" height="315" src="https://www.youtube.com/embed/diUDjNwZ8Lg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>
    </div>
</body>
<script src="myjs.js"></script>

</html>