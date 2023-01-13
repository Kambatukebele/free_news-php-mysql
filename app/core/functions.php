<?php 

    function query(string $query, array $data = [])
    {
        $conn = connect_db();
        $stmt = $conn->prepare($query);
        $stmt->execute($data); 

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(is_array($result) && !empty($result))
        {
            return $result;
        }

        return false; 
    }

    function query_row(string $query, array $data = [])
    {
        $conn = connect_db();
        $stmt = $conn->prepare($query);
        $stmt->execute($data); 

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(is_array($result) && !empty($result))
        {
            return $result[0];
        }

       return false; 
    }

    function redirect($page)
    {
        header("Location:" . ROOT . '/' .$page); 
        die; 
    }

    function OLD_VALUES ($key, $default = "")
    {
        if(!empty($_POST[$key]))
            return $_POST[$key];

        return $default;
    }

    function is_logged_admin()
    {
        if(empty($_SESSION['admin']) && !isset($_SESSION['admin']))
        {
            return redirect("login_admin");
        }
    }

    function is_logged_users()
    {
        if(empty($_SESSION['users']) && !isset($_SESSION['users']))
        {
            redirect("dash.users");
        }
    }

    function logoutAdmin()
    {
        if(!empty($_SESSION['admin']) && isset($_SESSION['admin']))
        {
           session_unset();
           session_destroy();
           redirect("login_admin");
          
        }
    }

    function logoutUsers()
    {
        if(!empty($_SESSION['users']) && isset($_SESSION['users']))
        {
           session_unset();
           session_destroy();
           redirect("login_users");
           
        }
    }


    

    //CALCULATNG NUMBER OF ADMIN AND USERS AND POSTS FOR EACH

    function AdminCalcul()
    {
        $query = "SELECT * FROM admin";

        $result = query($query);

        $count = count($result);

        return $count; 
        
    }

    function UsersCalcul()
    {
        $query = "SELECT * FROM users";

        $result = query($query);

        $count = count($result);
        
        return $count; 
        
    }
