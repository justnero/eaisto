<?php

namespace JustneroRu\EAISTO;

class SoapWrap extends \SoapClient {

	/**
	 * @var array $classmap The defined classes
	 */
	protected static $classmap = [];

	/**
	 * @var string $wsdl The url to wsdl
	 */
	protected static $wsdl = '';

	/**
	 * @param string $cacheDir path to a directory to store cache
	 * @param array $options A array of config values
	 * @param string $wsdl The wsdl file to use
	 */
	public function __construct( $cacheDir, array $options = [], $wsdl = null ) {
		foreach ( static::$classmap as $key => $value ) {
			if ( ! isset( $options['classmap'][ $key ] ) ) {
				$options['classmap'][ $key ] = $value;
			}
		}
		$options = array_merge( [
			'features'   => 1,
			'exceptions' => 1,
			'cache_wsdl' => WSDL_CACHE_NONE,
		], $options );
		if ( ! $wsdl ) {
			$wsdl = static::$wsdl;
		}
		if ( function_exists( 'xdebug_disable' ) ) {
			xdebug_disable();
		}
		$done = true;
		do {
			unset( $this->__soap_fault );
			try {
				@parent::__construct( $this->getCache( $cacheDir, $wsdl, ! $done ), $options );
				$done = true;
			} catch ( \SoapFault $ex ) {
				$done = false;
			}
			if ( isset( $this->__soap_fault ) ) {
				$done = false;
			}
		} while ( ! $done );
		if ( function_exists( 'xdebug_enable' ) ) {
			xdebug_enable();
		}
	}

	/**
	 * @param string $cacheDir path to a directory to store cache
	 * @param string $wsdl The wsdl file to use
	 * @param bool $force Reload file anyway
	 *
	 * @return string path to a cached copy of wsdl
	 */
	private function getCache( $cacheDir, $wsdl, $force = false ) {
		$filename = hash( 'md5', $wsdl ) . '.wsdl';
		$path     = rtrim( $cacheDir, DIRECTORY_SEPARATOR ) . DIRECTORY_SEPARATOR . $filename;
		if ( $force || ! file_exists( $path ) || filemtime( $path ) < time() - 3600 ) {
			do {
				$result = file_put_contents( $path, fopen( $wsdl, 'r' ) );
			} while ( ! $result );
		}

		return $path;
	}

}