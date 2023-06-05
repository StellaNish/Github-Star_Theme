<?php
/* ------this is footer------*/
?>

<div class="responsive-footer">
<footer class="bg-primary text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h6 class="text-uppercase">Website Logo</h2>

        <div class="footer">
        <img src="<?php echo get_template_directory_uri(); ?> /img/logo.JPG" alt="Logo">
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h6 class="text-uppercase">Links</h6>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="index.php" class="text-white">Home</a>
          </li>
          <li>
            <a href="page-about.php" class="text-white">About</a>
          </li>
          <li>
            <a href="page-projects.php" class="text-white">Project</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h6 class="text-uppercase mb-0">Social Media</h6>

        <div class="social-media-icons">
        <a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="Facebook"></a>
		
        <a href="https://www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="Instagram"></a>
		
        <a href="https://www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="Youtube"></a>
		
        <a href="https://www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/img/snapchat.png" alt="Snapchat"></a>
        </div>

      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://wordpress.com/">Star_Theme_wordpress.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>

 <script>
      $(document).foundation();
	  
    </script> 

 </body>
  <?php wp_footer(); ?>
</html>