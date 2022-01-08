# bS Grid

WordPress plugin to show posts, child-pages or custom post types in grid or list cards in bootScore theme.

- Demo: https://bootscore.me/plugins/bs-grid/
- Documentation: https://bootscore.me/documentation/bs-grid/

## Installation
1. Download the zip file right here by pressing the green `code` button above or get plugin through the official [store](https://bootscore.me/shop/products/theme/bs5-grid/) (free). 
2. In your admin panel, go to Plugins > and click the Add New button.
3. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
4. Click Activate to use your new Plugin right away.

## Usage

### Posts

#### Shortcodes to show posts by category

##### Grid
`[bs-grid type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]`   

##### List
`[bs-list type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]`

##### Options
- category: category-slug, multiple categories separated by comma
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of posts to show

#### Shortcodes to show posts by tags

##### Grid
`[bs-grid type="post" tax="post_tag" terms="bikes, motorbikes" order="DESC" orderby="date" posts="5"]`

##### List
`[bs-grid type="post" tax="post_tag" terms="bikes, motorbikes" order="DESC" orderby="date" posts="5"]`

##### Options
- tax: taxonomy (post_tag)
- terms: tags-slug, multiple terms separated by comma
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of posts to show

#### Shortcodes to show single posts by id

##### Grid
`[bs-grid type="post" id="1, 15"]`

##### List
`[bs-list type="post" id="1, 15"]`

##### Options
- id: id of post, multiple ids separated by comma 

### Pages

#### Shortcodes to show child-pages by parent-page id

##### Grid
`[bs-grid type="page" post_parent="21" order="ASC" orderby="title" posts="6"]`

##### List
`[bs-list type="page" post_parent="21" order="ASC" orderby="title" posts="6"]`

##### Options
- post_parent: ID of parent page
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of pages to show

#### Shortcodes to show single pages by id

##### Grid
`[bs-grid type="page" id="2, 25"]`

##### List
`[bs-list type="page" id="2, 25"]`

##### Options
- id: id of page, multiple ids separated by comma 

### Custom Post Types

#### Shortcodes to show custom post types by terms

##### Grid:
`[bs-grid type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]`

##### List:
`[bs-list type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]`

##### Options:
- type: type of custom post type
- tax: taxonomy
- terms: terms-slug, multiple terms separated by comma
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of custom post types to show 

#### Shortcodes to show single custom post types by id

##### Grid
`[bs-grid type="isotope" id="33, 31"]`

##### List
`[bs-grid type="isotope" id="33, 31"]`

##### Options
- id: id of custom post type, multiple ids separated by comma 

## Overriding templates via theme
Template files can be found within the /bs-grid-main/templates/ plugin directory.

Edit files in an upgrade-safe way using overrides. Copy the template into a directory within your theme named /bs-grid-main keeping the same file structure but removing the /templates/ subdirectory. Path must be `/your-theme/bs-grid-main/[file].php`.

The copied file will now override the bS Grid template file. Change cards, classes or HTML as you want.

### Templates that can be overridden
- sc-grid.php
- sc-list.php

## License & Credits
- bS Grid, MIT License https://github.com/bootscore/bs-grid/blob/main/LICENSE
- Plugin Update Checker, YahnisElsts, MIT License https://github.com/YahnisElsts/plugin-update-checker/blob/master/license.txt
