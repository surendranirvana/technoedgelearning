<?php get_header(); ?>
<!--common content starts-->

<section class="common-content blog-detail gray p-t0 margin-top">
    <div class="container">
        <div class="back-btn"><a href="<?php bloginfo('url')?>/blog">Back to all blog post</a></div>
        <div class="two-col-aside">
            <?php 
            if(have_posts()) { ?>
            <article class="big-col">
                <?php while (have_posts()) { the_post();?>
                <h1><?php the_title();?></h1>
                <p class="options"><span>By : <?php the_author();?></span>
                    <span><?php echo date('F j, Y',strtotime($post->post_date)); ?></span>
                </p>
                <?php the_post_thumbnail('full');?>
                <?php 
                
                    $blog_full_image=get_field('blog_full_image');
                    if($blog_full_image['url']){ ?>
                        <img src="<?php echo $blog_full_image['url']; ?>"  alt="<?php echo $blog_full_image['title']; ?>" />   
                    <?php } else if(has_post_thumbnail()){ ?>
                        <img src="<?php the_post_thumbnail_url('csc-blog-page'); ?>" width="330"
                            height="302" alt="<?php the_title();?>" /> 
                    <?php } ?>
                <?php the_content(); ?>
                <?php }  ?>
            </article>
            <?php }  ?>
            <aside class="aside">
            <?php
            $args = array( 'numberposts' => '5' ); 
            $recent_posts = wp_get_recent_posts( $args ); 
            if($recent_posts){ ?>
                <div class="blog-aside">
                    <h3>Recent post</h3>
                    <ul>
                    <?php
                        foreach( $recent_posts as $recent ){?>
                        <li><a href="<?php echo esc_url( get_permalink( $recent['ID'] ) ); ?>"><?php echo wp_trim_words( $recent['post_content'], 40, '...' ); ?></a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
                <?php } 
                
                $categories = get_categories( array('orderby' => 'name','parent'  => 0,'hide_empty' => 0,));
                if($categories){?>
                <div class="blog-aside">
                    <h3>Categories</h3>
                    <ul>
                        <?php  foreach( $categories as $category ) { ?>
                        <li><a href="<?php echo esc_url( get_category_link( $category->term_id)); ?>"><?php echo esc_html( $category->name ); ?></a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
                <?php } ?>
            </aside>
        </div>
    </div>
</section>
<!--common content ends-->
<?php get_footer(); ?>