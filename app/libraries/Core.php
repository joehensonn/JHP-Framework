<?php

/* Core Class
 * 
 * Creates URL & Loads core controller
 * URL: /controller/method/parameters
 *
*/
class Core {

    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        // Get URL from user

        $url = $this->setController($url);
        // Check controller exists

        $url = $this->methodExists($url);

        $this->assignParams($url);
    }

    private function getUrl()
    {
        if (isset($_GET['url'])) {
            
            $url = rtrim($_GET['url'], '/');
            // Trim trailing forward slash

            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Sanitize user input

            $url = explode('/', $url);
            // Split URL into array

            return $url;

        }
    }

    private function setController($url)
    {
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {

            $this->currentController = ucwords($url[0]);

            unset($url[0]);

        }
        // Reassign controller to be one specified by the user if exists

        require_once '../app/controllers/' . $this->currentController . '.php';
        // Fetch controller

        $this->currentController = new $this->currentController;

        return $url;

    }

    private function methodExists($url)
    {
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];

                unset($url[1]);
            }
        }

        return $url;
    }

    private function assignParams($url)
    {
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
}