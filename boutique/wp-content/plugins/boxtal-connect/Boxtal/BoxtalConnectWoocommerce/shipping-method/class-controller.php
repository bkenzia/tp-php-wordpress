<?php
/**
 * Contains code for the shipping method controller class.
 *
 * @package     Boxtal\BoxtalConnectWoocommerce\Shipping_Method
 */

namespace Boxtal\BoxtalConnectWoocommerce\Shipping_Method;

use Boxtal\BoxtalConnectWoocommerce\Util\Misc_Util;
use Boxtal\BoxtalConnectWoocommerce\Util\Shipping_Method_Util;

/**
 * Controller class.
 *
 * Handles additional methods for the boxtal connect method.
 *
 * @class       Controller
 * @package     Boxtal\BoxtalConnectWoocommerce\Shipping_Method
 * @category    Class
 * @author      API Boxtal
 */
class Controller {

	/**
	 * Rate type.
	 *
	 * @var string
	 */
	public static $rate = 'rate';

	/**
	 * Rate type.
	 *
	 * @var string
	 */
	public static $free = 'free';

	/**
	 * Rate type.
	 *
	 * @var string
	 */
	public static $deactivated = 'deactivated';

	/**
	 * Construct function.
	 *
	 * @param array $plugin plugin array.
	 * @void
	 */
	public function __construct( $plugin ) {
		$this->plugin_url     = $plugin['url'];
		$this->plugin_version = $plugin['version'];
		$this->ajax_nonce     = wp_create_nonce( 'boxtale_woocommerce_shipping_method' );
	}

	/**
	 * Run class.
	 *
	 * @void
	 */
	public function run() {
		//phpcs:ignore
		if (isset($_GET['page']) && 'wc-settings' === $_GET['page'] && isset($_GET['tab']) && 'shipping' === $_GET['tab']) {
			add_action( 'admin_enqueue_scripts', array( $this, 'shipping_method_scripts' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'shipping_method_styles' ) );
		}
		add_action( 'wp_ajax_bw_add_rate_line', array( $this, 'add_rate_line_callback' ) );
	}

	/**
	 * Enqueue shipping method scripts
	 *
	 * @void
	 */
	public function shipping_method_scripts() {
		wp_enqueue_script( 'bw_polyfills', $this->plugin_url . 'Boxtal/BoxtalConnectWoocommerce/assets/js/polyfills.min.js', array(), $this->plugin_version );
		wp_enqueue_script( 'bw_tail_select', $this->plugin_url . 'Boxtal/BoxtalConnectWoocommerce/assets/js/tail.select-full.min.js', array( 'bw_polyfills' ), $this->plugin_version );
		wp_enqueue_script( 'bw_shipping_method', $this->plugin_url . 'Boxtal/BoxtalConnectWoocommerce/assets/js/shipping-method.min.js', array( 'bw_tail_select', 'bw_polyfills' ), $this->plugin_version );
		wp_add_inline_script( 'bw_shipping_method', 'var bwShippingMethodAjaxNonce = "' . $this->ajax_nonce . '"', 'before' );
		wp_add_inline_script( 'bw_shipping_method', 'var bwLocale = "' . substr( get_locale(), 0, 2 ) . '"', 'before' );
	}

	/**
	 * Enqueue shipping method styles
	 *
	 * @void
	 */
	public function shipping_method_styles() {
		wp_enqueue_style( 'bw_tail_select', $this->plugin_url . 'Boxtal/BoxtalConnectWoocommerce/assets/css/tail.select-bootstrap3.css', array(), $this->plugin_version );
		wp_enqueue_style( 'bw_shipping_method', $this->plugin_url . 'Boxtal/BoxtalConnectWoocommerce/assets/css/shipping-method.css', array(), $this->plugin_version );
	}

	/**
	 * Add rate line callback.
	 *
	 * @void
	 */
	public function add_rate_line_callback() {
		check_ajax_referer( 'boxtale_woocommerce_shipping_method', 'security' );
		header( 'Content-Type: application/json; charset=utf-8' );
        // phpcs:ignore
        if ( ! isset( $_REQUEST['pricing-items'] ) ) {
			$i            = 0;
			$pricing_item = $this->get_default_pricing_item_values();
		} else {
			$pricing_item = array();
			// phpcs:ignore
			foreach ( $_REQUEST['pricing-items'] as $key => $value ) {
				$clean_values                         = Misc_Util::array_keys_strip_double_quotes( $value );
				$i                                    = intval( $key ) + 1;
				$pricing_item                         = self::get_default_pricing_item_values();
				$pricing_item['parcel_point_network'] = $clean_values['parcel-point-network'];
			}
		}
		$parcel_point_networks = \Boxtal\BoxtalConnectWoocommerce\Shipping_Method\Parcel_Point\Controller::get_network_list();
		$shipping_classes      = Shipping_Method_Util::get_shipping_class_list();
		ob_start();
		include_once dirname( __DIR__ ) . '/assets/views/html-admin-shipping-method-rate.php';
		$html = ob_get_clean();
		wp_send_json_success( $html );
	}

