<?php
return [
	'title'       => __( 'Tabs', 'bs-grid' ),
	'description' => __( 'Tabs pattern', 'bs-grid' ),
	'categories'  => [ 'bs-grid' ],
	'content'     => <<<'HTML'
<!-- wp:group {"metadata":{"name":"bs Grid - Tabs","categories":["bs-grid"],"patternName":"bs-grid/tabs"},"className":"bs-tabs mb-3 hide-wp-block-classes bs-toc-hide","layout":{"type":"default"}} -->
<div class="wp-block-group bs-tabs mb-3 hide-wp-block-classes bs-toc-hide"><!-- wp:group {"metadata":{"name":"d-flex text-nowrap overflow-x-auto scrollbar-none"},"className":"d-flex text-nowrap overflow-x-auto scrollbar-none","layout":{"type":"default"}} -->
<div class="wp-block-group d-flex text-nowrap overflow-x-auto scrollbar-none"><!-- wp:list {"metadata":{"name":"nav nav-tabs flex-nowrap flex-grow-1 mb-3"},"className":"nav nav-tabs flex-nowrap flex-grow-1 mb-3"} -->
<ul class="wp-block-list nav nav-tabs flex-nowrap flex-grow-1 mb-3"><!-- wp:list-item {"metadata":{"name":"Home"},"className":"nav-item"} -->
<li class="nav-item"><button class="nav-link active" data-bs-toggle="tab">Home</button></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"metadata":{"name":"Profile"},"className":"nav-item"} -->
<li class="nav-item"><button class="nav-link" data-bs-toggle="tab">Profile</button></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"metadata":{"name":"Contact"},"className":"nav-item"} -->
<li class="nav-item"><button class="nav-link" data-bs-toggle="tab">Contact</button></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"tab-content"},"className":"tab-content","layout":{"type":"default"}} -->
<div class="wp-block-group tab-content"><!-- wp:group {"metadata":{"name":"tab-pane fade"},"className":"tab-pane fade","layout":{"type":"default"}} -->
<div class="wp-block-group tab-pane fade"><!-- wp:paragraph -->
<p><strong>This is some placeholder content the Home tab’s associated content.</strong>&nbsp;Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other&nbsp;<code>.nav</code>-powered navigation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"tab-content"},"className":"tab-content","layout":{"type":"default"}} -->
<div class="wp-block-group tab-content"><!-- wp:group {"metadata":{"name":"tab-pane fade"},"className":"tab-pane fade","layout":{"type":"default"}} -->
<div class="wp-block-group tab-pane fade"><!-- wp:paragraph -->
<p><strong>This is some placeholder content the Profile tab’s associated content.</strong>&nbsp;Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other&nbsp;<code>.nav</code>-powered navigation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"tab-content"},"className":"tab-content","layout":{"type":"default"}} -->
<div class="wp-block-group tab-content"><!-- wp:group {"metadata":{"name":"tab-pane fade"},"className":"tab-pane fade","layout":{"type":"default"}} -->
<div class="wp-block-group tab-pane fade"><!-- wp:paragraph -->
<p><strong>This is some placeholder content the Contact tab’s associated content.</strong>&nbsp;Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other&nbsp;<code>.nav</code>-powered navigation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML,
];
