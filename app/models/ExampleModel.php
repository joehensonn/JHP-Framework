<?php

class ExampleModel extends App_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /* Example database fetch
    * 
    * Look in database library for more information
    *
    */
    public function getAll()
    {
        $this->db->query("SELECT * FROM mytablename");

        return $this->db->resultSet();
    }
}