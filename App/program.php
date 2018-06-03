<?php

class program {
    public $test;

    public function __construct($test) {
        $this->test = $test;
    }

    public function getTest() {
        return $this->test;
    }
}