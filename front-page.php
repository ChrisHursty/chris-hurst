<?php

get_header(); ?>

<div class="ch-home random-color-bg">
	<div class="container" id="">
		<div class="row">
			<div class="col-md-12">
				<h1 style="color: #fff">
				<?php echo get_theme_mod( 'ch_homepage_hero_text' ); ?>
				</h1>
			</div><!-- .col-md-12 -->
            
		</div><!-- .row end -->
	</div><!-- .container end -->
</div><!-- Wrapper end -->
<div class="container">
    <div class="row">
        <div style="display: block;text-align:center;width: 100%;">
            <h2>Recent Posts</h2>    
        </div>
        
        
        <?php
            $args = array( 'numberposts' => '4' );
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
                echo '<div class="col-md-3"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </div> ';
            }
            wp_reset_query();
        ?>
                
            
    </div>
</div>

<?php get_footer(); ?>
