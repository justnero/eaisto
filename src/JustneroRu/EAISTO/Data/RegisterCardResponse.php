<?php

namespace JustneroRu\EAISTO\Data;

class RegisterCardResponse
{

    /**
     * @var int $RegisterCardResult
     */
    protected $RegisterCardResult = null;

    /**
     * @var string $Nomer
     */
    protected $Nomer = null;

    /**
     * @param int $RegisterCardResult
     * @param string $Nomer
     */
    public function __construct($RegisterCardResult, $Nomer)
    {
      $this->RegisterCardResult = $RegisterCardResult;
      $this->Nomer = $Nomer;
    }

    /**
     * @return int
     */
    public function getRegisterCardResult()
    {
      return $this->RegisterCardResult;
    }

    /**
     * @param int $RegisterCardResult
     * @return \JustneroRu\EAISTO\Data\RegisterCardResponse
     */
    public function setRegisterCardResult($RegisterCardResult)
    {
      $this->RegisterCardResult = $RegisterCardResult;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomer()
    {
      return $this->Nomer;
    }

    /**
     * @param string $Nomer
     * @return \JustneroRu\EAISTO\Data\RegisterCardResponse
     */
    public function setNomer($Nomer)
    {
      $this->Nomer = $Nomer;
      return $this;
    }

}
