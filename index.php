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
        <div class="two-thirds column animated fadeIn">
          <img class="logo" src="/images/logo.svg"/>
          <h4 class="hero-heading">Quick and convenient access to licensed doctors, on your computer or mobile device.</h4>
          <a class="button button-primary" href="/seeDoctor.php">See a Doctor</a>
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

  <div class="section video">
    <div class="container">
      <div class="row">
        <div class="one-half column">
          <h2>See your doctor at home</h2>
          <p>Living a busy life? Balance your priorities? What if someone gets sick? You could get in a car with the bad weather just to sit in a waiting room for hours with full of other sick people or you can log into clickMD or you can see a doctor face to face in the comfort of your own home.</p>
        </div>
        
        <div class="one-half column">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/gnmpUXM3-Rs" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
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

  <div class="app">
    <h4>Download the app today!</h4>
    <div class="container">
      <a href="#">
        <img class="img-responsive" src="/images/apple.png">
      </a>
      <a href="#">
        <img class="img-responsive" src="/images/google.png">
      </a>
    </div>
  </div>

                
<?php include('modules/footer.php'); ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body></html>