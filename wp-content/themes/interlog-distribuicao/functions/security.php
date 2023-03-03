<?php
if (!defined('ABSPATH')) {
  exit;
}

/*
  * Security Measures - Protect From Malicious Requests
*/
global $user_ID; if($user_ID) {
  if(!current_user_can('administrator')) {
    if (strlen($_SERVER['REQUEST_URI']) > 255 ||
      stripos($_SERVER['REQUEST_URI'], "eval(") ||
      stripos($_SERVER['REQUEST_URI'], "CONCAT") ||
      stripos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
      stripos($_SERVER['REQUEST_URI'], "base64")) {
        @header("HTTP/1.1 414 Request-URI Too Long");
        @header("Status: 414 Request-URI Too Long");
        @header("Connection: Close");
        @exit;
      }
  }
}

/*
  * Security Measures - Remove WordPress Version
*/
function wpbeginner_remove_version() {
  return '';
}
add_filter( 'the_generator', 'wpbeginner_remove_version' );

/*
  * Security Measures - Limit to Post Revisions
*/
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', false);