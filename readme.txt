=== bS Grid ===

Contributors: Bastian Kreiter, torricelli

Requires at least: 4.5
Tested up to: 5.8.3
Requires PHP: 5.6
Stable tag: 5.2.0.0
License: MIT License
License URI: https://github.com/bootscore/bs-grid/blob/main/LICENSE

Post / Page / Custom Post Type Grid or List for bootScore WordPress Theme, Copyright 2020 - 2022 The bootScore Contributors.


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
    
    Options:

    category: category-slug - Multiple categories separated by comma
    order: ASC or DESC
    orderby: date or title
    posts: number of posts to display  
    
    
  = Child-pages by parent-page id = 

    [bs-grid type="page" post_parent="21" order="ASC" orderby="title" posts="6"]
    [bs-list type="page" post_parent="21" order="ASC" orderby="title" posts="6"]

    Options:

    post_parent: ID of your parent page      
    order: ASC or DESC
    orderby: date or title
    posts: number of pages to display
        
      
  = Custom post types by terms-slug =

    [bs-grid type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]
    [bs-list type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]

    terms: terms-slug - Multiple terms separated by comma
    order: ASC or DESC
    orderby: date or title
    posts: number of posts to display 


  = Single items by id =
  
    Posts
    [bs-grid type="post" id="1, 15"]
    [bs-list type="post" id="1, 15"]
    
    Pages
    [bs-grid type="page" id="2, 25"]
    [bs-list type="page" id="2, 25"]
    
    Custom post types
    [bs-grid type="isotope" id="33, 31"]
    [bs-list type="isotope" id="33, 31"]

    
== Changelog ==

    = 5.2.0.0 - January 10 2022 =
    
        * [NEW] Added shortcode to show single items by id
        * [NEW] Added shortcode for custom post types by terms-slug
        * [REMOVED] Shortcode for CPT by parent terms id

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
