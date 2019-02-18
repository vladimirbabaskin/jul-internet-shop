<?php

class View {

    protected $patterm;
    protected $page;

    public function __construct($page, $pattern = PATTERN_DEFAULT) {
        $this->pattern = $pattern;
        $this->page = $page;
    }

    public function rander() {
        include_once 'view' . DIRECTORY_SEPARATOR . 'pattern' . DIRECTORY_SEPARATOR . $this->patterm . '.php';
    }

}
