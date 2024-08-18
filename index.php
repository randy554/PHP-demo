<?php

require "functions.php";

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

// Routes
if ($uri === '/') {

    require "controllers/index.php";
    
} else if ($uri === '/about') {
    
    require "controllers/about.php";

} elseif ($uri === '/contact') {
    
    require "controllers/contact.php";
}