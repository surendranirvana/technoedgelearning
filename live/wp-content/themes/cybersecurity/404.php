<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header();
?>
<section class="common-content margin-top">
  <div class="container">
  <div class="row">
  <div class="col-lg-7 col-md-6 col-xs-12 m-b2">
                <h2>SORRY<br><span>404: Page Not Found</span></h2>
                <p>The page you are looking for was not found or does not exist. Try refreshing the page or jump back to the home page.</p>
                <a href="<?php bloginfo('url');?>" class="btn btn-primary" aria-label="Back to Home Page"><i class="fas fa-fw fa-arrow-left"></i> Back to Home Page</a>
            </div>

<div class="col-lg-5 col-md-6 col-xs-12">
<img alt="404 Page Not Found" class="img-fluid" src="<?php bloginfo('url');?>/wp-content/themes/cybersecurity/img/blog-3.jpg"></div>
</div>
    </div>
</section>
<?php
get_footer();