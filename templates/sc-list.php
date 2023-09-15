<?php

/*
 * List template.
 *
 * This template can be overriden by copying this file to your-theme/bs-grid-main/sc-list.php
 *
 * @author   bootScore
 * @package  bS Grid
 * @version  5.4.0
 *
 * Post/Page/CPT List Shortcodes
 *
 * Posts: 
 * [bs-list type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]
 *
 * Child-pages: 
 * [bs-list type="page" post_parent="21" order="ASC" orderby="title" posts="6"]
 *
 * Custom post types:
 * [bs-list type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]
 *
 * Single items:
 * [bs-list type="post" id="1, 15"]
 * [bs-list type="page" id="2, 25"]
 * [bs-list type="isotope" id="33, 31"]
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


// List Shortcode
add_shortcode('bs-list', 'bootscore_list');
function bootscore_list($atts) {

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

      <div class="card horizontal mb-4">
        <div class="row g-0">

          <?php if ( has_post_thumbnail() ) : ?>
            <div class="col-lg-6 col-xl-5 col-xxl-4">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('class' => 'card-img-lg-start')); ?>
              </a>
            </div>
          <?php endif; ?>

          <div class="col">
            <div class="card-body">

              <?php if ($categories == 'true') : ?>
                <?php bootscore_category_badge(); ?>
              <?php endif; ?>

              <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                <?php the_title('<h2 class="blog-post-title h5">', '</h2>'); ?>
              </a>

              <?php if ('post' === get_post_type()) : ?>
                <p class="meta small mb-2 text-muted">
                  <?php
                    bootscore_date();
                    bootscore_author();
                    bootscore_comments();
                    bootscore_edit();
                  ?>
                </p>
              <?php endif; ?>

              <p class="card-text">
                <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                  <?php if ($excerpt == 'true') : ?>
                    <p class="card-text">
                      <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                        <?= strip_tags(get_the_excerpt()); ?>
                      </a>
                    </p>
                  <?php endif; ?>
                </a>
              </p>

              <p class="card-text">
                <a class="read-more" href="<?php the_permalink(); ?>">
                  <?php _e('Read more »', 'bootscore'); ?>
                </a>
              </p>

              <?php if ($tags == 'true') : ?>
                <?php bootscore_tags(); ?>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>      

    <?php endwhile;
    wp_reset_postdata(); ?>

<?php $myvariable = ob_get_clean();
    return $myvariable;
  }
}
