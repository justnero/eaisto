<?php

namespace JustneroRu\EAISTO\Data;

class CardItemValue {

	/**
	 * @var int $Code
	 */
	protected $Code = null;

	/**
	 * @var int $TestResult
	 */
	protected $TestResult = null;

	/**
	 * @param int $Code
	 * @param int $TestResult
	 */
	public function __construct( $Code, $TestResult ) {
		$this->Code       = $Code;
		$this->TestResult = $TestResult;
	}

	/**
	 * @return int
	 */
	public function getCode() {
		return $this->Code;
	}

	/**
	 * @param int $Code
	 *
	 * @return \JustneroRu\EAISTO\Data\CardItemValue
	 */
	public function setCode( $Code ) {
		$this->Code = $Code;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getTestResult() {
		return $this->TestResult;
	}

	/**
	 * @param int $TestResult
	 *
	 * @return \JustneroRu\EAISTO\Data\CardItemValue
	 */
	public function setTestResult( $TestResult ) {
		$this->TestResult = $TestResult;

		return $this;
	}

}
