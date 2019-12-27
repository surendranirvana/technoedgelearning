<?php

/* Template Name: Blog*/

get_header();
get_template_part('inner', 'banner');
?>

<!--common-content starts-->
<section class="common-content gray">
    <div class="container">
        <div class="BlogList">
            <?php 
			$args = array('post_type'=>'post','posts_per_page' =>-1, 'order'=>'ASC');
			$blog = new WP_Query($args); 
			while($blog->have_posts()) : $blog->the_post();?>
            <article class="blog-post">
                <a href="<?php the_permalink();?>">
                    <?php 
                    $blog_page_image=get_field('blog_page_image');
                    if($blog_page_image['url']){ ?>
                        <div class="lazy-image"> <img src="<?php echo $blog_page_image['url']; ?>"  alt="<?php echo $blog_page_image['title']; ?>" /> </div>    
                    <?php } else if(has_post_thumbnail()){ ?>
                        <div class="lazy-image"> <img src="<?php the_post_thumbnail_url('csc-blog-page'); ?>" width="330"
                            height="302" alt="<?php the_title();?>" /> </div>
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