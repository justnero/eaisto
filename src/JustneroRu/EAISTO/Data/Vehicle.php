<?php

namespace JustneroRu\EAISTO\Data;

class Vehicle
{

    /**
     * @var string $Make
     */
    protected $Make = null;

    /**
     * @var string $Model
     */
    protected $Model = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMake()
    {
      return $this->Make;
    }

    /**
     * @param string $Make
     * @return \JustneroRu\EAISTO\Data\Vehicle
     */
    public function setMake($Make)
    {
      $this->Make = $Make;
      return $this;
    }

    /**
     * @return string
     */
    public function getModel()
    {
      return $this->Model;
    }

    /**
     * @param string $Model
     * @return \JustneroRu\EAISTO\Data\Vehicle
     */
    public function setModel($Model)
    {
      $this->Model = $Model;
      return $this;
    }

}
