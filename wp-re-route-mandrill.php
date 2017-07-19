<?php


	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	} // Exit if accessed directly
	/**
	 * Plugin Name: WP Reroute Mandrill
	 * Plugin URI: http://leah.ellasol.com/wp-reroute-mandrill.zip
	 * Description: Method to reroute Mandrill Mail for development testing.
	 * Version: 0.1.0
	 * Author: Rex Keal
	 * Author URI: http://ellasol.com
	 * License: GPL2
	 */

// Look, this is my first time out - this is still beta stuff :)

	// Check if WPMandrill is active:


		//do the work:
		add_filter( 'mandrill_payload', 'intercept_and_reroute_mandrill', 99 );
		function intercept_and_reroute_mandrill( $message ) {

			// developers, set this to your dev email address:
			$dev_receiver = '';

			// check if developers have edited the address:
			if($dev_receiver == ''){return $message;}

			//get original receivers:
			foreach ( $message['to'] as $to ) {
				$original_to[] = $to;
			}

			//clear the mandrill receivers list:
			unset( $message['to'] );

			//set the new receiver:
			$message['to'][0]['email'] = $dev_receiver;

			//add a testing info to the message body:
			$message['html'] .= '<p>Dev testing!!!</p><p style="color:red;"><em> Intercepted for Development Testing</em></p>';
			$message['html'] .= '<p>Original Recipients:</p>';

			// add a list of the original receivers to the message body:
			foreach ( $original_to as $list ) {
				$message['html'] .= '<p>' . $list['email'] . '</p>';
			}

			// return new receiver and appended message:
			return $message;
		}


