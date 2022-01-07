# bS Grid

WordPress plugin to show posts, child-pages or custom post types in grid or list cards in bootScore theme.

Demo: https://bootscore.me/plugins/bs-grid/

Documentation: https://bootscore.me/documentation/bs-grid/

## Installation

1. Download the zip file right here by pressing the green `code` button above or get plugin through the official [store](https://bootscore.me/shop/products/theme/bs5-grid/) (free). 
2. In your admin panel, go to Plugins > and click the Add New button.
3. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
4. Click Activate to use your new Plugin right away.

## Usage

### Posts

Use shortcode to show posts:

#### Grid: 

`[bs-grid type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]`   

#### List:

` [bs-list type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]`

#### Options:

- category: category-slug, multiple categories separated by comma
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of posts to show

### Pages

Use shortcode to show child pages:

#### Grid:

`[bs-grid type="page" post_parent="21" order="ASC" orderby="title" posts="6"]`

#### List:
`[bs-list type="page" post_parent="21" order="ASC" orderby="title" posts="6"]`

#### Options:

- post_parent: ID of parent page
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of pages to show

### Custom Post Types

Use shortcode to show custom post types:

#### Grid:

`[bs-grid type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]`

#### List:

`[bs-list type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]`

#### Options:

- type: type of custom post type
- tax: taxonomy
- terms: terms-slug, multiple terms separated by comma
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of custom post types to show 

## Overriding templates via theme

Template files can be found within the /bs-grid-main/templates/ plugin directory.

Edit files in an upgrade-safe way using overrides. Copy the template into a directory within your theme named /bs-grid-main keeping the same file structure but removing the /templates/ subdirectory. Path must be `/your-theme/bs-grid-main/[file].php`.

The copied file will now override the bS Grid template file. Change cards, classes or HTML as you want.

### Templates that can be overwritten:

- sc-grid.php
- sc-list.php


## License & Credits

- bS Grid, MIT License https://github.com/bootscore/bs-grid/blob/main/LICENSE
- Plugin Update Checker, YahnisElsts, MIT License https://github.com/YahnisElsts/plugin-update-checker/blob/master/license.txt
