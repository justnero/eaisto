<?php

namespace JustneroRu\EAISTO\Data;

class UserInfo {

	/**
	 * @var string $Name
	 */
	protected $Name = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	/**
	 * @var string $ExtSystem
	 */
	protected $ExtSystem = null;


	public function __construct() {

	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->Name;
	}

	/**
	 * @param string $Name
	 *
	 * @return \JustneroRu\EAISTO\Data\UserInfo
	 */
	public function setName( $Name ) {
		$this->Name = $Name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPassword() {
		return $this->Password;
	}

	/**
	 * @param string $Password
	 *
	 * @return \JustneroRu\EAISTO\Data\UserInfo
	 */
	public function setPassword( $Password ) {
		$this->Password = $Password;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getExtSystem() {
		return $this->ExtSystem;
	}

	/**
	 * @param string $ExtSystem
	 *
	 * @return \JustneroRu\EAISTO\Data\UserInfo
	 */
	public function setExtSystem( $ExtSystem ) {
		$this->ExtSystem = $ExtSystem;

		return $this;
	}

}
