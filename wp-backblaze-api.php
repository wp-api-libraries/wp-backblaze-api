<?php
/**
 * WP-Backblaze-API
 *
 * @package WP-API-Libraries\WP-Backblaze-API
 */
/*
* Plugin Name: WP Backblaze API
* Plugin URI: https://github.com/wp-api-libraries/wp-backblaze-api
* Description: Perform API requests to Backblaze in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Text Domain: wp-backblaze-api
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-backblaze-api
* GitHub Branch: master
*/
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! class_exists( 'BackBlazeApi' ) ) {

	/**
	 * BackBlazeApi class.
	 */
	class BackBlazeApi {
		
		
		/**
		 * URL to the API.
		 *
		 * @var string
		 */
		private $base_uri = 'https://api.backblazeb2.com/b2api/v1/';

		/**
		 * Constructor.
		 *
		 * @param string $api_key  API key to the account.
		 */
		public function __construct( $api_key ) {
			
		}


		public function authorize_account( $account_id, $app_key ) {

		}

		public function cancel_large_file( $large_file_id ) {

		}

		public function create_bucket( $account_id, $bucket_name, $bucket_type, $bucket_info = '', $lifecycle_rules = '' ) {

		}

		public function delete_bucket( $account_id, $bucket_id ) {

		}

		public function delete_file_version( $file_name, $file_id ) {

		}

		public function download_file_by_id() {

		}

		public function download_file_by_name() {

		}

		public function get_download_authorization( $bucket_id, $file_name_prefix, $valid_duration_in_seconds ) {

		}

		public function finish_large_file( $file_id, $part_sha1_array ) {

		}

		public function get_file_info( $file_id ) {

		}

		public function get_upload_part_url( $file_id ) {

		}

		public function get_upload_url( $bucket_url ) {

		}

		public function hide_file( $bucket_id, $file_name ) {

		}

		public function list_buckets( $account_id ) {

		}

		public function list_file_names() {

		}

		public function list_file_versions( $bucket_id, $start_file_name, $start_file_id, $max_file_count, $prefix, $delimiter ) {

		}

		public function list_parts() {

		}

		public function list_unfinished_large_files() {

		}

		public function start_large_file() {

		}

		public function update_bucket() {

		}

		public function upload_file() {

		}

		public function upload_part() {

		}

	}
}