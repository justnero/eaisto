<?php

namespace JustneroRu\EAISTO\Data;

class RegistrationDocument {

	/**
	 * @var RegistrationDocumentType $DocumentType
	 */
	protected $DocumentType = null;

	/**
	 * @var string $Series
	 */
	protected $Series = null;

	/**
	 * @var string $Number
	 */
	protected $Number = null;

	/**
	 * @var string $Organization
	 */
	protected $Organization = null;

	/**
	 * @var \DateTime $Date
	 */
	protected $Date = null;

	/**
	 * @var RegistrationDocumentForeign $Foreign
	 */
	protected $Foreign = null;

	/**
	 * @param RegistrationDocumentType $DocumentType
	 * @param string $Series
	 * @param string $Number
	 * @param string $Organization
	 * @param \DateTime $Date
	 * @param RegistrationDocumentForeign $Foreign
	 */
	public function __construct( $DocumentType, $Series, $Number, $Organization, \DateTime $Date, $Foreign ) {
		$this->DocumentType = $DocumentType;
		$this->Series       = $Series;
		$this->Number       = $Number;
		$this->Organization = $Organization;
		$this->Date         = $Date->format( \DateTime::ATOM );
		$this->Foreign      = $Foreign;
	}

	/**
	 * @return RegistrationDocumentType
	 */
	public function getDocumentType() {
		return $this->DocumentType;
	}

	/**
	 * @param RegistrationDocumentType $DocumentType
	 *
	 * @return \JustneroRu\EAISTO\Data\RegistrationDocument
	 */
	public function setDocumentType( $DocumentType ) {
		$this->DocumentType = $DocumentType;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSeries() {
		return $this->Series;
	}

	/**
	 * @param string $Series
	 *
	 * @return \JustneroRu\EAISTO\Data\RegistrationDocument
	 */
	public function setSeries( $Series ) {
		$this->Series = $Series;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNumber() {
		return $this->Number;
	}

	/**
	 * @param string $Number
	 *
	 * @return \JustneroRu\EAISTO\Data\RegistrationDocument
	 */
	public function setNumber( $Number ) {
		$this->Number = $Number;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrganization() {
		return $this->Organization;
	}

	/**
	 * @param string $Organization
	 *
	 * @return \JustneroRu\EAISTO\Data\RegistrationDocument
	 */
	public function setOrganization( $Organization ) {
		$this->Organization = $Organization;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDate() {
		if ( $this->Date == null ) {
			return null;
		} else {
			try {
				return new \DateTime( $this->Date );
			} catch ( \Exception $e ) {
				return false;
			}
		}
	}

	/**
	 * @param \DateTime $Date
	 *
	 * @return \JustneroRu\EAISTO\Data\RegistrationDocument
	 */
	public function setDate( \DateTime $Date ) {
		$this->Date = $Date->format( \DateTime::ATOM );

		return $this;
	}

	/**
	 * @return RegistrationDocumentForeign
	 */
	public function getForeign() {
		return $this->Foreign;
	}

	/**
	 * @param RegistrationDocumentForeign $Foreign
	 *
	 * @return \JustneroRu\EAISTO\Data\RegistrationDocument
	 */
	public function setForeign( $Foreign ) {
		$this->Foreign = $Foreign;

		return $this;
	}

}