	/**
	 * Add rate line callback.
	 *
	 * @void
	 */
	public function get_default_pricing_item_values() {
		$shipping_classes = Shipping_Method_Util::get_shipping_class_list();
		return array(
			'price_from'           => null,
			'price_to'             => null,
			'weight_from'          => null,
			'weight_to'            => null,
			'shipping_class'       => array_keys( $shipping_classes ),
			'parcel_point_network' => array(),
			'pricing'              => $this::$rate,
			'flat_rate'            => 0,
		);
	}

	/**
	 * Get shipping method pricing items.
	 *
	 * @param string $method shipping method id.
	 *
	 * @return array
	 */
	public static function get_pricing_items( $method ) {
		global $wpdb;
		$query = "SELECT * FROM {$wpdb->prefix}bw_pricing_items WHERE shipping_method_instance = '" . $method . "' order by pricing_id";
		//phpcs:ignore
		$result = $wpdb->get_results($query, ARRAY_A);
		$pricing_items = array();
		foreach ( $result as $row_number => $pricing_item ) {
			foreach ( $pricing_item as $key => $value ) {
				if ( 'parcel_point_network' === $key || 'shipping_class' === $key ) {
					$pricing_items[ $row_number ][ $key ] = null === $value ? null : explode( '|', $value );
				} else {
					$pricing_items[ $row_number ][ $key ] = $value;
				}
			}
		}

		return $pricing_items;
	}

	/**
	 * Get shipping method pricing items.
	 *
	 * @param string $method shipping method id.
	 * @param array  $pricing_items posted pricing items.
	 *
	 * @void
	 */
	public static function save_pricing_items( $method, $pricing_items ) {

		self::delete_pricing_items( $method );

		global $wpdb;
		foreach ( $pricing_items as $id => $pricing_item ) {
			$wpdb->insert(
				$wpdb->prefix . 'bw_pricing_items',
				array(
					'pricing_id'               => $id,
					'shipping_method_instance' => Shipping_Method_Util::get_unique_identifier( $method ),
					'price_from'               => Misc_Util::parse_float_or_null( Misc_Util::convert_comma( $pricing_item->{'price-from'} ) ),
					'price_to'                 => Misc_Util::parse_float_or_null( Misc_Util::convert_comma( $pricing_item->{'price-to'} ) ),
					'weight_from'              => Misc_Util::parse_float_or_null( Misc_Util::convert_comma( $pricing_item->{'weight-from'} ) ),
					'weight_to'                => Misc_Util::parse_float_or_null( Misc_Util::convert_comma( $pricing_item->{'weight-to'} ) ),
					'shipping_class'           => ! empty( $pricing_item->{'shipping-class'} ) ? implode( '|', $pricing_item->{'shipping-class'} ) : 'none',
					'parcel_point_network'     => ! empty( $pricing_item->{'parcel-point-network'} ) ? implode( '|', $pricing_item->{'parcel-point-network'} ) : null,
					'pricing'                  => $pricing_item->{'pricing'},
					'flat_rate'                => self::$rate === $pricing_item->{'pricing'} ? floatval( Misc_Util::convert_comma( $pricing_item->{'flat-rate'} ) ) : null,
				),
				array(
					'%d',
					'%s',
					'%f',
					'%f',
					'%f',
					'%f',
					'%s',
					'%s',
					'%s',
					'%f',
				)
			); // db call ok.
		}

	}

	/**
	 * Get shipping method pricing items.
	 *
	 * @param string $method shipping method id.
	 *
	 * @return array
	 */
	public static function delete_pricing_items( $method ) {
		global $wpdb;
		return $wpdb->delete(
			$wpdb->prefix . 'bw_pricing_items',
			array( 'shipping_method_instance' => Shipping_Method_Util::get_unique_identifier( $method ) ),
			array( '%s' )
		); // db call ok.
	}
}
