<?php
/*
 * Grid template.
 *
 * This template can be overriden by copying this file to your-theme/bs-grid-main/sc-accordion.php
 *
 * @author 		bootScore
 * @package 	bS Grid
 * @version   5.2.2.0

Post/Page/CPT Hero Grid Shortcodes

Posts: 
[bs-accordion type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]

Child-pages: 
[bs-accordion type="page" post_parent="21" order="ASC" orderby="title" posts="6"]

Custom post types:
[bs-accordion type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]

Single items:
[bs-accordion type="post" id="1, 15"]
[bs-accordion type="page" id="2, 25"]
[bs-accordion type="isotope" id="33, 31"]
*/


// Accordion Shortcode
add_shortcode('bs-accordion', 'bootscore_accordion');
function bootscore_accordion($atts) {

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
    'id' => ''
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

    <div class="bs-accordion mb-4">
      <div class="accordion">
        <?php while ($query->have_posts()) : $query->the_post(); ?>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false">
                <?php the_title(); ?>
              </button>
            </h2>
            <div class="accordion-collapse collapse" data-bs-parent=".accordion">
              <div class="accordion-body">
                <!-- Featured Image-->
                <?php bootscore_post_thumbnail(); ?>
                <!-- Content -->
                <?php the_content(); ?>
              </div>
            </div>
          </div>

        <?php endwhile;
        wp_reset_postdata(); ?>
      </div><!-- .accordion -->
    </div>

<?php $myvariable = ob_get_clean();
    return $myvariable;
  }
}
// Accordion Shortcode End