<?php

/* App Model
 * 
 * Place any global db connections in here
 * Extend your models from App_Model
 *
*/
class App_Model {

    protected $db;
    
    public function __construct()
    {
        $this->db = new Database();
    }

}