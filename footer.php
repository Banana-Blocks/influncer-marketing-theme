<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,500,1,-25&icon_names=call,location_on,mail" />

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

<div class="container w-100 pt-5 pb-5 pl-5 pr-4 bg-dark d-flex flex-row flex-wrap">
    <!-- Things that did not work as src for image here:
      <?php echo esc_url( get_template_directory_uri() . '/wp-content/uploads/2025/07/Banana-Brands-logo.png' ); ?>
      <?php echo esc_url( wp_upload_dir()['url'] . '/2025/07/Banana-Brands-logo.png' ); ?>
 -->

      
  <div class="row d-flex flex-row flex-wrap">
    <div class="col-9 col-md-4 pr-5 text-white align-items-center">
      <img src="<?php echo esc_url( get_site_url() . '/wp-content/uploads/2025/07/Banana-Brands-logo.png' ); ?>" alt="Influencer Marketing Logo" class="img-fluid mb-3" style="max-width: 150px;">
  
    <p class="text-white text-justify">BananaBrands is your growth partner in influencer marketing. We connect brands with authentic voices to drive engagement, trust, and conversions. From campaign strategy to execution, we make it simple and impactful. Let’s take your brand to the next level—smart, scalable, and results-driven.</p>

    </div>
    <div class="col-3 col-md-2 text-white">
      <!-- 1 of 3 -->
      <h5 class="mb-4">Quick Links</h5>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#about">About</a>
      </p>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#services">Services</a>
      </p>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#contact">Contact</a>
      </p>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#blog">Blog</a>
      </p>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#">Join Influencer Marketing</a>
      </p>
    </div>
    <div class="col-3 col-md-2 text-white">
      <!-- 2 of 3 -->
      <h5 class="mb-4">Support Links</h5>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#privacy-policy">
          Privacy Policy
        </a>
      </p>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#terms-of-service">
          Terms of Service
        </a>
      </p>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#support">
          Support
        </a>
      </p>
      <p>
        <a class="text-white" href="https://influencersmarketing.in/#disclaimer">
          Disclaimer
        </a>
      </p>
    </div>
    <div class="col-3 col-md-4 text-white">
      <!-- 3 of 3 -->
      <h5 class="mb-4">Contact Info</h5>
      <p>
        <span class="material-symbols-outlined">
          location_on
        </span>
        <a class="text-white" href="https://maps.app.goo.gl/RoXQwSeevquE9iwL8">
          206, Maharaja Kameshwar Complex, Fraser Road, Patna -400001
        </a>
      </p>
      <p>
        <span class="material-symbols-outlined">
mail
</span>
        <a class="text-white" href="mailto:support@influencersmarketing.in">
          support@influencersmarketing.in
        </a>
      </p>
      <p>
        <span class="material-symbols-outlined">
call
</span>
        <a class="text-white" href="tel:+919263617509">
         (+91)9263617509
        </a>
      </p>
     
    </div>
  </div>
</div>

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

