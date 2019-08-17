<?php
    // Load config
    require_once 'config/config.php';

    // Autoload core libs
    spl_autoload_register(function($className)
    {
        require_once 'libraries/' . $className . '.php';
    });