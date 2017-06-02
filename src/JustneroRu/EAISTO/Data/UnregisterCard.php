<?php

namespace JustneroRu\EAISTO\Data;

class UnregisterCard {

	/**
	 * @var UserInfo $user
	 */
	protected $user = null;

	/**
	 * @var int $CardId
	 */
	protected $CardId = null;

	/**
	 * @param UserInfo $user
	 * @param int $CardId
	 */
	public function __construct( $user, $CardId ) {
		$this->user   = $user;
		$this->CardId = $CardId;
	}

	/**
	 * @return UserInfo
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param UserInfo $user
	 *
	 * @return \JustneroRu\EAISTO\Data\UnregisterCard
	 */
	public function setUser( $user ) {
		$this->user = $user;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getCardId() {
		return $this->CardId;
	}

	/**
	 * @param int $CardId
	 *
	 * @return \JustneroRu\EAISTO\Data\UnregisterCard
	 */
	public function setCardId( $CardId ) {
		$this->CardId = $CardId;

		return $this;
	}

}
