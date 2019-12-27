<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<section class="inner-banner flexslider margin-top">
    <img src="<?php bloginfo('template_directory');?>/img/blog-banner.jpg" width="1349" height="566"
        alt="<?php echo $categories[0]->name; ?>">
    <div class="caption">
        <div class="container">
            <div class="max-width">
                <div class="heading">
                    <?php $categories = get_the_category(); ?>
                    <?php echo $categories[0]->name; ?></div>
            </div>
        </div>
    </div>
</section>
<!--home banner ends-->
<!--common-content starts-->
<section class="common-content gray">
    <div class="container">
        <div class="BlogList">
            <?php
              // Start the Loop.
              while ( have_posts() ) :
                the_post(); ?>
                    <article class="blog-post">
                        <a href="<?php the_permalink();?>">
                            <?php if(has_post_thumbnail()){ ?>
                            <div class="lazy-image"> <img src="<?php the_post_thumbnail_url('full'); ?>" width="532"
                                    height="302" alt="<?php the_post_thumbnail_url('full'); ?>" /> </div>
                            <?php }?>
                            <div class="details">
                                <p class="post-date"><?php echo date('F j, Y',strtotime($post->post_date));  ?></p>
                                <h3><?php the_title();?></h3>
                            </div>
                        </a>
                    </article>
            <?php endwhile;?>
        </div>
    </div>
</section>
<!--common-content ends-->
<?php get_footer(); ?>