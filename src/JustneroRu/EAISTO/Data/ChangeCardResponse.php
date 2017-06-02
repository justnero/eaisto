<?php

namespace JustneroRu\EAISTO\Data;

class ChangeCardResponse {

	/**
	 * @var boolean $ChangeCardResult
	 */
	protected $ChangeCardResult = null;

	/**
	 * @var Card $ChangedCard
	 */
	protected $ChangedCard = null;

	/**
	 * @param boolean $ChangeCardResult
	 * @param Card $ChangedCard
	 */
	public function __construct( $ChangeCardResult, $ChangedCard ) {
		$this->ChangeCardResult = $ChangeCardResult;
		$this->ChangedCard      = $ChangedCard;
	}

	/**
	 * @return boolean
	 */
	public function getChangeCardResult() {
		return $this->ChangeCardResult;
	}

	/**
	 * @param boolean $ChangeCardResult
	 *
	 * @return \JustneroRu\EAISTO\Data\ChangeCardResponse
	 */
	public function setChangeCardResult( $ChangeCardResult ) {
		$this->ChangeCardResult = $ChangeCardResult;

		return $this;
	}

	/**
	 * @return Card
	 */
	public function getChangedCard() {
		return $this->ChangedCard;
	}

	/**
	 * @param Card $ChangedCard
	 *
	 * @return \JustneroRu\EAISTO\Data\ChangeCardResponse
	 */
	public function setChangedCard( $ChangedCard ) {
		$this->ChangedCard = $ChangedCard;

		return $this;
	}

}
