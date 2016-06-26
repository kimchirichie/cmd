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

  <div class="section">
    <div class="container">
      <div class="row">
      <div class="one-half column">
        <h2>Lorem ipsom</h2>
        <p>
          Lorem ipsom 
          Lorem ipsom 
          Lorem ipsom 
        </p>
      </div>
      
      <div class="one-half column">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gnmpUXM3-Rs" frameborder="0" allowfullscreen></iframe>
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
    <a href="http://app.appsflyer.com/id591981144?pid=SmartBanner&amp;c=mobileweb">
      <img class="img-responsive" src="/images/apple.png">
    </a>
    <a href="http://app.appsflyer.com/com.doctorondemand.android.patient?pid=SmartBanner&amp;c=MobileWeb">
      <img class="img-responsive" src="/images/google.png">
    </a>
  </div>


  <div class="section container">
    <form action="/emailer.php" method="post" class="sendEmail">

      <h2>Contact Us</h2>

      <div class="row">
        <div class="six columns">
          <label>Your Name (required):</label><br>
          <input class="send" type="text" name="name"/>
        </div>
        <div class="six columns">
          <label>Your Email (required):</label><br>
          <input class="send" type="email" name="email"/>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
          <label>Subject:</label><br>
          <input class="send" type="text" name="subject" />
        </div>
      </div>
      
      <div class="row">
        <div class="twelve columns">
          <label>Your Message:</label><br>
          <textarea class="send" name="message"></textarea>
        </div>
      </div>
      
       <div class="row">
       <div class="six columns cancel">
          <a class="button button-primary cancelBtn" href="/index.php">Cancel</a>
        </div>
        <div class="six columns sendBtn">
          <input class="button-primary" type="submit" value="Send"/>
        </div>
      </div>
    </form>
  </div>

                
<?php include('modules/footer.php'); ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body></html>