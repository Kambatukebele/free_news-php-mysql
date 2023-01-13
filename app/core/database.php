<?php 

  function connect_db()
  {
        $query = "mysql:host=".DB_SERVER.";dbname=".DB_NAME;

        try
        {
            $con = new PDO($query, DB_USER, DB_PASS);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

            // echo "Connected successfully!"; 
            

        }catch(PDOException $e)
        {
            echo "connection failed: " . $e->getMessage(); 
        }

        return $con; 
  }

//   connect_db(); 