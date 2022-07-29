<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="About_us.css" type="text/css">
    <title>About Us</title>
</head>
<div>
    <header>
        <a href="index.html">
        <img src="Logo.png" alt="Zero Carbon Logo"></a>
        <ul id="right-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="calculation.html">Calculate</a></li>
            <li><a href="https://medium.com/@20it128/zero-carbon-81cc58ad19b0">Blog</a></li>
            <li><a href="About_us.html">About us</a></li>
            <li><a href=""><i class="bi bi-person-check"></i></a></li>
        </ul>
    </header>
</div>

<body>
    <div class="reviews">
        <h1>Our Team:</h1>
    </div>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="TestimonialsBox">
                        <img src="Devanshi.jpg">
                        <div class="content">
                            <p><strong>Shah Devanshi</strong></p>
                            <p>Website Developer</p>
                            <p>I am a student persuing B.Tech IT in Charusat University</p>
                            <div class="details">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="TestimonialsBox">
                        <img src="Shail.jpg">
                        <div class="content">
                            <p><strong>Shah Shail</strong></p>
                            <p>Website Developer</p>
                            <p>I am a student persuing B.Tech IT in Charusat University</p>
                            <div class="details">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="TestimonialsBox">
                        <img src="Rachit.jpeg">
                        <div class="content">
                            <p><strong>Shah Rachit</strong></p>
                            <p>Website Developer</p>
                            <p>I am a student persuing B.Tech IT in Charusat University</p>
                            <div class="details">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="TestimonialsBox">
                        <img src="Pratham.jpg">
                        <div class="content">
                            <p><strong>Patel Pratham</strong></p>
                            <p>Website Developer</p>
                            <p>I am a student persuing B.Tech IT in Charusat University</p>
                            <div class="details">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
    </section>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
        });
    </script>
    <br>
    <br>
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
                        <li>Calculate</li>
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