<?php
// wp api custom endpoints
add_action('rest_api_init', 'rg_register_routes');
function rg_register_routes () {
  register_rest_route('rg-mail/v1', 'contact', array(
    'methods' => WP_REST_Server::CREATABLE,
    'callback' => 'rg_serve_route'
  ));
  register_rest_route('rg-mail/v1', 'sponsorship', array(
    'methods' => WP_REST_Server::CREATABLE,
    'callback' => 'rg_serve_route_sponsorship'
  ));
  register_rest_route('rg-mail/v1', 'referral', array(
    'methods' => WP_REST_Server::CREATABLE,
    'callback' => 'rg_serve_route_referral'
  ));
}
// function for handling post request to new api route
function rg_serve_route () {
  require('wp-load.php');

  global $wpdb;

  $data = json_decode(file_get_contents("php://input"), true);
  $from = 'info@wordpress.com';
  $to = 'info@drhughesortho.com';
  $subject = 'API Contact Form';
  $headers = array('Content-Type: text/html; charset=UTF-8');
  $message = '<html><body>';
  $message .= '<p><h4><strong>Form Submission by: </strong></h4>' . $data['firstname'] . '' . $data['lastname'] . '</p>';
  $message .= '<p><h4><strong>Phone Number: </strong></h4>' . $data['phone'] . '</p>';
  $message .= '<p><h4><strong>Email Address: </strong></h4>' . $data['email'] . '</p>';
  $message .= '<p><h4><strong>Message:</strong></h4> ' . $data['message'] . '</p>';
  $message .= '</body></html>';

  $table_name = $wpdb->prefix . 'emails';

  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE IF NOT EXISTS $table_name (
    `id` mediumint(9) NOT NULL AUTO_INCREMENT,
    `email` text NOT NULL,
    `message` text NOT NULL,
    UNIQUE (`id`)
  ) $charset_collate;";

  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

  dbDelta( $sql );

  $wpdb->insert($table_name, array(
    'email' => (string)$data['email'],
    'message' => (string)$message
  ));

  $sent_message = wp_mail($to, $subject, $message, $headers);

  if ($sent_message) {
    echo 'Email has been received!';
  } else {
    echo 'Could not send email.';
  }
}

function rg_serve_route_sponsorship () {
  require('wp-load.php');

  global $wpdb;

  $data = json_decode(file_get_contents("php://input"), true);
  $from = 'info@wordpress.com';
  $to = 'info@drhughesortho.com';
  $subject = 'API Contact Form';
  $headers = array('Content-Type: text/html; charset=UTF-8');
  $message = '<html><body>';
  $message .= '<p><h4><strong>Form Submission by: </strong></h4>' . $data['firstname'] . ' ' . $data['lastname'] . '</p>';
  $message .= '<p><h4><strong>Email Address: </strong></h4>' . $data['email'] . '</p>';
  $message .= '<p><h4><strong>Phone Number: </strong></h4>' . $data['phone'] . '</p>';
  $message .= '<p><h4><strong>When is it best to call you back?</strong></h4>' . $data['day'] . ' ' . $data['time'] . '</p>';
  $message .= '<p><h4><strong>Name of Organization: </strong></h4>' . $data['organization'] . '</p>';
  $message .= '<p><h4><strong>Name of Event: </strong></h4>' . $data['eventname'] . '</p>';
  $message .= '<p><h4><strong>Brief Description: </strong></h4>' . $data['description'] . '</p>';
  $message .= '<p><h4><strong>How much money requested and what is it for? </strong></h4>' . $data['moneyrequested'] . '</p>';
  $message .= '</body></html>';

  $table_name = $wpdb->prefix . 'emails';

  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE IF NOT EXISTS $table_name (
    `id` mediumint(9) NOT NULL AUTO_INCREMENT,
    `email` text NOT NULL,
    `message` text NOT NULL,
    UNIQUE (`id`)
  ) $charset_collate;";

  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

  dbDelta( $sql );

  $wpdb->insert($table_name, array(
    'email' => (string)$data['email'],
    'message' => (string)$message
  ));

  $sent_message = wp_mail($to, $subject, $message, $headers);

  if ($sent_message) {
    echo 'Email has been received!';
  } else {
    echo 'Could not send email.';
  }
}

function rg_serve_route_referral () {
  require('wp-load.php');

  global $wpdb;

  $data = json_decode(file_get_contents("php://input"), true);
  $from = 'info@wordpress.com';
  $to = 'info@drhughesortho.com';
  $subject = 'API Contact Form';
  $headers = array('Content-Type: text/html; charset=UTF-8');
  $message = '<html><body>';
  $message .= '<p><h4><strong>Form Submission by: </strong></h4>' . $data['doctorname'] . '</p>';
  $message .= '<p><h4><strong>Patient Name: </strong></h4>' . $data['patientname'] . '</p>';
  $message .= '<p><h4><strong>Phone Number: </strong></h4>' . $data['phone'] . '</p>';
  $message .= '<p><h4><strong>Email Address: </strong></h4>' . $data['email'] . '</p>';
  $message .= '<p><h4><strong>Message:</strong></h4> ' . $data['message'] . '</p>';
  $message .= '</body></html>';

  $table_name = $wpdb->prefix . 'emails';

  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE IF NOT EXISTS $table_name (
    `id` mediumint(9) NOT NULL AUTO_INCREMENT,
    `email` text NOT NULL,
    `message` text NOT NULL,
    UNIQUE (`id`)
  ) $charset_collate;";

  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

  dbDelta( $sql );

  $wpdb->insert($table_name, array(
    'email' => (string)$data['email'],
    'message' => (string)$message
  ));

  $sent_message = wp_mail($to, $subject, $message, $headers);

  if ($sent_message) {
    echo 'Email has been received!';
  } else {
    echo 'Could not send email.';
  }
}
