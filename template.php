<?php

/**
 * @file
 * Implements template_prepocess_html
 */

function min_preprocess_html(&$variables) {
  // Add Css
  drupal_add_css(
  'http://fonts.googleapis.com/css?family=Lato',
  array('type' => 'external', 'description' => 'add Lato')
  );
  // Add Css
  drupal_add_css(
  'http://fonts.googleapis.com/css?family=Crimson+Text',
  array('type' => 'external', 'description' => 'add Crimson')
  );
}
