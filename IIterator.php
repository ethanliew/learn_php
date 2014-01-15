<?php
/**
 * Created by Ethan Liew
 * Project  :
 * Date     : 1/15/14
 * Time     : 1:57 PM
 * Version  :
 * Desc     :
 *
 *
 */
interface IIterator
{
    public function rewind(); // Returns the iterator the beginning
    public function next(); // Get to the next member
    public function key(); // Get the key of the current object.
    public function current(); // Get the value of the current object
    public function valid(); // Is the current index valid?
}

?>
