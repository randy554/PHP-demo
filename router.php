<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


// Routes 

$routes = [

    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'

];


// Route To Controller

function routToController($uri, $routes) {
    
    if (array_key_exists($uri, $routes)) {
        
        require $routes[$uri];
        
    }else {
        
        abort();
        
    }

}

// Abourt Request To Non-existing Page

function abort ($code=404) {

    http_response_code($code);

    require "views/{$code}.php";

    die();

}

routToController($uri, $routes);