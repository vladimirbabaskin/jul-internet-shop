<?php

class Pointer {

    static public function init() {

        $view = new View($page);
        $products = new Product();
        $view->products = $products->all();
        $view->rander();
    }

}
