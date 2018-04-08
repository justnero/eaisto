<?php

namespace JustneroRu\EAISTO;

class Proxy {

	const PROXY_LOAD_NONE = 1;
	const PROXY_LOAD_FIRST = 2;
	const PROXY_LOAD_RANDOM = 3;

	protected static $proxyFilename = '';
	protected static $proxies = [];

	protected $host;
	protected $port;
	protected $login;
	protected $password;
	protected $auth = false;
	protected $enabled = false;

	public function __construct( $config = [] ) {
		$len = count( $config );
		if ( $len == 2 || $len == 4 ) {
			$this->enabled = true;
			$this->host    = array_shift( $config );
			$this->port    = array_shift( $config );
			if ( $len == 4 ) {
				$this->auth     = true;
				$this->login    = array_shift( $config );
				$this->password = array_shift( $config );
			}
		}
	}

	/**
	 * @param $filename
	 *
	 * @return bool|Proxy
	 * @throws \Exception
	 */
	public static function loadFirst( $filename ) {
		return static::load( $filename, self::PROXY_LOAD_FIRST );
	}

	/**
	 * @param string $filename
	 * @param int $strategy
	 * @param int $try
	 *
	 * @return bool|Proxy|static
	 * @throws \Exception
	 */
	public static function load( $filename = '', $strategy = self::PROXY_LOAD_NONE, $try = 0 ) {
		if ( $filename !== '' && $strategy !== self::PROXY_LOAD_NONE ) {
			static::proxiesLoad( $filename );
			$instance = false;
			if ( count( static::$proxies ) ) {
				switch ( $strategy ) {
					case self::PROXY_LOAD_FIRST:
						$instance = new static( array_shift( static::$proxies ) );
						break;
					case self::PROXY_LOAD_RANDOM:
						$key      = array_rand( static::$proxies );
						$instance = new static( static::$proxies[ $key ] );
						unset( static::$proxies[ $key ] );
						break;
				}
				if ( $instance && ! $instance->check() ) {
					if ( $try > 0 ) {
						return static::load( $filename, $strategy, $try - 1 );
					} else {
						throw new \Exception( 'Proxy settings is wrong' );
					}
				}
				if ( $instance && $instance->check() ) {
					return $instance;
				}
			}
		}

		return new static();
	}

	protected static function proxiesLoad( $filename ) {
		if ( static::$proxyFilename == $filename ) {
			return;
		}
		if ( ! file_exists( $filename ) ) {
			return;
		}
		static::$proxyFilename = $filename;
		$file                  = fopen( $filename, 'r' );
		while ( $proxy = fgetcsv( $file ) ) {
			static::$proxies[] = $proxy;
		}
		fclose( $file );
	}

	private function check() {
		$curl = curl_init();
		if ( $curl === false ) {
			return false;
		}

		$options = [
			CURLOPT_URL            => 'https://eaisto.gibdd.ru/common/ws/arm_expert.php?wsdl',
			CURLOPT_VERBOSE        => false,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HEADER         => false,
			CURLOPT_NOSIGNAL       => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_CUSTOMREQUEST  => 'GET',
		];

		if ( defined( 'CURLOPT_TIMEOUT_MS' ) ) {
			$options[ CURLOPT_TIMEOUT_MS ] = 5000;
		} else {
			$options[ CURLOPT_TIMEOUT ] = ceil( 5000 / 1000 );
		}
		if ( defined( 'CURLOPT_CONNECTTIMEOUT_MS' ) ) {
			$options[ CURLOPT_CONNECTTIMEOUT_MS ] = 1000;
		} else {
			$options[ CURLOPT_CONNECTTIMEOUT ] = ceil( 1000 / 1000 );
		}
		$options += $this->optionsCurl();

		if ( curl_setopt_array( $curl, $options ) === false ) {
			return false;
		}
		curl_exec( $curl );
		if ( curl_errno( $curl ) ) {
			return false;
		}

		curl_close( $curl );

		return true;
	}

	public function optionsCurl() {
		$options = [];
		if ( $this->isEnabled() ) {
			$options[ CURLOPT_HTTPPROXYTUNNEL ] = 1;
			$options[ CURLOPT_PROXY ]           = $this->host . ':' . $this->port;
			if ( $this->isAuth() ) {
				$options[ CURLOPT_PROXYUSERPWD ] = $this->login . ':' . $this->password;
			}
		}

		return $options;
	}

	public function isEnabled() {
		return $this->enabled;
	}

	public function isAuth() {
		return $this->auth;
	}

	/**
	 * @param array $config
	 *
	 * @return bool|Proxy|static
	 * @throws \Exception
	 */
	public static function loadArray( $config = [] ) {
		if ( array_key_exists( 'filename', $config ) && $config['filename'] != '' ) {
			$strategy = self::PROXY_LOAD_FIRST;
			if ( array_key_exists( 'strategy', $config ) && $config['strategy'] != '' ) {
				switch ( $config['strategy'] ) {
					case 'random':
						$strategy = self::PROXY_LOAD_RANDOM;
						break;
					case 'first':
						$strategy = self::PROXY_LOAD_FIRST;
						break;
				}
			}

			return static::load( $config['filename'], $strategy );
		}
		if ( array_key_exists( 'ip', $config ) ) {
			$config['host'] = $config['ip'];
			unset( $config['ip'] );
		}
		if ( array_key_exists( 'host', $config ) && $config['host'] != '' &&
		     array_key_exists( 'port', $config ) && $config['port'] != '' ) {
			$cfg = [ $config['host'], $config['port'] ];
			if ( array_key_exists( 'login', $config ) && $config['login'] != '' &&
			     array_key_exists( 'password', $config ) && $config['password'] != '' ) {
				$cfg[] = $config['login'];
				$cfg[] = $config['password'];
			}

			return new static( $cfg );
		}

		return new static();
	}

	/**
	 * @param $filename
	 *
	 * @return bool|Proxy
	 * @throws \Exception
	 */
	public static function loadRandom( $filename ) {
		return static::load( $filename, self::PROXY_LOAD_RANDOM );
	}

	public function optionsSoap() {
		$options = [];
		if ( $this->isEnabled() ) {
			$options['proxy_host'] = $this->host;
			$options['proxy_port'] = $this->port;
			if ( $this->isAuth() ) {
				$options['proxy_login']    = $this->login;
				$options['proxy_password'] = $this->password;
			}
		}

		return $options;
	}

}