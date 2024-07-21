# Hustle Launch Booking Plugin for Wordpress v0.0.1-alpha

## Overview

This is a simple wordpress plugin for booking appointments for a service with a staff member.

Connects to google calendar to retrieve the staff member's availability. (optional)

## Installation

- Download the plugin
- Upload the plugin to your wordpress site
- Activate the plugin

## Usage

- Go to the plugin settings page /wp-admin/hustle-launch/booking/settings/
- Enter the google calendar api key
- Add a service /wp-admin/hustle-launch/booking/add/service/
- Add a staff member /wp-admin/hustle-launch/booking/add/staff/
- Connect the staff member's google calendar via oauth /wp-admin/hustle-launch/booking/staff/{id}/connect/
- Add the service to the staff member /wp-admin/hustle-launch/booking/staff/{id}/edit/
- Set service availability days of the week and slot duration /wp-admin/hustle-launch/booking/services/{id}/edit/
- Set the staff member's availability /wp-admin/hustle-launch/booking/staff/{id}/edit/
- Embed the booking shortcode in a page, post or widget /wp-admin/hustle-launch/booking/embed/
- Add more staff members and/or services as needed /wp-admin/hustle-launch/booking/add/
- Set per service if the staff member is chosen randomly, on rotation, by priority or manually by the visitor /wp-admin/hustle-launch/booking/services/{id}/edit/
