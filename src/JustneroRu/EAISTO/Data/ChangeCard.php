<?php

namespace JustneroRu\EAISTO\Data;

class ChangeCard {

	/**
	 * @var UserInfo $user
	 */
	protected $user = null;

	/**
	 * @var Card $card
	 */
	protected $card = null;

	/**
	 * @param UserInfo $user
	 * @param Card $card
	 */
	public function __construct( $user, $card ) {
		$this->user = $user;
		$this->card = $card;
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
	 * @return \JustneroRu\EAISTO\Data\ChangeCard
	 */
	public function setUser( $user ) {
		$this->user = $user;

		return $this;
	}

	/**
	 * @return Card
	 */
	public function getCard() {
		return $this->card;
	}

	/**
	 * @param Card $card
	 *
	 * @return \JustneroRu\EAISTO\Data\ChangeCard
	 */
	public function setCard( $card ) {
		$this->card = $card;

		return $this;
	}

}
