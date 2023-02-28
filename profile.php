<?php
Session_start();
if(isset($_SESSION['fristname']))
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Profile Card UI Design</title>-->

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="profile-card">
      <div class="image">
       <img class="img-profile rounded-circle"
       src="img/undraw_profile.svg"/>
      </div>

      <div class="text-data">
        <span class="name">CodingLab</span>
        <span class="job"> <?php
            echo $_SESSION["department"]
            ?>  </span>
      </div>

      <div class="media-buttons">
        <a href="#" style="background: #4267b2" class="link">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="#" style="background: #1da1f2" class="link">
          <i class="bx bxl-twitter"></i>
        </a>
        <a href="#" style="background: #e1306c" class="link">
          <i class="bx bxl-instagram"></i>
        </a>
        <a href="#" style="background: #ff0000" class="link">
          <i class="bx bxl-youtube"></i>
        </a>
      </div>

      <div class="buttons">
        <button class="button">Subscribe</button>
        <button class="button">Message</button>
      </div>

      <div class="analytics">
        <div class="data">
          <i class="bx bx-heart"></i>
          <span class="number">60k</span>
        </div>
        <div class="data">
          <i class="bx bx-message-rounded"></i>
          <span class="number">20k</span>
        </div>
        <div class="data">
          <i class="bx bx-share"></i>
          <span class="number">12k</span>
        </div>
      </div>
    </div>
  </body>
</html>

