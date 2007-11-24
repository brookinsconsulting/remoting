<?php

/**
 * Note: this is not a service class
 * This is a helper class for the class mapping example
 */
class Vector3d
{
    var $x;
    var $y;
    var $z;
    
    function getLength()
    {
    	return sqrt($this->x*$this->x + $this->y*$this->y + $this->z*$this->z);
    }
}
 
?>