<?php
return [
	'title'       => __( 'c - Accordion flush', 'bs-grid' ),
	'description' => __( 'Accordion flush pattern', 'bs-grid' ),
	'categories'  => [ 'bs-grid' ],
	'content'     => <<<'HTML'
<!-- wp:group {"metadata":{"name":"bs Grid - Accordion Flush","categories":["bs-grid"],"patternName":"bs-grid/accordion-flush"},"className":"bs-accordion mb-3 hide-wp-block-classes bs-toc-hide","layout":{"type":"default"}} -->
<div class="wp-block-group bs-accordion mb-3 hide-wp-block-classes bs-toc-hide"><!-- wp:group {"metadata":{"name":"accordion accordion-flush"},"className":"accordion accordion-flush","layout":{"type":"default"}} -->
<div class="wp-block-group accordion accordion-flush"><!-- wp:group {"metadata":{"name":"accordion-item"},"className":"accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-item"><!-- wp:heading {"className":"accordion-header"} -->
<h2 class="wp-block-heading accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false">Accordion Item #1</button></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"accordion-collapse collapse"},"className":"accordion-collapse collapse","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-collapse collapse"><!-- wp:group {"metadata":{"name":"accordion-body"},"className":"accordion-body","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-body"><!-- wp:paragraph {"metadata":{"name":"mb-0"},"className":"mb-0"} -->
<p class="mb-0"><strong>This is the first item's accordion body.</strong>&nbsp;It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the&nbsp;<code>.accordion-body</code>, though the transition does limit overflow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"accordion-item"},"className":"accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-item"><!-- wp:heading {"className":"accordion-header"} -->
<h2 class="wp-block-heading accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false">Accordion Item #2</button></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"accordion-collapse collapse"},"className":"accordion-collapse collapse","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-collapse collapse"><!-- wp:group {"metadata":{"name":"accordion-body"},"className":"accordion-body","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-body"><!-- wp:paragraph {"metadata":{"name":"mb-0"},"className":"mb-0"} -->
<p class="mb-0"><strong>This is the second item's accordion body.</strong>&nbsp;It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the&nbsp;<code>.accordion-body</code>, though the transition does limit overflow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"accordion-item"},"className":"accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-item"><!-- wp:heading {"className":"accordion-header"} -->
<h2 class="wp-block-heading accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false">Accordion Item #3</button></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"accordion-collapse collapse"},"className":"accordion-collapse collapse","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-collapse collapse"><!-- wp:group {"metadata":{"name":"accordion-body"},"className":"accordion-body","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-body"><!-- wp:paragraph {"metadata":{"name":"mb-0"},"className":"mb-0"} -->
<p class="mb-0"><strong>This is the third item's accordion body.</strong>&nbsp;It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the&nbsp;<code>.accordion-body</code>, though the transition does limit overflow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML,
];
