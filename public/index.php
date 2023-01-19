<?php 

    session_start(); 

    require "../app/core/init.php"; 


    function sliptURL ()
    {
        $URL = $_GET['url'] ?? "home"; 

        $URL = explode("/", htmlspecialchars($URL)); 

        return $URL; 
    }

    function loadPage ()
    {
        $URL = sliptURL();

        $FILENAME = "../app/controllers/" . htmlspecialchars($URL[0]) . ".php";

        if(file_exists($FILENAME))
        {
            require $FILENAME;
            
        }else 
        {
            $FILENAME = "../app/controllers/404.php"; 
            require $FILENAME; 
        }
    }

    loadPage(); 
  