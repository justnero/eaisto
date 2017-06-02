<?php

namespace JustneroRu\EAISTO\Data;

class ListRegistrationDocumentTypeResponse {

	/**
	 * @var ListItem $ListItem
	 */
	protected $ListItem = null;

	/**
	 * @param ListItem $ListItem
	 */
	public function __construct( $ListItem ) {
		$this->ListItem = $ListItem;
	}

	/**
	 * @return ListItem
	 */
	public function getListItem() {
		return $this->ListItem;
	}

	/**
	 * @param ListItem $ListItem
	 *
	 * @return \JustneroRu\EAISTO\Data\ListRegistrationDocumentTypeResponse
	 */
	public function setListItem( $ListItem ) {
		$this->ListItem = $ListItem;

		return $this;
	}

}
