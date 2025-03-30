<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  if (!empty($name) && !empty($email) && !empty($message)) {
      echo "<div style='position: fixed; top: 0; left: 0; width: 100%; height: 100vh; 
                      background: url(\"assets/images/slide-01.jpg\") no-repeat center center;
                      background-size: cover; display: flex; justify-content: center; 
                      align-items: center; color: white; text-align: center;'>
              <div>
                  <h2>Ďakujeme za vašu správu, <strong>$name</strong>!</h2>
                  <p>Vaša správa bola úspešne odoslaná.</p>
                  <button onclick='window.history.back();' style='padding: 15px 30px; background-color: #ff6600; color: white; border: none; cursor: pointer; font-size: 18px; border-radius: 5px;'>
                      Späť
                  </button>
              </div>
            </div>";
      exit;
  } else {
      echo "<p style='color: red; text-align: center;'>Vyplňte všetky povinné polia!</p>";
  }
}

?>

<?php
  include('partials/header.php');
?>

<!-- ***** Header Area End ***** -->

<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-text">
          <h2>Contact Us</h2>
          <div class="div-dec"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ***** Main Banner Area End ***** -->

<section class="contact-us-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h6>Contact Us</h6>
          <h4>Feel free to message us</h4>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <form id="contact" action="" method="POST">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="text" name="phone" id="phone" placeholder="Your Phone..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="email" name="email" id="email" placeholder="Your E-mail..." required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="Your Message" required></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
  include('partials/footer.php');
?>
