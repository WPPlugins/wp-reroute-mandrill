=== WP Reroute Mandrill ===
Contributors: rexak
Tags: mandrill,wpmandrill,reroute,development,rex
Requires at least: 3.8
Tested up to: 4.4
License: GPL2
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.txt

Reroutes All Mail going through the wpMandrill Plugin to an email address of your choice.

== Description ==
Install wpMandrill first! :)
I use this in my personal localhost development flow, to allow emails to be sent out from a local install. Thought I\'d share it with you and make it an easy install for developers.

Basically, make sure the wpMandrill plug is installed, setup, and running on your local install.
Add this plug-in, and edit line 27 with the development email address that you would like ALL Mandrill mail to be routed to.

This plug in will not reroute other plugs, like Mailpoet, that use their own mail handling or SMTP intercepts.

It works great for things like normal Wordpress emails (password reminders, new users, etc,) Woocommerce, or anything that uses wp_mail to send.

== Installation ==
-Make sure wpMandrill is installed and setup first.
-Install this plugin from the Wordpress Plugins repository, or unzip a downloaded copy to your /wp-content/plugins folder
-edit line 27 in the plugin file to add your own reroute to address (e.g. yourdevemail@yourpersonemailaddress.com)
-Activate
-donate to me in some way so I can bask in the hella profitable world of Worpdress!

== Frequently Asked Questions ==
Q: Why you so stupid?
A: You worry \'bout yourself!

== Changelog ==
0.1.0 First beta release.