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
			'features' => 1,
		], $options );
		if ( ! $wsdl ) {
			$wsdl = static::$wsdl;
		}
		try {
			parent::__construct( $wsdl, $options );
		} catch ( \SoapFault $ex ) {
			parent::__construct( $this->getCache( $cacheDir, $wsdl ), $options );
		}
	}

	/**
	 * @param string $cacheDir path to a directory to store cache
	 * @param string $wsdl The wsdl file to use
	 *
	 * @return string path to a cached copy of wsdl
	 */
	private function getCache( $cacheDir, $wsdl ) {
		$filename = hash( 'md5', $wsdl );
		$path     = rtrim( $cacheDir, DIRECTORY_SEPARATOR ) . DIRECTORY_SEPARATOR . $filename;
		if ( ! file_exists( $path ) || filemtime( $path ) < time() - 86400 ) {
			do {
				$result = file_put_contents( $path, fopen( $wsdl, 'r' ) );
			} while ( ! $result );
		}

		return $path;
	}

}