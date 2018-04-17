<?php
/**
 * Collapsible Content Bootstrap
 *
 * @package     CapWebSolutions\CollapsibleContent
 * @since       1.0.0
 * @author      Cap Web Solutions  
 * @link        https://CapWebSolutions.com
 * @license     GNU-2.0+
 * 
 * @wordpress-plugin
 * Plugin Name: Collapsible Content
 * Plugin URI: https://github.com/CApWebSolutions/
 * Description: Collapsible Content is a WordPress plugin that shows and hdes content. Practical examples include Q&As, FAQs, hints, and more. Click the icon to open the content. Click it again to hide the content.  
 * Version: 1.0.0
 * Author: Cap Web Solutions
 * Author URI: https://capwebsolutions.com
 * Text Domain: collapsible_content
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace CapWebSolutions\CollapsibleContent;

if ( ! defined( 'ABSPATH' ) ) {
    die( "Oh, silly, there's nothing to see here." );
}

include ( __DIR__ . '/src/shortcode/shortcodes.php');