<?php

namespace JustneroRu\EAISTO\Data;

class Operator extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'RegisterCard' => 'JustneroRu\\EAISTO\\Data\\RegisterCard',
      'RegisterCardResponse' => 'JustneroRu\\EAISTO\\Data\\RegisterCardResponse',
      'GetCardByVin' => 'JustneroRu\\EAISTO\\Data\\GetCardByVin',
      'GetCardByVinResponse' => 'JustneroRu\\EAISTO\\Data\\GetCardByVinResponse',
      'ListTestResult' => 'JustneroRu\\EAISTO\\Data\\ListTestResult',
      'ListTestResultResponse' => 'JustneroRu\\EAISTO\\Data\\ListTestResultResponse',
      'ListTestType' => 'JustneroRu\\EAISTO\\Data\\ListTestType',
      'ListTestTypeResponse' => 'JustneroRu\\EAISTO\\Data\\ListTestTypeResponse',
      'ListFuel' => 'JustneroRu\\EAISTO\\Data\\ListFuel',
      'ListFuelResponse' => 'JustneroRu\\EAISTO\\Data\\ListFuelResponse',
      'ListBrakingSystem' => 'JustneroRu\\EAISTO\\Data\\ListBrakingSystem',
      'ListBrakingSystemResponse' => 'JustneroRu\\EAISTO\\Data\\ListBrakingSystemResponse',
      'ListFormType' => 'JustneroRu\\EAISTO\\Data\\ListFormType',
      'ListFormTypeResponse' => 'JustneroRu\\EAISTO\\Data\\ListFormTypeResponse',
      'ListRegistrationDocumentType' => 'JustneroRu\\EAISTO\\Data\\ListRegistrationDocumentType',
      'ListRegistrationDocumentTypeResponse' => 'JustneroRu\\EAISTO\\Data\\ListRegistrationDocumentTypeResponse',
      'UserInfo' => 'JustneroRu\\EAISTO\\Data\\UserInfo',
      'Card' => 'JustneroRu\\EAISTO\\Data\\Card',
      'RegistrationDocument' => 'JustneroRu\\EAISTO\\Data\\RegistrationDocument',
      'Expert' => 'JustneroRu\\EAISTO\\Data\\Expert',
      'Operator' => 'JustneroRu\\EAISTO\\Data\\Operator',
      'Form' => 'JustneroRu\\EAISTO\\Data\\Form',
      'ArrayOfCardItemValue' => 'JustneroRu\\EAISTO\\Data\\ArrayOfCardItemValue',
      'CardItemValue' => 'JustneroRu\\EAISTO\\Data\\CardItemValue',
      'Vehicle' => 'JustneroRu\\EAISTO\\Data\\Vehicle',
      'ArrayOfListItem' => 'JustneroRu\\EAISTO\\Data\\ArrayOfListItem',
      'ListItem' => 'JustneroRu\\EAISTO\\Data\\ListItem',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://eaisto.gibdd.ru/common/ws/arm_expert.php?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param RegisterCard $parameters
     * @return RegisterCardResponse
     */
    public function RegisterCard(RegisterCard $parameters)
    {
      return $this->__soapCall('RegisterCard', array($parameters));
    }

    /**
     * @param GetCardByVin $parameters
     * @return GetCardByVinResponse
     */
    public function GetCardByVin(GetCardByVin $parameters)
    {
      return $this->__soapCall('GetCardByVin', array($parameters));
    }

    /**
     * @param ListTestResult $parameters
     * @return ListTestResultResponse
     */
    public function ListTestResult(ListTestResult $parameters)
    {
      return $this->__soapCall('ListTestResult', array($parameters));
    }

    /**
     * @param ListTestType $parameters
     * @return ListTestTypeResponse
     */
    public function ListTestType(ListTestType $parameters)
    {
      return $this->__soapCall('ListTestType', array($parameters));
    }

    /**
     * @param ListFuel $parameters
     * @return ListFuelResponse
     */
    public function ListFuel(ListFuel $parameters)
    {
      return $this->__soapCall('ListFuel', array($parameters));
    }

    /**
     * @param ListBrakingSystem $parameters
     * @return ListBrakingSystemResponse
     */
    public function ListBrakingSystem(ListBrakingSystem $parameters)
    {
      return $this->__soapCall('ListBrakingSystem', array($parameters));
    }

    /**
     * @param ListFormType $parameters
     * @return ListFormTypeResponse
     */
    public function ListFormType(ListFormType $parameters)
    {
      return $this->__soapCall('ListFormType', array($parameters));
    }

    /**
     * @param ListRegistrationDocumentType $parameters
     * @return ListRegistrationDocumentTypeResponse
     */
    public function ListRegistrationDocumentType(ListRegistrationDocumentType $parameters)
    {
      return $this->__soapCall('ListRegistrationDocumentType', array($parameters));
    }

}
