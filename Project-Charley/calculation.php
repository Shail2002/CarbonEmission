<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="calculation.css" />
    <script src="calculation.js" defer></script>
    <title>Calculation</title>
  </head>
  <body>
    <div>
      <header>
        <a href="index.html">
            <img src="Logo.png" alt="Zero Carbon Logo"></a>
          <ul id="right-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="calculation.php">Calculate</a></li>
              <li><a href="https://medium.com/@20it128/zero-carbon-81cc58ad19b0">Blog</a></li>
              <li><a href="About_us.php">About us</a></li>
              <li><a href=""><i class="bi bi-person-check"></i></a></li>
          </ul>
      </header>
  </div>
    <div class="calculation">
      <div class="heading">
        <h1>Calculation:</h1>
      </div>
      <div class="form-calculate">
        <form action="output.php" method="post" class="form-edit">
          <label for="Name_of_building">Name Of Building:</label> <br />
          <input type="text" name="Name_of_building" required/> <br />
          <label for="Name_of_city">Name Of City:</label> <br />
          <input type="text" name="Name_of_city" required/> <br />
          <label for="Name_of_state">Name Of State:</label> <br />
          <input type="text" name="Name_of_state" required/> <br />
          <label for="Total_kg_of_cement">Total KG Of Cement Used:</label>
          <br />
          <input type="text" id="cement" name="Total_kg_of_cement" required/> <br />
          <label for="Total_number_of_bricks">Total Number of Bricks used:</label>
          <br />
          <input type="text" id="bricks" name="Total_number_of_bricks" required/> <br />
          <label for="Total_kg_of_concrete">Total KG of concrete used:</label>
          <br />
          <input type="text" id="concrete" name="Total_kg_of_concrete" required/> <br />
          <label for="Total_number_of_tiles">Total Number of tiles used:</label>
          <br />
          <input type="text" id="tiles" name="Total_kg_of_wood" required/> <br />
          <label for="Total_kg_of_glass">Total KG of glass used:</label>
          <br />
          <input type="text" id="glass" name="Total_kg_of_glass" required/> <br />
          <input type="button" value="submit" onclick="multiplyBy()" />
        </form>
    </div>
      </div>
    </div>
    <div class="results">
      <br>
      <h1 class="header">Results Of Carboon Emission:</h1>
      <div class="output">
        <p class="heading1">Total Caboon Emission By Using Cement:</p>
        <span class="sample" id="result"></span>KgCo2
        <p class="heading1">Total Caboon Emission By Using Bricks:</p>
        <span class="sample" id="result1"></span>KgCo2
        <p class="heading1">Total Caboon Emission By Using Concrete:</p>
        <span class="sample" id="result2"></span>KgCo2
        <p class="heading1">Total Caboon Emission By Using Tiles:</p>
        <span class="sample" id="result3"></span>KgCo2
        <p class="heading1">Total Caboon Emission By Using Glass:</p>
        <span class="sample" id="result4"></span>KgCo2
      </div>
    </div>
    <div class="knowmore">
      <form action="KnowMore.php" method="post">
      <h1 class="header">Let's Know More:</h1>
      <input type="submit" value="submit">
      </form>
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