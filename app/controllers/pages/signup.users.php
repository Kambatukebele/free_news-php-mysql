<?php 

    //

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $userName = htmlspecialchars(trim(stripslashes(strtolower($_POST['user_name']))));
        $firstName = htmlspecialchars(trim(stripslashes(strtolower($_POST['first_name']))));
        $lastName = htmlspecialchars(trim(stripslashes(strtolower($_POST['last_name']))));
        $email = htmlspecialchars(trim(stripslashes(strtolower($_POST['email']))));
        $password = htmlspecialchars(trim(stripslashes($_POST['password'])));
        $confirmPassword = htmlspecialchars(trim(stripslashes($_POST['confirm_password'])));

        //validation

        $errors = [];

        //CHECK IF USERNAME IS ALREADY TAKEN OR NOT
        $stmt = "SELECT user_name FROM users WHERE user_name = '$userName' LIMIT 1";
        $result_username = query_row($stmt);

        if(empty($userName))
        {
            $errors['userName'] = "User name is required";

        }else if (!preg_match("/^[a-zA-Z ]*$/", $userName)) {

            $errors['userName'] = "User name must contains only letters";

        }else if (strlen($userName) > 10) {

            $errors['userName'] = "User name must contains at least 10 characters";

        }elseif (is_array($result_username) && !empty($result_username)) {
            # code...
            if ($result_username['user_name'] === $userName) {
            
                $errors['userName'] = "This User Name is already taken";             
            }
        }
        
        

        //CHECK IF FIRSTNAME IS ALREADY TAKEN OR NOT
        $stmt_first_name = "SELECT first_name FROM users WHERE first_name = '$firstName' LIMIT 1";
        $result_first_name = query_row($stmt_first_name );

        if(empty($firstName))
        {
            $errors['first_name'] = "First name is required";

        }else if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {

            $errors['first_name'] = "First name must contains only letters";

        }elseif (is_array($result_username) && !empty($result_first_name)) {
            # code...
            if ($result_first_name['first_name'] === $firstName) {
            
                $errors['first_name'] = "This First Name is already taken";
            }
        }
        
       

        //CHECK IF LASTNAME IS ALREADY TAKEN OR NOT
        $stmt_last_name = "SELECT last_name FROM users WHERE last_name = '$lastName' LIMIT 1";
        $result_last_name = query_row($stmt_last_name );

        if(empty($lastName))
        {
            $errors['last_name'] = "Last name is required";

        }else if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {

            $errors['last_name'] = "Last name must contains only letters";

        }elseif (is_array($result_last_name) && !empty($result_last_name)) {
            # code...
            if ($result_last_name['last_name'] === $lastName) {
            
                $errors['last_name'] = "This Last Name is already taken";
            }
        }
        
       

        //CHECK IF EMAIL IS ALREADY TAKEN OR NOT
        $stmt_email = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
        $result_email = query_row($stmt_email );

        if(empty($email))
        {
            $errors['email'] = "Email is required";

        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $errors['email'] = "Email not correct";

        }elseif (is_array($result_email) && !empty($result_email)) {
            # code...
            if ($result_email['email'] === $email) {
            
                $errors['email'] = "This Email is already taken";
            }
        } 
        
       

        if(empty($password))
        {
            $errors['password'] = "Password is required";

        }elseif (strlen($password) < 10) {
            # code...
            $errors['password'] = "Password must be at least 10 characters";
        }

        if($password !== $confirmPassword)
        {
            $errors['password'] = "Password do not match";
        }

        if(empty($errors))
        {            
            $data = []; 

            $data['user_name']  = $userName;
            $data['first_name'] = $firstName;
            $data['last_name']  = $lastName;
            $data['email']      = $email;
            $data['password']   = password_hash($password, PASSWORD_DEFAULT); 

            $query = "INSERT INTO users (user_name, first_name, last_name, email, password) VALUES (:user_name, :first_name, :last_name, :email, :password)";

            query($query, $data); 

            redirect("login_users"); 
        }

    }