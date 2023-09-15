=== bS Grid ===

Contributors: Bastian Kreiter, torricelli, Dog Byte Marketing

Stable tag: 5.3.4
Tested up to: 6.3
Requires at least: 5.0
Requires PHP: 5.6
License: MIT License
License URI: https://github.com/bootscore/bs-grid/blob/main/LICENSE

Post / Page / Custom Post Type Grid, List or Hero for bootScore WordPress Theme, Copyright 2020 - 2022 The bootScore Contributors.

License URI: https://github.com/bootscore/bs-swiper/blob/main/LICENSE

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

    
== Changelog ==

    = 5.4.0 - September 18 2023 =


        * [FEATURE] Ability to disable certain information #24
        * [IMPROVEMENT] Delete enqueued CSS file and add tags-heading-none class to hero 20cb295
        * [IMPROVEMENT] Switch to Vanilla JS #26

    = 5.3.4 - August 27 2023 =
    
        * [BUGFIX] Downgrade to plugin checker v4

    = 5.3.3 - August 26 2023 =
    
        * [BUGFIX] Hero tag badges #19
        * [IMPROVEMENT] Deny direct access #20
        * [UPDATE] Plugin update checker #21

    = 5.3.2 - June 08 2023 =

        * [FEATURE] Add composer.json

    = 5.3.1 - April 26 2023 =

        * [IMPROVEMENT] Replace PHP echo's with shorthand

    = 5.3.0 - March 31 2023 =

        * [IMPROVEMENT] Loop cards

    = 5.2.3.0 - December 06 2022 =

        * [IMPROVEMENT] Removed data-bs-parent from Accordion
        * [NEW] Tabs template

    = 5.2.2.0 - July 04 2022 =
    
        * Added new accordion template

    = 5.2.1.0 - June 29 2022 =
    
        * Added new hero template
        * Reformatted all files

    = 5.2.0.0 - January 10 2022 =
    
        * [NEW] Added shortcode to show single items by id
        * [NEW] Added shortcode for custom post types by terms-slug
        * [REMOVED] Shortcode for CPT by parent terms id
        * [CHANGED] Template sc-grid.php
        * [CHANGED] Template sc-list.php

    = 5.1.0.0 - September 13 2021 =
    
        * [NEW] Update checker
        * [NEW] Shows Custom Post Types
        * [CHANGED] MIT License
        * [CHANGED] Repository name
        * [CHANGED] Shortcodes

    = 5.0.0.1 - February 16 2021 =
    
        * [NEW] Override templates in child-theme 

    = 5.0.0.0 - February 02 2021 =
    
        * Initial release
