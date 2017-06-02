<?php

namespace JustneroRu\EAISTO\Data;

class ListItem {

	/**
	 * @var string $Code
	 */
	protected $Code = null;

	/**
	 * @var string $Title
	 */
	protected $Title = null;

	/**
	 * @param string $Code
	 * @param string $Title
	 */
	public function __construct( $Code, $Title ) {
		$this->Code  = $Code;
		$this->Title = $Title;
	}

	/**
	 * @return string
	 */
	public function getCode() {
		return $this->Code;
	}

	/**
	 * @param string $Code
	 *
	 * @return \JustneroRu\EAISTO\Data\ListItem
	 */
	public function setCode( $Code ) {
		$this->Code = $Code;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->Title;
	}

	/**
	 * @param string $Title
	 *
	 * @return \JustneroRu\EAISTO\Data\ListItem
	 */
	public function setTitle( $Title ) {
		$this->Title = $Title;

		return $this;
	}

}
