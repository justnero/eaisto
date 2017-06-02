<?php

namespace JustneroRu\EAISTO\Data;

class ListTestType {

	/**
	 * @var UserInfo $user
	 */
	protected $user = null;

	/**
	 * @param UserInfo $user
	 */
	public function __construct( $user ) {
		$this->user = $user;
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
	 * @return \JustneroRu\EAISTO\Data\ListTestType
	 */
	public function setUser( $user ) {
		$this->user = $user;

		return $this;
	}

}
