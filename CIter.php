<?php
/**
 * Created by Ethan Liew
 * Project  :
 * Date     : 1/15/14
 * Time     : 1:58 PM
 * Version  :
 * Desc     :
 *
 *
 */
include_once('IIterator.php');
class CIter implements IIterator
{

    private $items;
    private $index = 0;

    function __construct(array $items)
    {
        $this->items = $items;
    }

    function rewind()
    {
        $this->index = 0;
    }

    function current()
    {
        return ($this->items[$this->index]);
    }

    function key()
    {
        return ($this->index);
    }

    function next()
    {
        $this->index++;
        if (isset($this->items[$this->index])) {
            return ($this->items[$this->index]);
        } else {
            return (NULL);
        }
    }

    function valid()
    {
        return (isset($this->items[$this->index]));
    }


}

echo "test";
$x = new CIter(range('A', 'D'));

print_r($x);

foreach ($x as $key => $val) {
    echo "key=$key value=$val";
}