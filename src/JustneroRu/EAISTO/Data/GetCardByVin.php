<?php

namespace JustneroRu\EAISTO\Data;

class GetCardByVin
{

    /**
     * @var UserInfo $user
     */
    protected $user = null;

    /**
     * @var Purpose $Purpose
     */
    protected $Purpose = null;

    /**
     * @var string $vin
     */
    protected $vin = null;

    /**
     * @var string $regNumber
     */
    protected $regNumber = null;

    /**
     * @var string $BodyNumber
     */
    protected $BodyNumber = null;

    /**
     * @var string $FrameNumber
     */
    protected $FrameNumber = null;

    /**
     * @var string $formNumber
     */
    protected $formNumber = null;

    /**
     * @var string $formSeries
     */
    protected $formSeries = null;

    /**
     * @var string $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var string $dateTo
     */
    protected $dateTo = null;

    /**
     * @param UserInfo $user
     * @param Purpose $Purpose
     * @param string $vin
     * @param string $regNumber
     * @param string $BodyNumber
     * @param string $FrameNumber
     * @param string $formNumber
     * @param string $formSeries
     * @param string $dateFrom
     * @param string $dateTo
     */
    public function __construct($user, $Purpose, $vin, $regNumber, $BodyNumber, $FrameNumber, $formNumber, $formSeries, $dateFrom, $dateTo)
    {
      $this->user = $user;
      $this->Purpose = $Purpose;
      $this->vin = $vin;
      $this->regNumber = $regNumber;
      $this->BodyNumber = $BodyNumber;
      $this->FrameNumber = $FrameNumber;
      $this->formNumber = $formNumber;
      $this->formSeries = $formSeries;
      $this->dateFrom = $dateFrom;
      $this->dateTo = $dateTo;
    }

    /**
     * @return UserInfo
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param UserInfo $user
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return Purpose
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param Purpose $Purpose
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

    /**
     * @return string
     */
    public function getVin()
    {
      return $this->vin;
    }

    /**
     * @param string $vin
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setVin($vin)
    {
      $this->vin = $vin;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegNumber()
    {
      return $this->regNumber;
    }

    /**
     * @param string $regNumber
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setRegNumber($regNumber)
    {
      $this->regNumber = $regNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBodyNumber()
    {
      return $this->BodyNumber;
    }

    /**
     * @param string $BodyNumber
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setBodyNumber($BodyNumber)
    {
      $this->BodyNumber = $BodyNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrameNumber()
    {
      return $this->FrameNumber;
    }

    /**
     * @param string $FrameNumber
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setFrameNumber($FrameNumber)
    {
      $this->FrameNumber = $FrameNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormNumber()
    {
      return $this->formNumber;
    }

    /**
     * @param string $formNumber
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setFormNumber($formNumber)
    {
      $this->formNumber = $formNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormSeries()
    {
      return $this->formSeries;
    }

    /**
     * @param string $formSeries
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setFormSeries($formSeries)
    {
      $this->formSeries = $formSeries;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateFrom()
    {
      return $this->dateFrom;
    }

    /**
     * @param string $dateFrom
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setDateFrom($dateFrom)
    {
      $this->dateFrom = $dateFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
      return $this->dateTo;
    }

    /**
     * @param string $dateTo
     * @return \JustneroRu\EAISTO\Data\GetCardByVin
     */
    public function setDateTo($dateTo)
    {
      $this->dateTo = $dateTo;
      return $this;
    }

}
