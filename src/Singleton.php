<?php
/**
 * Singleton class
 *
 * @package micropackage/singleton
 */

namespace Micropackage\Singleton;

/**
 * Singleton class
 */
class Singleton {

	/**
	 * Object instances
	 *
	 * @var array
	 */
	protected static $instances = [];

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	protected function __construct() {}

	/**
	 * Clone method
	 *
	 * @since  1.0.0
	 * @return void
	 */
	protected function __clone() {}

	/**
	 * Wakeup method
	 *
	 * @since 1.0.0
	 * @throws \Exception When used.
	 */
	public function __wakeup() {
		throw new \Exception( 'Cannot unserialize singleton' );
	}

	/**
	 * Gets the instance
	 *
	 * @since  1.0.0
	 * @return Singleton
	 */
	public static function get() {
		$class = get_called_class();
		$args  = func_get_args();

		if ( ! isset( self::$instances[ $class ] ) ) {
			self::$instances[ $class ] = new static( ...$args );
		}

		return self::$instances[ $class ];
	}

}
