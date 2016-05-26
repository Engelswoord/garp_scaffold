<?php
/**
 * Garp_Store_Factory
 * Loads a store conditionally - either Session or Cookie, based on application.ini
 * @author Harmen Janssen | grrr.nl
 * @modifiedby $LastChangedBy: $
 * @version $Revision: $
 * @package Garp
 * @subpackage Store
 * @lastmodified $Date: $
 */
class Garp_Store_Factory {
/**
 * Get store based on application.ini
 * @param String $namespace A global namespace for your data.
 * @param String $type Pick a type of store manually
 * @return Garp_Store_Interface
 */
	public static function getStore($namespace, $type = null) {
		$ini = Zend_Registry::get('config');
		if (is_null($type)) {
			$type = !empty($ini->store->type) ? $ini->store->type : 'Cookie';
		}
		$type = ucfirst($type);
		if (!in_array($type, array('Session', 'Cookie'))) {
			throw new Garp_Store_Exception('Invalid Store type selected. Must be Session or Cookie.');
		}

		$duration = false;
		if (isset($ini->store->lifetime)) {
			$duration = $ini->store->lifetime;
		}

		$className = 'Garp_Store_'.$type;
		$obj = new $className($namespace, $duration);
		return $obj;
	}
}
