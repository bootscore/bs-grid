<?php

/*
 * Hero template.
 *
 * This template can be overriden by copying this file to your-theme/bs-grid-main/sc-hero.php
 *
 * @author   bootScore
 * @package  bS Grid
 * @version  5.4.0
 *
 * Post/Page/CPT Hero Shortcodes
 *
 * Posts: 
 * [bs-hero type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]
 *
 * Child-pages: 
 * [bs-hero type="page" post_parent="21" order="ASC" orderby="title" posts="6"]
 *
 * Custom post types:
 * [bs-hero type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]
 *
 * Single items:
 * [bs-hero type="post" id="1, 15"]
 * [bs-hero type="page" id="2, 25"]
 * [bs-hero type="isotope" id="33, 31"]
 * 
 * Optional:
 * Add the following attributes to disable excerpt, tags, or categories
 * excerpt="false"
 * tags="false"
 * categories="false"
 *
*/


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


// Hero Shortcode
add_shortcode('bs-hero', 'bootscore_hero');
function bootscore_hero($atts) {

  ob_start();
  extract(shortcode_atts(array(
    'type' => 'post',
    'order' => 'date',
    'orderby' => 'date',
    'posts' => -1,
    'category' => '',
    'post_parent'    => '',
    'tax' => '',
    'terms' => '',
    'id' => '',
    'excerpt' => 'true',
    'tags' => 'true',
    'categories' => 'true',
  ), $atts));

  $options = array(
    'post_type' => $type,
    'order' => $order,
    'orderby' => $orderby,
    'posts_per_page' => $posts,
    'category_name' => $category,
    'post_parent' => $post_parent,
  );

  $tax = trim($tax);
  $terms = trim($terms);
  if ($tax != '' && $terms != '') {
    $terms = explode(',', $terms);
    $terms = array_map('trim', $terms);
    $terms = array_filter($terms);
    $terms = array_unique($terms);
    unset($options['category_name']);
    $options['tax_query'] = array(array(
      'taxonomy' => $tax,
      'field'    => 'name',
      'terms'    => $terms,
    ));
  }

  if ($id != '') {
    $ids = explode(',', $id);
    $ids = array_map('intval', $ids);
    $ids = array_filter($ids);
    $ids = array_unique($ids);
    $options['post__in'] = $ids;
  }

  $query = new WP_Query($options);
  if ($query->have_posts()) { ?>

    <?php while ($query->have_posts()) : $query->the_post(); ?>
      <div class="bs-grid-hero position-relative bg-dark mb-4 rounded tags-heading-none">
        <!-- Featured Image-->
        <?php the_post_thumbnail('full', array('class' => 'grid-hero-img rounded')); ?>
        <div class="position-absolute top-0 end-0 bottom-0 start-0">
          <div class="container h-100 d-flex flex-column">
            <div class="mt-auto text-white mb-5 text-center">
              <!-- Category badge -->
              <?php if ($categories == 'true') : ?>
                <?php bootscore_category_badge(); ?>
              <?php endif; ?>
              <!-- Title -->
              <h2 class="blog-post-title">
                <a class="text-white" href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
              <!-- Excerpt & Read more -->
              <?php if ($excerpt == 'true') : ?>
                <p class="card-text">
                  <a class="text-white text-decoration-none" href="<?php the_permalink(); ?>">
                    <?= strip_tags(get_the_excerpt()); ?>
                  </a>
                </p>
              <?php endif; ?>
              <a class="read-more btn btn-light" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'bootscore'); ?></a>
              <!-- Tags -->
              <?php if ($tags == 'true') : ?>
                <?php bootscore_tags(); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div><!-- .bs-grid-hero -->
    <?php endwhile;
    wp_reset_postdata(); ?>

<?php $myvariable = ob_get_clean();
    return $myvariable;
  }
}
