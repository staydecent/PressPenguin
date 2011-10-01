# PressPenguin
## Lightweight WordPress Theme Framework
A simple, lightweight theme framework for creating WordPress themes faster. I've compiled the code I always use in developing WordPress themes as well as a few plugins that I almost always include.

### Markup

The markup is cleanm, semantic html5.

### CSS

Stylesheets for layout are absent as this is meant as a framework to develop custom themes with. Only the most basic css declarations that always find their way into my themes are included, as well as blank stylesheets for ie, print, and a reset.

I've found that the comments section is usually left until later in the process, so I've also included a stylesheet for the comments area from the Twentyten theme just to get the comments going faster.

### Plugins

I've included a list of plugins that have proven themselves crucials to many sites. This list will be actively maintained.

### functions.php

The functions.php file is stripped of a lot of fat, and includes a function for custom excerpt lengths with a custom 'Read More' link.

### Custom Fields

I've included a set of functions for retrieving and displaying content from custom fields. Use as following:

    custom_field('field name', 'format', 'date format');  

	get_custom_field($args);
	
Field = required
Format = optional
Date Format = optional

For more info see http://www.littlepenguinstudio.com/2011/08/23/fetch-custom-field-values

### NOTE:
Remember, never use "admin" as a username, and always rename your table prefix in wp_config.php