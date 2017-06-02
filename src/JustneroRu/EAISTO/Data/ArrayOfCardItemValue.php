<?php

namespace JustneroRu\EAISTO\Data;

class ArrayOfCardItemValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CardItemValue[] $CardItemValue
     */
    protected $CardItemValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CardItemValue[]
     */
    public function getCardItemValue()
    {
      return $this->CardItemValue;
    }

    /**
     * @param CardItemValue[] $CardItemValue
     * @return \JustneroRu\EAISTO\Data\ArrayOfCardItemValue
     */
    public function setCardItemValue(array $CardItemValue = null)
    {
      $this->CardItemValue = $CardItemValue;
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
      return isset($this->CardItemValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CardItemValue
     */
    public function offsetGet($offset)
    {
      return $this->CardItemValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CardItemValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CardItemValue[] = $value;
      } else {
        $this->CardItemValue[$offset] = $value;
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
      unset($this->CardItemValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CardItemValue Return the current element
     */
    public function current()
    {
      return current($this->CardItemValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CardItemValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CardItemValue);
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
      reset($this->CardItemValue);
    }

    /**
     * Countable implementation
     *
     * @return CardItemValue Return count of elements
     */
    public function count()
    {
      return count($this->CardItemValue);
    }

}
