<section class="footer_container">
  <div class="footer1">
    <div class="footer_column">
      <div class="logo_container"><a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>images/logo.png"
            alt=""></a></div>
      <p class="first_footer_p">Morrhtech Solutions is the leading ICT
        Training and Exam Testing Institute with
        over 5 years cognitive experience in Nigeria
      </p>
      <div class="product_details_btn_container">
        <a href="#"> <button class="open_btn" style="color: white;">Call Us</button></a>
        <a href="#"> <button class="close_btn">Chat Us</button></a>
      </div>
    </div>
    <div class="footer_column get_in_touch">
      <h3>Get in touch</h3>
      <p>
        <span class="material-symbols-outlined">location_on</span>
        <span>7th Avenue Junction, Festac Town. Lagos State</span>
      </p>
      <p>
        <span class="material-symbols-outlined">mail</span>
        <span>Admin@morrhtechacademy.com</span>
      </p>
      <p>
        <span class="material-symbols-outlined">call</span>
        <span> +234 9049 2836 53</span>
      </p>
    </div>
    <div class="footer_column quick_links">
      <h3>Quick Links</h3>
      <a href="<?php echo $base_url; ?>">
        <span class="material-symbols-outlined">navigate_next</span>
        <span> Courses</span>
      </a>
      <a href="">
        <span class="material-symbols-outlined">navigate_next</span>
        <span>Instructors</span>
      </a>
      <a href="">
        <span class="material-symbols-outlined">navigate_next</span>

        <span>Certifications</span>
      </a>
      <a href="">
        <span class="material-symbols-outlined">navigate_next</span>
        <span>Educational Services</span>
      </a>
      <a href="">
        <span class="material-symbols-outlined">navigate_next</span>
        <span>Online Training</span>
      </a>
    </div>
    <div class="footer_column">
      <h3>Subscribe</h3>
      <p> To receive our free tutorials and opportunities enter your email below</p>
      <form action="" id="subscribe">
        <input type="email" name="email" class="form_input" placeholder="Enter your email">
        <button class="search_btn">Subscribe</button>
      </form>
      <div class="social_container">
        <h3>Follow Us</h3>
        <?php include "includes/social_icons.php";?>
      </div>
    </div>
  </div>
  <div class="footer2">
    <div class="copyright_container"><span>&copy; Morrhtech Solutions. All rights reserved</span></div>
    <div class="payment_method_container">
      <div class="payment_img_container"><img src="<?php echo $base_url; ?>images/visa.jpg" alt=""></div>
      <div class="payment_img_container"><img src="<?php echo $base_url; ?>images/mastercard.jpg" alt=""></div>
      <div class="payment_img_container"><img src="<?php echo $base_url; ?>images/Paystack.webp" alt=""></div>
    </div>
  </div>
</section>

<?php include "popups/overlay.php";
include "popups/popup.php";
include "popups/toast.php";
include "loading/loading.php";
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<!-- <script src="<?php echo $base_url; ?>js/jquery.js"></script> -->
<script src="<?php echo $base_url; ?>js/script.js?ver=<?php echo microtime(); ?>"></script>
<script src="<?php echo $base_url; ?>sliders/slider.js?ver=<?php echo microtime(); ?>"></script>
<script src="<?php echo $base_url; ?>popups/popup.js?ver=<?php echo microtime(); ?>"></script>
<script src="<?php echo $base_url; ?>popups/toast.js?ver=<?php echo microtime(); ?>"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>