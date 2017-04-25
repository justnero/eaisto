<?php
namespace JustneroRu\EAISTO\Fixture;

class UserInfo
{
    public $Name;
    public $Password;
    public $ExtSystem;

	/**
	 * UserInfo constructor.
	 *
	 * @param $Name
	 * @param $Password
	 * @param $ExtSystem
	 */
	public function __construct( $Name, $Password, $ExtSystem = null ) {
		$this->Name      = $Name;
		$this->Password  = $Password;
		$this->ExtSystem = $ExtSystem;
	}


}