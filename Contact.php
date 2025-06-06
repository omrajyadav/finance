<?php
include "header.php";
?>
<!-- Page Content -->
<!-- <div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Contact Us</h1>
        <span>feel free to send us a message now!</span>
      </div>
    </div>
  </div>
</div> -->

<div class="contact-information">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-phone"></i>
          <h4>Phone</h4>
          <p>Stay connected with our high-quality phone services, offering seamless communication and advanced features.
            </p> <a href="#">090-080-0760</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-envelope"></i>
          <h4>Email</h4>
          <p>Enhance your communication with our reliable email services, offering secure, fast, and professional email
            solutions. </p>
          <a href="#">info@company.com</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-map-marker"></i>
          <h4>Location</h4>
        <p>baramati midc<br>finHub pin 413114</p>
          <a href="#">View on Google Maps</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="callback-form contact-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Send us a <em>message</em></h2>
          <span>Suspendisse a ante in neque iaculis lacinia</span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="contact-form">
          <form id="contact" action="contact_save.php" method="post">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*"
                    placeholder="E-Mail Address" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="phone" type="number" class="form-control" id="phone" placeholder="phone" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                    required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="map">
  <!-- How to change your own map point
  1. Go to Google Maps
  2. Click on your location point
  3. Click "Share" and choose "Embed map" tab
  4. Copy only URL and paste it within the src="" field below
-->
  <iframe
    src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
    width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php
include "footer.php"
  ?>