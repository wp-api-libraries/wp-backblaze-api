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

		
		/**
		 * Cancel Large File Transfer.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_cancel_large_file.html
		 * @param mixed $large_file_id
		 * @return void
		 */
		public function cancel_large_file( $large_file_id ) {
			
			// /b2_cancel_large_file

		}
		
		/**
		 * Create Bucket.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_create_bucket.html
		 * @param mixed $account_id
		 * @param mixed $bucket_name
		 * @param mixed $bucket_type
		 * @param string $bucket_info (default: '')
		 * @param string $lifecycle_rules (default: '')
		 * @return void
		 */
		public function create_bucket( $account_id, $bucket_name, $bucket_type, $bucket_info = '', $lifecycle_rules = '' ) {

		}
		
		/**
		 * Delete Bucket.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_delete_bucket.html
		 * @param mixed $account_id
		 * @param mixed $bucket_id
		 * @return void
		 */
		public function delete_bucket( $account_id, $bucket_id ) {

		}
		
		/**
		 * Delete File Version.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_delete_file_version.html
		 * @param mixed $file_name
		 * @param mixed $file_id
		 * @return void
		 */
		public function delete_file_version( $file_name, $file_id ) {

		}
		
		/**
		 * download_file_by_id function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_download_file_by_id.html
		 * @return void
		 */
		public function download_file_by_id() {

		}
		
		/**
		 * download_file_by_name function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_download_file_by_name.html
		 * @return void
		 */
		public function download_file_by_name() {

		}
		
		/**
		 * get_download_authorization function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_get_download_authorization.html
		 * @param mixed $bucket_id
		 * @param mixed $file_name_prefix
		 * @param mixed $valid_duration_in_seconds
		 * @return void
		 */
		public function get_download_authorization( $bucket_id, $file_name_prefix, $valid_duration_in_seconds ) {

		}
		
		/**
		 * finish_large_file function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_finish_large_file.html
		 * @param mixed $file_id
		 * @param mixed $part_sha1_array
		 * @return void
		 */
		public function finish_large_file( $file_id, $part_sha1_array ) {

		}
		
		/**
		 * get_file_info function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_get_file_info.html
		 * @param mixed $file_id
		 * @return void
		 */
		public function get_file_info( $file_id ) {

		}
		
		/**
		 * get_upload_part_url function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_get_upload_part_url.html
		 * @param mixed $file_id
		 * @return void
		 */
		public function get_upload_part_url( $file_id ) {

		}
		
		/**
		 * get_upload_url function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_get_upload_url.html
		 * @param mixed $bucket_url
		 * @return void
		 */
		public function get_upload_url( $bucket_url ) {

		}
		
		/**
		 * hide_file function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_hide_file.html
		 * @param mixed $bucket_id
		 * @param mixed $file_name
		 * @return void
		 */
		public function hide_file( $bucket_id, $file_name ) {

		}
		
		/**
		 * list_buckets function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_list_buckets.html
		 * @param mixed $account_id
		 * @return void
		 */
		public function list_buckets( $account_id ) {

		}
		
		/**
		 * list_file_names function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_list_file_names.html
		 * @return void
		 */
		public function list_file_names() {

		}
		
		/**
		 * list_file_versions function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_list_file_versions.html
		 * @param mixed $bucket_id
		 * @param mixed $start_file_name
		 * @param mixed $start_file_id
		 * @param mixed $max_file_count
		 * @param mixed $prefix
		 * @param mixed $delimiter
		 * @return void
		 */
		public function list_file_versions( $bucket_id, $start_file_name, $start_file_id, $max_file_count, $prefix, $delimiter ) {

		}
		
		/**
		 * list_parts function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_list_parts.html
		 * @param mixed $file_id
		 * @param mixed $start_part_number
		 * @param mixed $max_part_count
		 * @return void
		 */
		public function list_parts( $file_id, $start_part_number, $max_part_count ) {

		}
		
		/**
		 * list_unfinished_large_files function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_list_unfinished_large_files.html
		 * @param mixed $bucket_id
		 * @param mixed $start_file_id
		 * @param mixed $max_file_count
		 * @return void
		 */
		public function list_unfinished_large_files( $bucket_id, $start_file_id, $max_file_count ) {

		}
		
		/**
		 * start_large_file function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_start_large_file.html
		 * @param mixed $bucket_id
		 * @param mixed $file_name
		 * @param mixed $content_type
		 * @param string $file_info (default: '')
		 * @return void
		 */
		public function start_large_file( $bucket_id, $file_name, $content_type, $file_info = '' ) {

		}
		
		/**
		 * update_bucket function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_update_bucket.html
		 * @param mixed $account_id
		 * @param mixed $bucket_id
		 * @param mixed $bucket_type
		 * @param string $lifecycle_rules (default: '')
		 * @param string $if_revision_ls (default: '')
		 * @return void
		 */
		public function update_bucket( $account_id, $bucket_id, $bucket_type, $lifecycle_rules = '', $if_revision_ls = '' ) {

		}
		
		/**
		 * upload_file function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_upload_file.html
		 * @return void
		 */
		public function upload_file() {

		}
		
		/**
		 * upload_part function.
		 * 
		 * @access public
		 * @docs https://www.backblaze.com/b2/docs/b2_upload_part.html
		 * @return void
		 */
		public function upload_part() {

		}

	}
}