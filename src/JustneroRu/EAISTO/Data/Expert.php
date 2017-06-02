<?php

namespace JustneroRu\EAISTO\Data;

class Expert
{

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
     * @param string $Name
     * @param string $FName
     * @param string $MName
     */
    public function __construct($Name, $FName, $MName)
    {
      $this->Name = $Name;
      $this->FName = $FName;
      $this->MName = $MName;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \JustneroRu\EAISTO\Data\Expert
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getFName()
    {
      return $this->FName;
    }

    /**
     * @param string $FName
     * @return \JustneroRu\EAISTO\Data\Expert
     */
    public function setFName($FName)
    {
      $this->FName = $FName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMName()
    {
      return $this->MName;
    }

    /**
     * @param string $MName
     * @return \JustneroRu\EAISTO\Data\Expert
     */
    public function setMName($MName)
    {
      $this->MName = $MName;
      return $this;
    }

}
