<?php

class Pages extends App_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->displayPage([
            'page' => 'home',
            'title' => $this->title,
            'data' => [
                '1' => 'test'
            ]
        ]);
    }
}