Min Theme: A Personal Blog theme for Drupal 7 //
Description: Min is a minimal, responsive, single-column, content based theme. //
Uses: HTML5 Boilerplate, SASS/SCSS, Normalize.css
--------------------------------------------

OVERVIEW
---------------------

Min theme is designed for the purpose of being a personal blog that looks and functions like the demo image found here "/demo-image/demo-screenshot.png."

Min theme is not a "base theme" or "starter theme," in that it has been designed to be easily transformed into any kind of website.

You can use the default "Article" content type to start posting blogs or you can create your own content type and
view page and set the homepage (via the site configuration) to your view page's url.

I'd recommend setting the teaser body field to 1200 characters, which you can find
at this url "/admin/structure/types/manage/article/display/teaser."


DISABLE THE OVERLAY TO USE THE HELP URLS IN THIS README FILE
---------------------

On the admin toolbar, click "Modules."

In the Core section, disable the Overlay module.

Click Save Configuration.


INSTALLING MIN
----------------------

Download the Min theme.

Unzip and place in your site's "sites/all/themes" directory.

Log into your site and go to the "Appearance" page (url: "/admin/appearance") -  Min should be listed.

Click the 'Enable and set default' link for Min.


REMOVING BLOCKS FROM HOMEPAGE
----------------------

On the admin toolbar, click "Structure," then click "Blocks."

To remove a block from a region, in the region drop-down list, select the "None" option.


MODULES REQUIRED IF YOU WANT TO ADD A DATE TO EACH POST
----------------------

Date: http://drupal.org/project/date

Unzip the module and place it in your site's "sites/all/modules" directory.

Enable the module on the Module page. (url: "/admin/modules")

Once the module is enabled, click on the admin menu item "Structure," then click the "Content Types" option.

Click on the "manage fields" item in the "Article" row.

Add a new field label, type and widget for the Date field. (url: "admin/structure/types/manage/article/fields")

You can also manage the display of the "Article" fields here: "admin/structure/types/manage/article/display."


CHANGING THE DEFAULT LOGO
----------------------

In Min's theme settings (url: "/admin/appearance/settings/min"), find the "Logo Image Settings" option.

Uncheck "Use the default logo."

Upload your custom image.


SETTING YOUR SITE's NAME & NUMBER OF POSTS PER PAGE
----------------------

Click on the admin menu item "Configuration," then click on the item called "Site information." (url: "/admin/config/system/site-information")

Here you can input your Site's Name, Slogan (which will show in the browser's heading title), and set
the number of posts per page.


ADDING A POST
----------------------

Click on the admin menu item "Add Content," then click on the item called "Article."


GOOGLE ANALYTICS
----------------------

You can add your Google Analytics ID in the html.tpl.php template file.
