<!--inner banner starts-->

<section class="inner-banner flexslider margin-top">
    <?php if(has_post_thumbnail()){
                    the_post_thumbnail('full');
            } else {    ?>
            <img src="<?php bloginfo('template_directory');?>/img/contact-banner.jpg" width="1349" height="566"
                alt="<?php the_title();?>">
            <?php }?>
    <div class="caption">
        <div class="container">
            <div class="max-width">
                <div class="heading"> <?php if(get_field('title')) the_field('title'); else the_title() ?></div>
                <?php if(get_field('title_description')) echo '<p>'.get_field('title_description').'</p>';?>
            </div>
        </div>
    </div>
</section>