<?php
/*
 * Grid template.
 *
 * This template can be overriden by copying this file to your-theme/bs-grid-main/sc-grid.php
 *
 * @author 		bootScore
 * @package 	bS Grid
 * @version     1.0.0

Post/Page/CPT Grid Shortcodes:

Posts: [bs-grid type="post" category="documentation, category-default" order="ASC" orderby="title" posts="6"]
Pages: [bs-grid type="page" post_parent="413" order="ASC" orderby="title" posts="6"]
Custom Post Types: [bs-grid type="isotope" tax="isotope_category" cat_parent="6" order="DESC" orderby="date" posts="10"]
*/


// Post Grid Shortcode
add_shortcode( 'bs-grid', 'bootscore_grid' );
function bootscore_grid( $atts ) {
	ob_start();
	extract( shortcode_atts( array (
		'type' => 'post',
		'order' => 'date',
		'orderby' => 'date',
		'posts' => -1,
		'category' => '',
        'post_parent'    => '', // parent-id child-pages
        'cat_parent'    => '', // parent-taxonomy-id CPT
		'tax' => '' // CPT taxonomy
        
	), $atts ) );
	$options = array(
		'post_type' => $type,
		'order' => $order,
		'orderby' => $orderby,
		'posts_per_page' => $posts,
		'category_name' => $category,
        'post_parent' => $post_parent,
        
	);
    // CPT - Check if taxonomy and terms were defined
	if ( $tax != '' && $cat_parent != '' ) {
		$terms = explode( ',', trim( $cat_parent ) );
		$terms = array_map( 'trim', $terms );
		$terms = array_unique( $terms );
		$terms = array_filter( $terms );
		$options['tax_query'] = array(
			'relation' => 'AND',
			array(
				'taxonomy' => $tax,
				'field'    => 'term_id',
				'terms'    => $terms,
				'operator' => 'IN'
			)
		);
	}
    
	$query = new WP_Query( $options );
	if ( $query->have_posts() ) { ?>


<div class="row">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="col-md-6 col-lg-4 col-xxl-3 mb-4">
        <div class="card h-100">
            <!-- Featured Image-->
            <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

            <div class="card-body d-flex flex-column">
                
                <?php bootscore_category_badge(); ?>
                
                <!-- Title -->
                <h2 class="blog-post-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <!-- Meta -->
                <?php if ( 'post' === get_post_type() ) : ?>
                <small class="text-muted mb-2">
                    <?php
				        bootscore_date();
				        bootscore_author();
				        bootscore_comments();
				        bootscore_edit();
				    ?>
                </small>
                <?php endif; ?>
                <!-- Excerpt & Read more -->
                <div class="card-text">
                    <?php the_excerpt(); ?>
                </div>
                            
                <div class="mt-auto">
                    <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'bootscore'); ?></a>
                </div>
                <!-- Tags -->
                <?php bootscore_tags(); ?>
            </div>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>

<?php $myvariable = ob_get_clean();
	return $myvariable;
	}	
}

// Post Grid Shortcode End