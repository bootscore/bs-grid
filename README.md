# bS Grid

WordPress plugin to show posts, pages or custom-post-types in grid / list cards or a hero via shortcode in bootScore theme.

- Demo and documentation: https://bootscore.me/documentation/bs-grid/

<img src="https://lh3.googleusercontent.com/pw/AM-JKLUxNADNzUEZvT53A8bP1QXSGubd4GEHdhPZw4wx3IsCu0A4XT7uM0SNBfrTzplvmE9jFBXr_Twytum2cWrDg0Scgroha0IRcp_73Y6NL3GZUrOlVbeL4-WeQS-UbXL2JVmLxjqq7JFdDTbPXivTtJsjRg=w1904-h1530-no" alt="bs-grid">

## Installation
1. Download latest release [bs-grid-main.zip](https://github.com/bootscore/bs-grid/releases). 
2. In your admin panel, go to Plugins > and click the Add New button.
3. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
4. Click Activate to use your new Plugin right away.

## Usage

Select template you want to use by replacing `bs-*` placeholder in shortcode examples.

- `bs-grid` shows items in 4 (xxl), 3 (lg), 2 (md) and 1 (sm) column cards.
- `bs-list` shows items in 1 column vertical cards (md) and flip into 1 column horizontal cards (lg).
- `bs-hero` shows hero items with background-images. 

## Posts

### Shortcode to show posts by category
`[bs-* type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]`   

#### Options
- category: category-slug, multiple categories separated by comma
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of posts to show

### Shortcode to show posts by tags
`[bs-* type="post" tax="post_tag" terms="bikes, motorbikes" order="DESC" orderby="date" posts="5"]`

#### Options
- tax: taxonomy (post_tag)
- terms: tags-slug, multiple terms separated by comma
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of posts to show

### Shortcode to show single posts by id
`[bs-* type="post" id="1, 15"]`

#### Options
- id: id of post, multiple ids separated by comma 

## Pages

### Shortcode to show child-pages by parent-page id
`[bs-* type="page" post_parent="21" order="ASC" orderby="title" posts="6"]`

Showing child-pages in parent-page is very useful to avoid empty parent-pages.

#### Options
- post_parent: id of parent-page
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of pages to show

### Shortcode to show single pages by id
`[bs-* type="page" id="2, 25"]`

#### Options
- id: id of page, multiple ids separated by comma 

## Custom Post Types

### Shortcode to show custom-post-types by terms
`[bs-* type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]`

#### Options:
- type: type of custom-post-type
- tax: taxonomy
- terms: terms-slug, multiple terms separated by comma
- order: ASC or DESC
- orderby: date, title, or rand
- posts: amount of custom-post-types to show 

### Shortcode to show single custom-post-types by id
`[bs-* type="isotope" id="33, 31"]`

#### Options
- id: id of custom-post-type, multiple ids separated by comma 

## Overriding templates via theme
Template files can be found within the **/bs-grid-main/templates/** plugin directory.

Edit files in an upgrade-safe way using overrides. Copy the template into a directory within your theme named **/bs-grid-main/** keeping the same file structure but removing the **/templates/** subdirectory. Path must be **/your-theme/bs-grid-main/[file].php**.

The copied file will now override the bS Grid template file. Change cards, classes or HTML as you want.

### Templates that can be overridden
- sc-grid.php
- sc-list.php
- sc-hero.php

## License & Credits
- bS Grid, MIT License https://github.com/bootscore/bs-grid/blob/main/LICENSE
- Plugin Update Checker, YahnisElsts, MIT License https://github.com/YahnisElsts/plugin-update-checker/blob/master/license.txt
