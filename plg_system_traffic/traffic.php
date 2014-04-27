<?php
/**
 * @copyright	Copyright (c) 2014 traffic. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * System - traffic Plugin
 *
 * @package		Joomla.Plugin
 * @subpakage	traffic.traffic
 */
class plgSystemtraffic extends JPlugin {

	/**
	 * Constructor.
	 *
	 * @param 	$subject
	 * @param	array $config
	 */
	function __construct(&$subject, $config = array()) {
		// call parent constructor
		parent::__construct($subject, $config);
	}
        
        function onBeforeCompileHead() {
            
            
            echo 'lol';
        }
	
}