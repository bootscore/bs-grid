=== bs Grid ===

Contributors: Bastian Kreiter, torricelli, Dog Byte Marketing

Stable tag: 5.7.1
Tested up to: 6.6
Requires at least: 5.0
Requires PHP: 7.4
License: MIT License
License URI: https://github.com/bootscore/bs-grid/blob/main/LICENSE

Post / Page / Custom Post Type Grid, List or Hero for Bootscore WordPress Theme, Copyright 2020 - 2024 The Bootscore Contributors.

License URI: https://github.com/bootscore/bs-grid/blob/main/LICENSE

== Credits ==

- Plugin Update Checker, YahnisElsts, MIT License https://github.com/YahnisElsts/plugin-update-checker/blob/master/license.txt


== Installation ==

1. In your admin panel, go to Plugins > and click the Add New button.
2. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
3. Click Activate to use your new Plugin right away.


== Usage ==

Post/Page/CPT Grid/List Shortcodes


= Posts by category slug = 

[bs-grid type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]
[bs-list type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]
[bs-hero type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]
[bs-accordion type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]
[bs-tabs type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]

Options:

category: category-slug - multiple categories separated by comma
order: ASC or DESC
orderby: date or title
posts: number of posts to display  


= Child-pages by parent-page id = 

[bs-grid type="page" post_parent="21" order="ASC" orderby="title" posts="6"]
[bs-list type="page" post_parent="21" order="ASC" orderby="title" posts="6"]
[bs-hero type="page" post_parent="21" order="ASC" orderby="title" posts="6"]
[bs-accordion type="page" post_parent="21" order="ASC" orderby="title" posts="6"]
[bs-tabs type="page" post_parent="21" order="ASC" orderby="title" posts="6"]

Options:

post_parent: ID of your parent page      
order: ASC or DESC
orderby: date or title
posts: number of pages to display


= Custom post types by terms-slug =

[bs-grid type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]
[bs-list type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]
[bs-hero type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]
[bs-accordion type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]
[bs-tabs type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]

type: type of custom post type
terms: terms-slug - multiple terms separated by comma
order: ASC or DESC
orderby: date or title
posts: number of posts to display 

= Single items by id =

Posts

[bs-grid type="post" id="1, 15"]
[bs-list type="post" id="1, 15"]
[bs-hero type="post" id="1, 15"]
[bs-accordion type="post" id="1, 15"]
[bs-tabs type="post" id="1, 15"]

Pages

[bs-grid type="page" id="2, 25"]
[bs-list type="page" id="2, 25"]
[bs-hero type="page" id="2, 25"]
[bs-accordion type="page" id="2, 25"]
[bs-tabs type="page" id="2, 25"]

Custom post types

[bs-grid type="isotope" id="33, 31"]
[bs-list type="isotope" id="33, 31"]
[bs-hero type="isotope" id="33, 31"]
[bs-accordion type="isotope" id="33, 31"]
[bs-tabs type="isotope" id="33, 31"]

Options for posts using [bs-grid] or [bs-template]

categories="false" hide categories badges
excerpt="false" hide excerpt
tags="false" hide tags badges


== Changelog ==

= 5.7.1 - August 31 2024 =

#### Improvements

* Added icon.svg
* Updated meta
* Tested up to WP 6.6

= 5.7.0 - June 06 2024 =

#### Feature

* Added a filter to grid template columns

#### Templates changed

* `sc-grid.php`

= 5.6.1 - March 28 2024 =

#### Improvement

* Moved js and src into assets folder

#### Bugfix

* Tab-scroller
* Term field name to slug

#### Update

* Update checker 5.4

= 5.6.0 - January 17 2024 =

#### Feature

* Rewrite locate template script to skip -main suffix in child folder

#### Improvement

* Removed -main branch suffix from plugin's folder. This does not affect existing bs-grid-main installations.
* Change text-muted to text-body-secondary
* Add nav-scroller to tabs
* Classes in hero templates

#### Bugfix

* Remove duplicate `<p>` in sc-list.php

#### Update

* Update checker 5.3

= 5.5.0 - November 30 2023 =

#### Improvement

* Removed extract function and increase security

#### Bugfix

* Possibility to get non published posts

#### Update

* Update checker 5

= 5.4.0 - September 19 2023 =

#### Feature

* Ability to disable certain information

#### Improvement

* Delete enqueued CSS file and add tags-heading-none class to hero
* Switch to Vanilla JS

= 5.3.4 - August 27 2023 =

#### Bugfix

* Downgrade to plugin checker v4

= 5.3.3 - August 26 2023 =

#### Improvement

* Deny direct access

#### Bugfix

* Hero tag badges

#### Update

* Plugin update checker

= 5.3.2 - June 08 2023 =

#### Feature

* Add composer.json

= 5.3.1 - April 26 2023 =

#### Improvement

* Replace PHP echo's with shorthand

= 5.3.0 - March 31 2023 =

#### Improvement

* Loop cards

= 5.2.3.0 - December 06 2022 =

#### Feature

* Tabs template

#### Improvement

* Removed data-bs-parent from Accordion


= 5.2.2.0 - July 04 2022 =

#### Feature

* Added new accordion template

= 5.2.1.0 - June 29 2022 =

#### Feature

* Added new hero template

#### Improvement

* Reformatted all files

= 5.2.0.0 - January 10 2022 =

#### Feature

* Added shortcode to show single items by id
* Added shortcode for custom post types by terms-slug

#### Removed

* Shortcode for CPT by parent terms id

#### Update

* Template sc-grid.php
* Template sc-list.php

= 5.1.0.0 - September 13 2021 =

#### Feature

* Update checker
* Shows Custom Post Types

#### Update

* MIT License
* Repository name
* Shortcodes

= 5.0.0.1 - February 16 2021 =

#### Feature

* Override templates in child-theme 

= 5.0.0.0 - February 02 2021 =

* Initial release
