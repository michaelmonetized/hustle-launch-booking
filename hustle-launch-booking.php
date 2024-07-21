<?php

/**
 * Plugin Name: Hustle Launch Booking
 * Plugin URI: https://github.com/hustlelaunch/hustle-launch-booking
 * Description: A simple wordpress plugin for booking appointments for a service with a staff member. Connects to google calendar to retrieve the staff member's availability. (optional) more: https://github.com/hustlelaunch/hustle-launch-booking
 * Version: 0.0.1-alpha
 * Author: Hustle Launch
 * Author URI: https://www.hustlelaunch.com
 * License: MIT
 * License URI: https://github.com/hustlelaunch/hustle-launch-booking/blob/master/LICENSE.md
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// Load the plugin
require 'vendor/autoload.php';

// install
function hustle_launch_booking_install()
{
  $installed = get_option('hustle_launch_booking_installed');
  if ($installed) {
    return;
  }
  update_option('hustle_launch_booking_installed', true);
  add_option('hustle_launch_booking_settings', array(
    'api_key' => '',
  ));
}

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

// add database tables
function hustle_launch_booking_install_tables()
{
  global $wpdb;
  $table_name = $wpdb->prefix . 'hustle_launch_booking_service';
  $charset_collate = $wpdb->get_charset_collate();
  $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      name varchar(255) NOT NULL,
      description text NOT NULL,
      availability_days varchar(255) NOT NULL,
      availability_duration varchar(255) NOT NULL,
      staff_selection varchar(255) NOT NULL,
      PRIMARY KEY  (id)
  ) $charset_collate;";
  dbDelta($sql);
  $table_name = $wpdb->prefix . 'hustle_launch_booking_staff';
  $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      name varchar(255) NOT NULL,
      description text NOT NULL,
      availability_days varchar(255) NOT NULL,
      availability_duration varchar(255) NOT NULL,
      service_ids varchar(255) NOT NULL,
      PRIMARY KEY  (id)
  ) $charset_collate;";
  dbDelta($sql);
}
