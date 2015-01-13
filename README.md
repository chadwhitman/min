CONTENTS OF THIS FILE
---------------------
* Introduction
* Required Modules
* Installation
* Configuration for:
	* Default theme settings
	* Article post settings
	* Article image settings
	* Adding pages to the menu
	* Adding Google Analytics
* Troubleshooting & FAQ
* Maintainers

INTRODUCTION
---------------------

Min is a single-column, minimalist, content-focused 
theme for Drupal 7. This theme is geared towards content 
creators who are looking for a blogging theme that requires 
relatively few customizations or extra modules to get started.

Features:
* Single-column.
* Responsive.
* Minimalist, clean design.
* Content-centered.
* HTML5 / CSS3 based.
* SASS/SCSS integration.
* Google font integration.
* Support for standard Drupal theme features like 
  site-logo, site name, comments and RSS feed.
  
Example: http://mintheme.net

Current Drupal Sandbox: https://www.drupal.org/sandbox/c-whitman/2157739

REQUIRED MODULES
---------------------

The Date module is required
  * Date (https://www.drupal.org/project/date)

INSTALLATION
---------------------

Install as you would normally install a contributed Drupal theme. See:
https://www.drupal.org/getting-started/install-contrib/themes for further
instructions.


CONFIGURATION
---------------------

* Default Theme Settings:
  * Custom Logo/Portrait: In the admin menu, click "Appearance," then "settings" 
    under the Min theme. Find the "Logo Image Settings" option. 
    Uncheck "Use the default logo." Upload your custom image.
  * Site Name & Number of Posts: In the admin menu, click "Configuration," 
    then click on the item called "Site information." Set preferences.
  * Remove default blocks from homepage: In the admin menu, click "Structure," 
    then click "Blocks." In the region drop-down list, select the "None" option
    for the block you want moved.

* Article Post Settings
  * Article: You can use Drupal's default "Article" content type to start 
    creating posts. (This content type includes a tag field and an image 
    upload field)
  * Date field: If you use the date module, you should create a new field 
    in the Article content type; use the "Date" option from the field-type 
    drop-down list. Set the date field display to "short" in both default 
    and teaser displays.
  
* Article Post Image Settings
  * In the Article content type, set the display on both the teaser and 
    default view for the image field to "None (original size)," so that 
    no cropping or scaling occurs.

* Adding pages to menu
  * When you create a new page, click the "Provide a menu link" checkbox at the 
    bottom of the page form.

* Google Analytics
  * You can add your Google Analytics ID in the 'html.tpl.php' template file.

TROUBLESHOOTING & FAQ
---------------------

* Ideally, you will only want to add a maximum of three to four menu items;
  the more you add, the more it might look squished on mobile devices.

* If you create your new date field using the date module, you will probably 
  want to uncheck seconds, minutes and hours from the 
  date-attributes-to-collect option.
  
* Your date field may default to "hidden" in teaser view. In 
  the "manage display" option for the date field simply move the field out of 
  the hidden section and into the display section.
  
MAINTAINERS
---------------------

Current maintainers:
* Chad Whitman - https://www.drupal.org/u/chadwhitman
