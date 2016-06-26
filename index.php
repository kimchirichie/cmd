<!DOCTYPE html>
<html lang="en"><head>
  <?php include "modules/header.php"; ?>
  <script src="/javascript/scroll-fade-in-index.js"></script>
  <script src="/javascript/faq.js"></script>
  <script src="/javascript/email.js"></script>
  <script src="/javascript/sweetalert-master/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/javascript/sweetalert-master/dist/sweetalert.css">
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php include "modules/navbar.php"; ?>

  <div class="section hero">
    <div class="container top">
      <div class="row">
        <div class="two-thirds column animated fadeInLeft">
          <img class="logo" src="/images/logo.svg"/>
          <h4 class="hero-heading">Quick and convenient access to licensed doctors, on your computer or mobile device.</h4>
          <a class="button button-primary" href="/seeDoctor.php">See a Doctor</a>
        </div>
        <div class="one-third column phones">
          <img class="phone animated slideInUp" src="/images/iphone.png">
        </div>
      </div>
    </div>
  </div>

  <div class="section values">
    <div class="container">
      <div class="row basicDes hideme">
        <div class="one-third column value">
          <img class="circle-vp" src="/images/time.png">
          <h5 class="value-heading">Save Time</h5>
          <p class="value-description">Diagnose without visiting a busy walk-in clinic.</p>
        </div>
        <div class="one-third column value">
          <img class="circle-vp" src="/images/home.png">
          <h5 class="value-heading">At Home</h5>
          <p class="value-description">Avoid having to travel.</p>
        </div>
        <div class="one-third column value">
          <img class="circle-vp" src="/images/delivery.png">
          <h5 class="value-heading">Delivery</h5>
          <p class="value-description">Your prescription can be delivered to your front door.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section get-help hour-section">
    <div class="container">
      <img class="u-max-full-width hideme" src="/images/home-visit.jpg">
      <h3 class="hours">clickMD Hours</h3>
      <table class="u-full-width hours-table hideme">
          <thead>
            <tr>
              <th>Sun.</th>
              <th>Mon.</th>
              <th>Tues.</th>
              <th>Wed.</th>
              <th>Thur.</th>
              <th>Fri.</th>
              <th>Sat.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>9 - 5</td>
              <td>10 - 8</td>
              <td>10 - 8</td>
              <td>10 - 8</td>
              <td>10 - 8</td>
              <td>9 - 5</td>
              <td>9 - 5</td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>

  <div class="section faq">
    <div class="container">
      <h1>FAQ:</h1>
      <h2 id="faq-question"></h2>
      <p id="faq-answer"></p>
      <a class="button button-primary" href="/faq.php">See FAQ</a>
    </div>
  </div>
  
<?php include('modules/footer.php'); ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body></html>