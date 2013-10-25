Font Awesome Shortcodes for WordPress
===

This is a plugin for WordPress that adds shortcodes for easier use of the Font Awesome icons in your content.

## Requirements
This plugin won't do anything if you don't have website built with [Font Awesome](http://fortawesome.github.io/Font-Awesome/). **The plugin does not include Font Awesome**.

The plugin is tested to work with ```Font Awesome version 3.2.1``` and ```WordPress 3.6```.

## Installation
To install this plugin, just download it, and drop the folder in the ```wp-content/plugins/```. Then login to WordPress and activate the plugin.

## Supported shortcodes

* [Icons](#icons)
* [Icon Stacks](#icon-stacks)

## Usage

### Icons
	[fa-icon type="exclamation"]

Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
type | The type of icon you want to display | required | See Font Awesome docs | none
size | Icon size | optional | lg, 2x 3x, 4x, 5x | false
muted | Whether the font is displayed using the "muted" style | optional | true, false | false
border | Whether the font is displayed using the "bordered" style | optional | true, false | false
spin | Whether the font is displayed spinning | optional | true, false | false
list-item | Set "true" if the icon is within a list item for better spacing | optional | true, false | false
fixed-width | Set "true" if the icon should keep a fixed width for spacing in a menu | optional | true, false | false
rotate | Rotate the icon a number of degrees | optional | normal, 90, 180, 270 | false
flip | Flip the icon vertically or horizontally | optional | vertical, horizontal | false
stack-size | If this icon is in a stack, what size is it? | optional | lg, 2x 3x, 4x, 5x | false
inverse | Whether this icon's color should be inverted (useful in stacks) | optional | true, false | false
xclass | Any extra classes you want to add | optional | any text | none

[Icon Reference](http://fortawesome.github.io/Font-Awesome/cheatsheet/).


### Icon Stacks
	[fa-icon-stack] 
        [fa-icon type="circle" stack-base="true"]
        [fa-icon type="flag"]
    [/fa-icon-stack]

Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
size | Icon size | optional | lg, 2x 3x, 4x, 5x | false
xclass | Any extra classes you want to add | optional | any text | none

[Font Awesome documentation](http://fortawesome.github.io/Font-Awesome/examples/).


