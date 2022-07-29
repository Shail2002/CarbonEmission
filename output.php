<?php
        $conn = mysqli_connect("localhost", "root", "", "Project-Charley");
        $Name_of_building =  $_POST['Name_of_building'];
        $Name_of_city =  $_POST['Name_of_city'];
        $Name_of_state = $_POST['Name_of_state'];
        $Total_kg_of_cement =  $_POST['Total_kg_of_cement'];
        $Total_number_of_bricks =  $_POST['Total_number_of_bricks'];
        $Total_kg_of_concrete =  $_POST['Total_kg_of_concrete'];
        $Total_number_of_tiles =  $_POST['Total_number_of_tiles'];
        $Total_kg_of_wood =  $_POST['Total_kg_of_wood'];
        $Total_kg_of_glass =  $_POST['Total_kg_of_glass'];
        $Total_number_of_workers =  $_POST['Total_number_of_workers'];
        $Total_liters_of_fuel =  $_POST['Total_liters_of_fuel'];
        $sql = "INSERT INTO calculation VALUES ('$Name_of_building','$Name_of_city',
            '$Name_of_state','$Total_kg_of_cement','$Total_number_of_bricks','$Total_kg_of_concrete','$Total_number_of_tiles','$Total_kg_of_wood','$Total_kg_of_glass','$Total_number_of_workers','$Total_liters_of_fuel')";
        if(mysqli_query($conn, $sql)){

            echo ("\n$Name_of_building\n");
        }
        mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero carbon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="index.css" type="text/css">
    <script src="calculation.php"></script>
</head>
<body>
    <div>
        <header>
            <a href="index.html">
            <img src="Logo.png" alt="Zero Carbon Logo"></a>
            <ul id="right-nav">
                <li><a href="">Home</a></li>
                <li><a href="calculation.php">Calculate</a></li>
                <li><a href="https://medium.com/@20it128/zero-carbon-81cc58ad19b0">Blog</a></li>
                <li><a href="About_us.html">About us</a></li>
                <li><a href=""><i class="bi bi-person-check"></i></a></li>
            </ul>
        </header>
    </div>
    <div class="con">
        <p>Result: <br /><span id="result"></span></p>
    </div>
<div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"> <span> Zero </span> Carbon </h1>
                <p>
                    Zero Carbon is a blog created with the goal of calculating the amount of carbon released in a
                    certain country and city as a result of various activities. So that the individual doing the
                    calculations is aware that he or she should review it in order to reduce carbon emission.
                </p>
                <div class="contact">
                    <span><i class="bi bi-telephone-forward"></i> &nbsp; 9724784649</span>
                    <span><i class="bi bi-envelope"></i> &nbsp;shailshah1012@gmail.com</span>
                </div>
                <div class="socials">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <a href="index.html">
                        <li>Home</li>
                    </a>
                    <a href="calculation.html">
                        <li>Calulation</li>
                    </a>
                    <a href="https://medium.com/@20it128/zero-carbon-81cc58ad19b0">
                        <li>Blog</li>
                    </a>
                    <a href="About_us.html">
                        <li>About Us</li>
                    </a>    
                </ul> 
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <br>
                <form action="" method="post">
                    <input type="email" name="email" class="text-input contact" placeholder="Your email address.."><br>
                    <textarea name="message" class="text-input contact" placeholder="Your message.."></textarea><br>
                    <input type="submit" value="Send">
                    </input>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2022 by Zero Carbon
        </div>
    </div>
</body>
</html>
