<?php

namespace JustneroRu\EAISTO\Data;

class Card {

	/**
	 * @var int $Id
	 */
	protected $Id = null;

	/**
	 * @var int $CardIsSecondaryFor
	 */
	protected $CardIsSecondaryFor = null;

	/**
	 * @var int $CardIsDublicateFor
	 */
	protected $CardIsDublicateFor = null;

	/**
	 * @var string $BodyNumber
	 */
	protected $BodyNumber = null;

	/**
	 * @var \DateTime $DateOfDiagnosis
	 */
	protected $DateOfDiagnosis = null;

	/**
	 * @var Form $Form
	 */
	protected $Form = null;

	/**
	 * @var string $Name
	 */
	protected $Name = null;

	/**
	 * @var string $FName
	 */
	protected $FName = null;

	/**
	 * @var string $MName
	 */
	protected $MName = null;

	/**
	 * @var string $Note
	 */
	protected $Note = null;

	/**
	 * @var string $RegistrationNumber
	 */
	protected $RegistrationNumber = null;

	/**
	 * @var TestResult $TestResult
	 */
	protected $TestResult = null;

	/**
	 * @var TestType $TestType
	 */
	protected $TestType = null;

	/**
	 * @var ArrayOfCardItemValue $Values
	 */
	protected $Values = null;

	/**
	 * @var Vehicle $Vehicle
	 */
	protected $Vehicle = null;

	/**
	 * @var string $VehicleCategory
	 */
	protected $VehicleCategory = null;

	/**
	 * @var string $VehicleCategory2
	 */
	protected $VehicleCategory2 = null;

	/**
	 * @var string $Vin
	 */
	protected $Vin = null;

	/**
	 * @var int $Year
	 */
	protected $Year = null;

	/**
	 * @var string $FrameNumber
	 */
	protected $FrameNumber = null;

	/**
	 * @var int $EmptyMass
	 */
	protected $EmptyMass = null;

	/**
	 * @var int $MaxMass
	 */
	protected $MaxMass = null;

	/**
	 * @var FuelType $Fuel
	 */
	protected $Fuel = null;

	/**
	 * @var BrakingSystemType $BrakingSystem
	 */
	protected $BrakingSystem = null;

	/**
	 * @var string $Tyres
	 */
	protected $Tyres = null;

	/**
	 * @var int $Killometrage
	 */
	protected $Killometrage = null;

	/**
	 * @var RegistrationDocument $RegistrationDocument
	 */
	protected $RegistrationDocument = null;

	/**
	 * @var \DateTime $DateOfRetest
	 */
	protected $DateOfRetest = null;

	/**
	 * @var Expert $Expert
	 */
	protected $Expert = null;

	/**
	 * @param \DateTime $DateOfDiagnosis
	 * @param string $FName
	 * @param TestResult $TestResult
	 * @param TestType $TestType
	 * @param string $VehicleCategory2
	 * @param int $Year
	 * @param int $EmptyMass
	 * @param int $MaxMass
	 * @param FuelType $Fuel
	 * @param BrakingSystemType $BrakingSystem
	 * @param string $Tyres
	 * @param int $Killometrage
	 * @param RegistrationDocument $RegistrationDocument
	 */
	public function __construct( \DateTime $DateOfDiagnosis, $FName, $TestResult, $TestType, $VehicleCategory2, $Year, $EmptyMass, $MaxMass, $Fuel, $BrakingSystem, $Tyres, $Killometrage, $RegistrationDocument ) {
		$this->DateOfDiagnosis      = $DateOfDiagnosis->format( \DateTime::ATOM );
		$this->FName                = $FName;
		$this->TestResult           = $TestResult;
		$this->TestType             = $TestType;
		$this->VehicleCategory2     = $VehicleCategory2;
		$this->Year                 = $Year;
		$this->EmptyMass            = $EmptyMass;
		$this->MaxMass              = $MaxMass;
		$this->Fuel                 = $Fuel;
		$this->BrakingSystem        = $BrakingSystem;
		$this->Tyres                = $Tyres;
		$this->Killometrage         = $Killometrage;
		$this->RegistrationDocument = $RegistrationDocument;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->Id;
	}

	/**
	 * @param int $Id
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setId( $Id ) {
		$this->Id = $Id;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getCardIsSecondaryFor() {
		return $this->CardIsSecondaryFor;
	}

	/**
	 * @param int $CardIsSecondaryFor
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setCardIsSecondaryFor( $CardIsSecondaryFor ) {
		$this->CardIsSecondaryFor = $CardIsSecondaryFor;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getCardIsDublicateFor() {
		return $this->CardIsDublicateFor;
	}

	/**
	 * @param int $CardIsDublicateFor
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setCardIsDublicateFor( $CardIsDublicateFor ) {
		$this->CardIsDublicateFor = $CardIsDublicateFor;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBodyNumber() {
		return $this->BodyNumber;
	}

	/**
	 * @param string $BodyNumber
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setBodyNumber( $BodyNumber ) {
		$this->BodyNumber = $BodyNumber;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDateOfDiagnosis() {
		if ( $this->DateOfDiagnosis == null ) {
			return null;
		} else {
			try {
				return new \DateTime( $this->DateOfDiagnosis );
			} catch ( \Exception $e ) {
				return false;
			}
		}
	}

	/**
	 * @param \DateTime $DateOfDiagnosis
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setDateOfDiagnosis( \DateTime $DateOfDiagnosis ) {
		$this->DateOfDiagnosis = $DateOfDiagnosis->format( \DateTime::ATOM );

		return $this;
	}

	/**
	 * @return Form
	 */
	public function getForm() {
		return $this->Form;
	}

