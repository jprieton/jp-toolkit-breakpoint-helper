<?php
/**
 * Class to initialize the plugin
 *
 * @package       JPToolkit
 * @subpackage    Core
 */

namespace JPToolkit\BreakpointHelper\Admin;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

use WP_Customize_Manager;

/**
 * Class to initialize the customizer
 *
 * @package       JPToolkit
 * @subpackage    BreakpointHelper/Admin
 * @since         0.1.0
 * @author        Javier Prieto
 */
class Customizer {

  /**
   * Class constructor
   */
  public function __construct() {
    add_action( 'customize_register', [ $this, 'development' ] );
  }

  /**
   * Adds the development menu to theme customizer
   *
   * @since     0.1.0
   *
   * @param WP_Customize_Manager $wp_customize
   */
  public function development( $wp_customize ) {
    $wp_customize->add_setting( 'jp_toolkit_breakpoint_helper' );
    $wp_customize->add_section( 'jp_toolkit_development_customizer_section', [
        'title'    => __( 'Development', 'jp-toolkit-breakpoint-helper' ),
        'priority' => 1000,
    ] );
    $wp_customize->add_control( 'jp-toolkit-breakpoint-helper', [
        'label'    => __( 'Breakpoint Helper', 'jp-toolkit-breakpoint-helper' ),
        'section'  => 'jp_toolkit_development_customizer_section',
        'settings' => 'jp_toolkit_breakpoint_helper',
        'type'     => 'checkbox',
    ] );
  }

}
