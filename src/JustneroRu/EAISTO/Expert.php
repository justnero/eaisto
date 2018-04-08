<?php

namespace JustneroRu\EAISTO;

use JustneroRu\EAISTO\Data\GetCardByVin;
use JustneroRu\EAISTO\Data\GetCardByVinResponse;
use JustneroRu\EAISTO\Data\ListBrakingSystem;
use JustneroRu\EAISTO\Data\ListBrakingSystemResponse;
use JustneroRu\EAISTO\Data\ListFormType;
use JustneroRu\EAISTO\Data\ListFormTypeResponse;
use JustneroRu\EAISTO\Data\ListFuel;
use JustneroRu\EAISTO\Data\ListFuelResponse;
use JustneroRu\EAISTO\Data\ListRegistrationDocumentType;
use JustneroRu\EAISTO\Data\ListRegistrationDocumentTypeResponse;
use JustneroRu\EAISTO\Data\ListTestResult;
use JustneroRu\EAISTO\Data\ListTestResultResponse;
use JustneroRu\EAISTO\Data\ListTestType;
use JustneroRu\EAISTO\Data\ListTestTypeResponse;
use JustneroRu\EAISTO\Data\RegisterCard;
use JustneroRu\EAISTO\Data\RegisterCardResponse;

class Expert extends SoapWrap {

	/* @inheritdoc */
	protected static $classmap = [
		'RegisterCard'                         => 'JustneroRu\\EAISTO\\Data\\RegisterCard',
		'RegisterCardResponse'                 => 'JustneroRu\\EAISTO\\Data\\RegisterCardResponse',
		'GetCardByVin'                         => 'JustneroRu\\EAISTO\\Data\\GetCardByVin',
		'GetCardByVinResponse'                 => 'JustneroRu\\EAISTO\\Data\\GetCardByVinResponse',
		'ListTestResult'                       => 'JustneroRu\\EAISTO\\Data\\ListTestResult',
		'ListTestResultResponse'               => 'JustneroRu\\EAISTO\\Data\\ListTestResultResponse',
		'ListTestType'                         => 'JustneroRu\\EAISTO\\Data\\ListTestType',
		'ListTestTypeResponse'                 => 'JustneroRu\\EAISTO\\Data\\ListTestTypeResponse',
		'ListFuel'                             => 'JustneroRu\\EAISTO\\Data\\ListFuel',
		'ListFuelResponse'                     => 'JustneroRu\\EAISTO\\Data\\ListFuelResponse',
		'ListBrakingSystem'                    => 'JustneroRu\\EAISTO\\Data\\ListBrakingSystem',
		'ListBrakingSystemResponse'            => 'JustneroRu\\EAISTO\\Data\\ListBrakingSystemResponse',
		'ListFormType'                         => 'JustneroRu\\EAISTO\\Data\\ListFormType',
		'ListFormTypeResponse'                 => 'JustneroRu\\EAISTO\\Data\\ListFormTypeResponse',
		'ListRegistrationDocumentType'         => 'JustneroRu\\EAISTO\\Data\\ListRegistrationDocumentType',
		'ListRegistrationDocumentTypeResponse' => 'JustneroRu\\EAISTO\\Data\\ListRegistrationDocumentTypeResponse',
		'UserInfo'                             => 'JustneroRu\\EAISTO\\Data\\UserInfo',
		'Card'                                 => 'JustneroRu\\EAISTO\\Data\\Card',
		'RegistrationDocument'                 => 'JustneroRu\\EAISTO\\Data\\RegistrationDocument',
		'Expert'                               => 'JustneroRu\\EAISTO\\Data\\Expert',
		'Operator'                             => 'JustneroRu\\EAISTO\\Data\\Operator',
		'Form'                                 => 'JustneroRu\\EAISTO\\Data\\Form',
		'ArrayOfCardItemValue'                 => 'JustneroRu\\EAISTO\\Data\\ArrayOfCardItemValue',
		'CardItemValue'                        => 'JustneroRu\\EAISTO\\Data\\CardItemValue',
		'Vehicle'                              => 'JustneroRu\\EAISTO\\Data\\Vehicle',
		'ArrayOfListItem'                      => 'JustneroRu\\EAISTO\\Data\\ArrayOfListItem',
		'ListItem'                             => 'JustneroRu\\EAISTO\\Data\\ListItem',
	];
	/* @inheritdoc */
	protected static $wsdl = 'https://eaisto.gibdd.ru/common/ws/arm_expert.php?wsdl';

	/**
	 * @param RegisterCard $parameters
	 *
	 * @return RegisterCardResponse
	 */
	public function RegisterCard( RegisterCard $parameters ) {
		return $this->__soapCall( 'RegisterCard', [ $parameters ] );
	}

	/**
	 * @param GetCardByVin $parameters
	 *
	 * @return GetCardByVinResponse
	 */
	public function GetCardByVin( GetCardByVin $parameters ) {
		return $this->__soapCall( 'GetCardByVin', [ $parameters ] );
	}

	/**
	 * @param ListTestResult $parameters
	 *
	 * @return ListTestResultResponse
	 */
	public function ListTestResult( ListTestResult $parameters ) {
		return $this->__soapCall( 'ListTestResult', [ $parameters ] );
	}

	/**
	 * @param ListTestType $parameters
	 *
	 * @return ListTestTypeResponse
	 */
	public function ListTestType( ListTestType $parameters ) {
		return $this->__soapCall( 'ListTestType', [ $parameters ] );
	}

	/**
	 * @param ListFuel $parameters
	 *
	 * @return ListFuelResponse
	 */
	public function ListFuel( ListFuel $parameters ) {
		return $this->__soapCall( 'ListFuel', [ $parameters ] );
	}

	/**
	 * @param ListBrakingSystem $parameters
	 *
	 * @return ListBrakingSystemResponse
	 */
	public function ListBrakingSystem( ListBrakingSystem $parameters ) {
		return $this->__soapCall( 'ListBrakingSystem', [ $parameters ] );
	}

	/**
	 * @param ListFormType $parameters
	 *
	 * @return ListFormTypeResponse
	 */
	public function ListFormType( ListFormType $parameters ) {
		return $this->__soapCall( 'ListFormType', [ $parameters ] );
	}

	/**
	 * @param ListRegistrationDocumentType $parameters
	 *
	 * @return ListRegistrationDocumentTypeResponse
	 */
	public function ListRegistrationDocumentType( ListRegistrationDocumentType $parameters ) {
		return $this->__soapCall( 'ListRegistrationDocumentType', [ $parameters ] );
	}

}