	/**
	 * @param Form $Form
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setForm( $Form ) {
		$this->Form = $Form;

		return $this;
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
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setName( $Name ) {
		$this->Name = $Name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFName() {
		return $this->FName;
	}

	/**
	 * @param string $FName
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setFName( $FName ) {
		$this->FName = $FName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMName() {
		return $this->MName;
	}

	/**
	 * @param string $MName
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setMName( $MName ) {
		$this->MName = $MName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNote() {
		return $this->Note;
	}

	/**
	 * @param string $Note
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setNote( $Note ) {
		$this->Note = $Note;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRegistrationNumber() {
		return $this->RegistrationNumber;
	}

	/**
	 * @param string $RegistrationNumber
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setRegistrationNumber( $RegistrationNumber ) {
		$this->RegistrationNumber = $RegistrationNumber;

		return $this;
	}

	/**
	 * @return TestResult
	 */
	public function getTestResult() {
		return $this->TestResult;
	}

	/**
	 * @param TestResult $TestResult
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setTestResult( $TestResult ) {
		$this->TestResult = $TestResult;

		return $this;
	}

	/**
	 * @return TestType
	 */
	public function getTestType() {
		return $this->TestType;
	}

	/**
	 * @param TestType $TestType
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setTestType( $TestType ) {
		$this->TestType = $TestType;

		return $this;
	}

	/**
	 * @return ArrayOfCardItemValue
	 */
	public function getValues() {
		return $this->Values;
	}

	/**
	 * @param ArrayOfCardItemValue $Values
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setValues( $Values ) {
		$this->Values = $Values;

		return $this;
	}

	/**
	 * @return Vehicle
	 */
	public function getVehicle() {
		return $this->Vehicle;
	}

	/**
	 * @param Vehicle $Vehicle
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setVehicle( $Vehicle ) {
		$this->Vehicle = $Vehicle;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getVehicleCategory() {
		return $this->VehicleCategory;
	}

	/**
	 * @param string $VehicleCategory
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setVehicleCategory( $VehicleCategory ) {
		$this->VehicleCategory = $VehicleCategory;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getVehicleCategory2() {
		return $this->VehicleCategory2;
	}

	/**
	 * @param string $VehicleCategory2
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setVehicleCategory2( $VehicleCategory2 ) {
		$this->VehicleCategory2 = $VehicleCategory2;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getVin() {
		return $this->Vin;
	}

	/**
	 * @param string $Vin
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setVin( $Vin ) {
		$this->Vin = $Vin;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getYear() {
		return $this->Year;
	}

	/**
	 * @param int $Year
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setYear( $Year ) {
		$this->Year = $Year;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFrameNumber() {
		return $this->FrameNumber;
	}

	/**
	 * @param string $FrameNumber
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setFrameNumber( $FrameNumber ) {
		$this->FrameNumber = $FrameNumber;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getEmptyMass() {
		return $this->EmptyMass;
	}

	/**
	 * @param int $EmptyMass
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setEmptyMass( $EmptyMass ) {
		$this->EmptyMass = $EmptyMass;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getMaxMass() {
		return $this->MaxMass;
	}

	/**
	 * @param int $MaxMass
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setMaxMass( $MaxMass ) {
		$this->MaxMass = $MaxMass;

		return $this;
	}

	/**
	 * @return FuelType
	 */
	public function getFuel() {
		return $this->Fuel;
	}

	/**
	 * @param FuelType $Fuel
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setFuel( $Fuel ) {
		$this->Fuel = $Fuel;

		return $this;
	}

	/**
	 * @return BrakingSystemType
	 */
	public function getBrakingSystem() {
		return $this->BrakingSystem;
	}

	/**
	 * @param BrakingSystemType $BrakingSystem
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setBrakingSystem( $BrakingSystem ) {
		$this->BrakingSystem = $BrakingSystem;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTyres() {
		return $this->Tyres;
	}

	/**
	 * @param string $Tyres
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setTyres( $Tyres ) {
		$this->Tyres = $Tyres;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getKillometrage() {
		return $this->Killometrage;
	}

	/**
	 * @param int $Killometrage
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setKillometrage( $Killometrage ) {
		$this->Killometrage = $Killometrage;

		return $this;
	}

	/**
	 * @return RegistrationDocument
	 */
	public function getRegistrationDocument() {
		return $this->RegistrationDocument;
	}

	/**
	 * @param RegistrationDocument $RegistrationDocument
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setRegistrationDocument( $RegistrationDocument ) {
		$this->RegistrationDocument = $RegistrationDocument;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDateOfRetest() {
		if ( $this->DateOfRetest == null ) {
			return null;
		} else {
			try {
				return new \DateTime( $this->DateOfRetest );
			} catch ( \Exception $e ) {
				return false;
			}
		}
	}

	/**
	 * @param \DateTime $DateOfRetest
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setDateOfRetest( \DateTime $DateOfRetest = null ) {
		if ( $DateOfRetest == null ) {
			$this->DateOfRetest = null;
		} else {
			$this->DateOfRetest = $DateOfRetest->format( \DateTime::ATOM );
		}

		return $this;
	}

	/**
	 * @return Expert
	 */
	public function getExpert() {
		return $this->Expert;
	}

	/**
	 * @param Expert $Expert
	 *
	 * @return \JustneroRu\EAISTO\Data\Card
	 */
	public function setExpert( $Expert ) {
		$this->Expert = $Expert;

		return $this;
	}

}
