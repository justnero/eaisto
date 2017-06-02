<?php

namespace JustneroRu\EAISTO\Data;

class ListFuelResponse
{

    /**
     * @var ListItem $ListItem
     */
    protected $ListItem = null;

    /**
     * @param ListItem $ListItem
     */
    public function __construct($ListItem)
    {
      $this->ListItem = $ListItem;
    }

    /**
     * @return ListItem
     */
    public function getListItem()
    {
      return $this->ListItem;
    }

    /**
     * @param ListItem $ListItem
     * @return \JustneroRu\EAISTO\Data\ListFuelResponse
     */
    public function setListItem($ListItem)
    {
      $this->ListItem = $ListItem;
      return $this;
    }

}
