<?php

namespace JustneroRu\EAISTO\Data;

class GetCardByVinResponse {

	/**
	 * @var Card $GetCardByVinResult
	 */
	protected $GetCardByVinResult = null;

	/**
	 * @param Card $GetCardByVinResult
	 */
	public function __construct( $GetCardByVinResult ) {
		$this->GetCardByVinResult = $GetCardByVinResult;
	}

	/**
	 * @return Card
	 */
	public function getGetCardByVinResult() {
		return $this->GetCardByVinResult;
	}

	/**
	 * @param Card $GetCardByVinResult
	 *
	 * @return \JustneroRu\EAISTO\Data\GetCardByVinResponse
	 */
	public function setGetCardByVinResult( $GetCardByVinResult ) {
		$this->GetCardByVinResult = $GetCardByVinResult;

		return $this;
	}

}
