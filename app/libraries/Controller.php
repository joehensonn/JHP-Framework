<?php

/* Base Controller
 * 
 * Loads any models and views
 * URI: /controller/method/parameters
 *
*/
class Controller {

    public $title = SITE_NAME;
    
    /*
    * Model
    * Load specified model
    */
    public function model($model)
    {
        if (file_exists('../app/models/' . $model . '.php')) {

            require_once '../app/models/' . $model . '.php';
            // Include model

        } else {

            die('Unable to locate model: ' . $model);
            // Nope, not there. Need to implement a global error handler... another day!

        }
        // Check if model exists

        return new $model();
        // Instantiate model
    }

    /*
    * View
    * Load specified view with any associated data
    */
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {

            require_once '../app/views/' . $view . '.php';
            //Include view

        } else {

            die('Unable to locate view: ' . $view);
            // Cannot find view

        }
        // Check if view file exists

    }

    /*
    * View
    * Load specified view with any associated data
    */
    public function loadView($view, $data = [])
    {
        include '../app/views/' . $view . '.php';
        //Include view
    }


}