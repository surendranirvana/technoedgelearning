<?php

/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package Forge Saas

 */



get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();

        get_template_part('inner', 'banner');
        ?>

        <!--Common Content-->

        <section class="common-content">
            <div class="container">
                <?php the_content(); ?>
            </div><!-- #primary -->
        </section>
        <!--Common Content End-->
        <?php endwhile; endif; ?>
<?php get_footer(); ?>