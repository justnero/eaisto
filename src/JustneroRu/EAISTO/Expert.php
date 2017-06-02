<?php

namespace JustneroRu\EAISTO;

use JustneroRu\EAISTO\Data\ChangeCard;
use JustneroRu\EAISTO\Data\ChangeCardResponse;
use JustneroRu\EAISTO\Data\UnregisterCard;
use JustneroRu\EAISTO\Data\UnregisterCardResponse;

class Expert extends \SoapClient {

	/**
	 * @var array $classmap The defined classes
	 */
	private static $classmap = [
		'ChangeCard'             => 'JustneroRu\\EAISTO\\Data\\ChangeCard',
		'ChangeCardResponse'     => 'JustneroRu\\EAISTO\\Data\\ChangeCardResponse',
		'UnregisterCard'         => 'JustneroRu\\EAISTO\\Data\\UnregisterCard',
		'UnregisterCardResponse' => 'JustneroRu\\EAISTO\\Data\\UnregisterCardResponse',
		'UserInfo'               => 'JustneroRu\\EAISTO\\Data\\UserInfo',
		'Card'                   => 'JustneroRu\\EAISTO\\Data\\Card',
		'RegistrationDocument'   => 'JustneroRu\\EAISTO\\Data\\RegistrationDocument',
		'Expert'                 => 'JustneroRu\\EAISTO\\Data\\Expert',
		'Form'                   => 'JustneroRu\\EAISTO\\Data\\Form',
		'ArrayOfCardItemValue'   => 'JustneroRu\\EAISTO\\Data\\ArrayOfCardItemValue',
		'CardItemValue'          => 'JustneroRu\\EAISTO\\Data\\CardItemValue',
		'Vehicle'                => 'JustneroRu\\EAISTO\\Data\\Vehicle',
		'ArrayOfListItem'        => 'JustneroRu\\EAISTO\\Data\\ArrayOfListItem',
		'ListItem'               => 'JustneroRu\\EAISTO\\Data\\ListItem',
	];

	/**
	 * @param array $options A array of config values
	 * @param string $wsdl The wsdl file to use
	 */
	public function __construct( array $options = [], $wsdl = null ) {
		foreach ( self::$classmap as $key => $value ) {
			if ( ! isset( $options['classmap'][ $key ] ) ) {
				$options['classmap'][ $key ] = $value;
			}
		}
		$options = array_merge( [
			'features' => 1,
		], $options );
		if ( ! $wsdl ) {
			$wsdl = 'http://eaisto.gibdd.ru/common/ws/arm_operator.php?wsdl';
		}
		parent::__construct( $wsdl, $options );
	}

	/**
	 * @param ChangeCard $parameters
	 *
	 * @return ChangeCardResponse
	 */
	public function ChangeCard( ChangeCard $parameters ) {
		return $this->__soapCall( 'ChangeCard', [ $parameters ] );
	}

	/**
	 * @param UnregisterCard $parameters
	 *
	 * @return UnregisterCardResponse
	 */
	public function UnregisterCard( UnregisterCard $parameters ) {
		return $this->__soapCall( 'UnregisterCard', [ $parameters ] );
	}

}
