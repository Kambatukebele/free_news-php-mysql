<?php 

    if($_SERVER['SERVER_NAME'] == "localhost")
    {
        // DATABASE CONSTANTS
        define("DB_USER", "root");
        define("DB_PASS", "");
        define("DB_SERVER", "localhost");
        define("DB_NAME", "free_news"); 

        //ABSOLUTE LINK

        define("ROOT", "http://localhost:8080");
    }else
    {
        #change the contants in top to the values from the server
    }