<?php

   $routes =  require 'routes.php';


// Route To Controller

function routToController($uri, $routes) {
    
    if (array_key_exists($uri, $routes)) {
        
        require $routes[$uri];
        
    }else {
        
        abort();
        
    }

}

// Abort Request To Non-existing Page

function abort ($code=404) {

    http_response_code($code);

    require "views/{$code}.php";

    die();

}


$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

routToController($uri, $routes);