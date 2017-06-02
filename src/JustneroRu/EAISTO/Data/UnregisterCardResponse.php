<?php

namespace JustneroRu\EAISTO\Data;

class UnregisterCardResponse {

	/**
	 * @var boolean $UnregisterCardResult
	 */
	protected $UnregisterCardResult = null;

	/**
	 * @param boolean $UnregisterCardResult
	 */
	public function __construct( $UnregisterCardResult ) {
		$this->UnregisterCardResult = $UnregisterCardResult;
	}

	/**
	 * @return boolean
	 */
	public function getUnregisterCardResult() {
		return $this->UnregisterCardResult;
	}

	/**
	 * @param boolean $UnregisterCardResult
	 *
	 * @return \JustneroRu\EAISTO\Data\UnregisterCardResponse
	 */
	public function setUnregisterCardResult( $UnregisterCardResult ) {
		$this->UnregisterCardResult = $UnregisterCardResult;

		return $this;
	}

}
