<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Contact us-SBN</title>
     <?php
      include "head.php";
    ?>
  </head>
  <body>
       <?php
         include "header.php";
       ?>
    <!-- banner section starts -->

    <section class="contactBanner">
      <div class="banner-container">
        <img src="media/contact-banner.jpeg" alt="" />
      </div>
    </section>

    <!-- banner section ends -->

    <!-- form section starts -->

    <section class="form">
      <div class="form-container">
        <div class="form-content">
          <form action="contact-mail.php" method="POST" class="contact-form">
            <div class="form-element">
              <input
                type="text"
                name="Name"
                id=""
                class="input"
                placeholder=" " required
              />
              <label for="" class="placeholder">Name</label>
            </div>
            <div class="form-element">
              <input
                type="email"
                name="Email"
                id=""
                class="input" required
                placeholder=" "
              />
              <label for="" class="placeholder">Email</label>
            </div>

            <div class="form-element">
              <input
                type="text"
                name="MobileNumber"
                id=""
                class="input"
                placeholder=" " maxlength="10" minlength="10" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
              />
              <label for="" class="placeholder">Mobile Number</label>
            </div>

            <div class="form-element">
              <input
                type="text"
                name="Message"
                id=""
                class="input"
                placeholder=" "
              />
              <label for="" class="placeholder">Message</label>
            </div>

            <div class="form-element">
              <input
                type="submit"
                name="c-submit"
                value="SUBMIT"
                id=""
                class="input submit"
                placeholder=" "
              />
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- form section ends -->

     <?php
      include "footer.php";
    ?>

    <script src="js/script.js"></script>
  </body>
</html>
