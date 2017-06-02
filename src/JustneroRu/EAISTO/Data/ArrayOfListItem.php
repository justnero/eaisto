<?php

namespace JustneroRu\EAISTO\Data;

class ArrayOfListItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ListItem[] $ListItem
     */
    protected $ListItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ListItem[]
     */
    public function getListItem()
    {
      return $this->ListItem;
    }

    /**
     * @param ListItem[] $ListItem
     * @return \JustneroRu\EAISTO\Data\ArrayOfListItem
     */
    public function setListItem(array $ListItem = null)
    {
      $this->ListItem = $ListItem;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ListItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ListItem
     */
    public function offsetGet($offset)
    {
      return $this->ListItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ListItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ListItem[] = $value;
      } else {
        $this->ListItem[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ListItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ListItem Return the current element
     */
    public function current()
    {
      return current($this->ListItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ListItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ListItem);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ListItem);
    }

    /**
     * Countable implementation
     *
     * @return ListItem Return count of elements
     */
    public function count()
    {
      return count($this->ListItem);
    }

}
