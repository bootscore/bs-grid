=== bS Grid ===

Contributors: Bastian Kreiter

Requires at least: 4.5
Tested up to: 5.8.1
Requires PHP: 5.6
Stable tag: 5.1.0.0
License: MIT License
License URI: https://github.com/bootscore/bs-grid/blob/main/LICENSE

Post / Page / Custom Post Type Grid or List for bootScore WordPress Theme, Copyright 2020 - 2021 The bootScore Contributors.


== Credits ==

    - Plugin Update Checker, YahnisElsts, MIT License https://github.com/YahnisElsts/plugin-update-checker/blob/master/license.txt


== Installation ==

1. In your admin panel, go to Plugins > and click the Add New button.
2. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
3. Click Activate to use your new Plugin right away.


== Usage ==

    = Posts =

        Use a shortcode like this to display posts somewhere:

        [bs-grid type="post" category="sample-category" order="ASC" orderby="title" posts="12"]

        [bs-list type="post" category="sample-category, test-category" order="DESC" orderby="date"]

        Options:

        category: category slug - Multiple categories separated by commas
        order: ASC or DESC
        orderby: date or title
        posts: number of posts to display

    = Pages =

        Use a shortcode like this to display child pages somewhere:

        [bs-grid type="page" post_parent="413" order="ASC" orderby="title" posts="6"]

        [bs-list type="page" post_parent="45" order="DESC" orderby="date"]

        Options:

        post_parent: ID of your parent page
        order: ASC or DESC
        orderby: date or title
        posts: number of pages to display

    = Custom Post Types =

        Use a shortcode like this to display custom post types somewhere:

        [bs-grid type="isotope" tax="isotope_category" cat_parent="6" order="DESC" orderby="date" posts="10"]

        [bs-list type="isotope" tax="isotope_category" cat_parent="6" order="DESC" orderby="date" posts="10"]

        Options:

        type: type of custom post type
        tax: taxonomy
        cat_parent: ID of parent taxonomy
        order: ASC or DESC
        orderby: date or title
        posts: number of posts to display 


== Changelog ==

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