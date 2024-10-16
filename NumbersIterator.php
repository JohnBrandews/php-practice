<?php

class NumbersIterator implements Iterator {
    private $position = 0;
    private $array = [1, 2, 3, 4, 5];

    public function __construct() {
        $this->position = 0;
    }

    public function rewind() : void {
        $this->position = 0;
    }

    public function current() : int {
        return $this->array[$this->position];
    }

    public function key() : int {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function valid() : bool {
        return isset($this->array[$this->position]);
    }
}

// Using the iterator
$numbers = new NumbersIterator();
foreach($numbers as $key => $value) {
    echo "$key: $value\n";
}