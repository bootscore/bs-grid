<?php
/*
 * Grid template.
 *
 * This template can be overriden by copying this file to your-theme/bs-grid-main/sc-accordion.php
 *
 * @author 	  bootScore
 * @package   bS Grid
 * @version   5.2.2.0

Post/Page/CPT Hero Grid Shortcodes

Posts: 
[bs-tabs type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]

Child-pages: 
[bs-tabs type="page" post_parent="21" order="ASC" orderby="title" posts="6"]

Custom post types:
[bs-tabs type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]

Single items:
[bs-tabs type="post" id="1, 15"]
[bs-tabs type="page" id="2, 25"]
[bs-tabs type="isotope" id="33, 31"]
*/


// Accordion Shortcode
add_shortcode('bs-tabs', 'bootscore_tabs');
function bootscore_tabs($atts) {

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

<div class="bs-tabs mb-4">
  
  <ul class="nav nav-tabs">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#"><?php the_title(); ?></a>
    </li>
    <?php endwhile;
        wp_reset_postdata(); ?>
  </ul>

</div><!-- .bs-tabs -->
  
<?php $myvariable = ob_get_clean();
    return $myvariable;
  }
}
// Accordion Shortcode End
