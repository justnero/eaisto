<?php

namespace JustneroRu\EAISTO;

use JustneroRu\EAISTO\Data\ChangeCard;
use JustneroRu\EAISTO\Data\ChangeCardResponse;
use JustneroRu\EAISTO\Data\UnregisterCard;
use JustneroRu\EAISTO\Data\UnregisterCardResponse;

class Operator extends SoapWrap {

	/* @inheritdoc */
	protected static $classmap = [
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

	/* @inheritdoc */
	protected static $wsdl = 'https://eaisto.gibdd.ru/common/ws/arm_operator.php?wsdl';

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
