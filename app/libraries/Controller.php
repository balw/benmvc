<?php

    /*  
     *  Base Controller
     *  Loads models and views
     */

     class Controller {
         // Load model
         public function model($model)
         {
            // Require model file
            require_once '../app/models/' . $model . '.php';
            
            // Instatiate model
            return new $model();
         }

         public function view($view, $data = [])
         {
             // Check for the view file
             if (file_exists('../app/views/' . $view . '.php')){
                 require_once '../app/views/' . $view . '.php';
             } else {
                 // view does not exist
                 die('View does not exist');
             }
         }
     }
