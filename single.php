<?php get_header(); ?>

<div class="container">
    
    <!-- Post Title -->
    <h1 class="post-title"><?php the_title(); ?></h1>
    
    <!-- Post Meta (Date, Author) -->
    <div class="post-meta">
        <?php the_date(); ?> | By <?php the_author(); ?> | In <?php the_category(', '); ?>
    </div>
    
    <!-- Featured Image -->
    <?php if(has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php endif; ?>
    
    <!-- Table of Contents (agar chahiye) -->
    <div class="toc">
        <!-- Yahan aap "Easy Table of Contents" plugin use kar sakte hain -->
        <!-- Ya phir manual HTML likh sakte hain -->
    </div>
    
    <!-- Post Content -->
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    
    <!-- Featured/Related Posts Section -->
    <div class="featured-blogs">
        <h2>Featured Blogs</h2>
        
        <?php
        $related = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'rand' // random posts
        ));
        
        if($related->have_posts()) :
            while($related->have_posts()) : $related->the_post();
        ?>
            <div class="blog-card">
                <?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
        
    </div>
    
</div>

<?php get_footer(); ?>