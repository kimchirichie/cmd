<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "modules/header.php"; ?>
  </head>
  <body>
    <?php include "modules/navbar.php"; ?>

    <div class="section">
        <div class="container">

          <form action="/contact" method="post" class="sendEmail">

            <div class="row">
              <div class="twelve columns">
                <label>Name (required):</label><br>
                <input class="send" type="text" name="name" required/>
              </div>
            </div>

            <div class="row">
              <div class="twelve columns">
                <label>Email (required):</label><br>
                <input class="send" type="email" name="email" required/>
              </div>
            </div>

            <div class="row">
              <div class="twelve columns">
                <label>Phone Number:</label><br>
                <input class="send" type="text" name="phone" />
              </div>
            </div>
            
            <div class="row">
              <div class="six columns">
                <label>Visit Total:</label><br>
              </div>
              <div class="six columns">
                <p class="cash">$ 60.00 CAD</p>
              </div>
            </div>

            <div class="row">
              <div class="twelve columns">
                <label>Street Address (required):</label><br>
                <input class="send" type="text" name="address" required/>
              </div>
            </div>
            
            <div class="row">
              <div class="six columns">
                <label>City (required):</label><br>
                <input class="send" type="text" name="address" required/>
              </div>
              <div class="six columns">
                <label>Postal Code (required):</label><br>
                <input class="send" type="text" name="address" required/>
              </div>
            </div>
            
             <div class="row">
              <div class="three columns">
                <input class="button-primary" type="submit" value="Next"/>
              </div>
            </div>
          </form>
       </div>
    </div>
  <?php include "modules/footer.php"; ?>
  </body>
</html>