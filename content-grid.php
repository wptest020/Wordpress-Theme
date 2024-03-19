<?php 
global $post, $homey_local, $blog_args; 
?>
<div <?php post_class('item-blog'); ?>>
	<div class="media">
		<div class="item-blog-image">
			<div class="item-media item-media-thumb">
				<a href="<?php the_permalink(); ?>" class="hover-effect">
                <?php
                if( has_post_thumbnail( $post->ID ) ) {
                    the_post_thumbnail( 'homey-listing-thumb',  array('class' => 'img-responsive' ) );
                }else{
                    homey_image_placeholder( 'homey-listing-thumb' );
                }
                ?>
            	</a>
			</div>
		</div>
		<div class="media-body item-body">
			<div class="item-title-head">
				<h3 class="title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				<div class="item-blog-meta item-blog-category">
					<i class="homey-icon homey-icon-award-badge-1"></i> <?php the_category(', '); ?>
				</div>
				<p><?php echo homey_get_content(18); ?></p>
			</div>
			<div class="item-blog-footer">
				<ul class="list-inline">
					<li class="item-blog-meta">
						<i class="homey-icon homey-icon-calendar-3"></i> <?php printf( __( '%s ago', 'homey' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
					</li>
					<li class="item-blog-meta">
						<i class="homey-icon homey-icon-multiple-man-woman-2-o" aria-hidden="true"></i> <?php echo esc_attr($homey_local['by_text']);?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>