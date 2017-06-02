<?php

namespace JustneroRu\EAISTO\Data;

class Operator {

	/**
	 * @var string $FullName
	 */
	protected $FullName = null;

	/**
	 * @var string $ShortName
	 */
	protected $ShortName = null;

	/**
	 * @param string $FullName
	 * @param string $ShortName
	 */
	public function __construct( $FullName, $ShortName ) {
		$this->FullName  = $FullName;
		$this->ShortName = $ShortName;
	}

	/**
	 * @return string
	 */
	public function getFullName() {
		return $this->FullName;
	}

	/**
	 * @param string $FullName
	 *
	 * @return \JustneroRu\EAISTO\Data\Operator
	 */
	public function setFullName( $FullName ) {
		$this->FullName = $FullName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getShortName() {
		return $this->ShortName;
	}

	/**
	 * @param string $ShortName
	 *
	 * @return \JustneroRu\EAISTO\Data\Operator
	 */
	public function setShortName( $ShortName ) {
		$this->ShortName = $ShortName;

		return $this;
	}

}
