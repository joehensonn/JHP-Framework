<?php

/* App Controller
 * 
 * Extends the core controller
 * Place any custom global methods & variables within here
 * Extend your controllers from App_Controller
 *
*/
class App_Controller extends Controller {
    
    public function __construct()
    {
        
    }

    protected function displayPage($params = [])
    {
        $this->view('default', $params);
        // Load default template
    }

}