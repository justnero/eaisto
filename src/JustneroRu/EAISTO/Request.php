<?php
namespace JustneroRu\EAISTO;

use BeSimple\SoapClient\SoapClientBuilder;
use BeSimple\SoapClient\SoapClientOptionsBuilder;
use BeSimple\SoapCommon\SoapOptionsBuilder;
use JustneroRu\EAISTO\Fixture\UserInfo;

class Request
{

    public function getCard(UserInfo $user_info) {
        $client = static::builder();
        return $client->soapCall('GetCardByVin', [$user_info]);
    }

    public static function builder() {
        return (new SoapClientBuilder())->build(
            SoapClientOptionsBuilder::createWithDefaults(),
            SoapOptionsBuilder::createWithDefaults('http://eaistotest.srvdev.ru/common/ws/arm_expert.php?wsdl')
        );
    }

}