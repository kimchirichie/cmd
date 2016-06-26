<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "modules/header.php"; ?>
  </head>
  <body>
    <?php include "modules/navbar.php"; ?>

    <div class="section">
        <div class="container animated fadeIn">

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
    </div>
    <?php include "modules/footer.php"; ?>
  </body>
</html>