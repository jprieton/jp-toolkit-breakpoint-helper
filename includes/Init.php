<?php
/**
 * Class to initialize the plugin
 *
 * @package       JPToolkit
 * @subpackage    Core
 */

namespace JPToolkit\BreakpointHelper;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

use JPToolkit\BreakpointHelper\Admin\Customizer;

/**
 * Class to initialize plugin
 *
 * @package       JPToolkit
 * @subpackage    BreakpointHelper
 * @since         0.1.0
 * @author        Javier Prieto
 */
final class Init {

  /**
   * Class constructor
   */
  public function __construct() {
    // Adds the Development section to appareance customizer
    new Customizer();
  }

}
