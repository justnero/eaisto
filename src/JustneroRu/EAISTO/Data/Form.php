<?php

namespace JustneroRu\EAISTO\Data;

class Form {

	/**
	 * @var string $Comment
	 */
	protected $Comment = null;

	/**
	 * @var boolean $Duplicate
	 */
	protected $Duplicate = null;

	/**
	 * @var string $Number
	 */
	protected $Number = null;

	/**
	 * @var string $Series
	 */
	protected $Series = null;

	/**
	 * @var FormType $Type
	 */
	protected $Type = null;

	/**
	 * @var \DateTime $Validity
	 */
	protected $Validity = null;

	/**
	 * @param boolean $Duplicate
	 * @param \DateTime $Validity
	 */
	public function __construct( $Duplicate, \DateTime $Validity ) {
		$this->Duplicate = $Duplicate;
		$this->Validity  = $Validity->format( \DateTime::ATOM );
	}

	/**
	 * @return string
	 */
	public function getComment() {
		return $this->Comment;
	}

	/**
	 * @param string $Comment
	 *
	 * @return \JustneroRu\EAISTO\Data\Form
	 */
	public function setComment( $Comment ) {
		$this->Comment = $Comment;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getDuplicate() {
		return $this->Duplicate;
	}

	/**
	 * @param boolean $Duplicate
	 *
	 * @return \JustneroRu\EAISTO\Data\Form
	 */
	public function setDuplicate( $Duplicate ) {
		$this->Duplicate = $Duplicate;

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
	 * @return \JustneroRu\EAISTO\Data\Form
	 */
	public function setNumber( $Number ) {
		$this->Number = $Number;

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
	 * @return \JustneroRu\EAISTO\Data\Form
	 */
	public function setSeries( $Series ) {
		$this->Series = $Series;

		return $this;
	}

	/**
	 * @return FormType
	 */
	public function getType() {
		return $this->Type;
	}

	/**
	 * @param FormType $Type
	 *
	 * @return \JustneroRu\EAISTO\Data\Form
	 */
	public function setType( $Type ) {
		$this->Type = $Type;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getValidity() {
		if ( $this->Validity == null ) {
			return null;
		} else {
			try {
				return new \DateTime( $this->Validity );
			} catch ( \Exception $e ) {
				return false;
			}
		}
	}

	/**
	 * @param \DateTime $Validity
	 *
	 * @return \JustneroRu\EAISTO\Data\Form
	 */
	public function setValidity( \DateTime $Validity ) {
		$this->Validity = $Validity->format( \DateTime::ATOM );

		return $this;
	}

}
