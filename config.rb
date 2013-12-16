# This file is only needed for Compass/Sass integration.

# Location of the theme's resources.
css_dir         = "css"
sass_dir        = "sass"
extensions_dir  = "sass-extensions"
images_dir      = "images"
javascripts_dir = "js"

# Production or Develoment Enviroment
environment = :production

# Sass Comments
line_comments = false

# Comment output_style = :expanded or :nested or :compact or :compressed
output_style = (environment == :development) ? :nested : :nested

