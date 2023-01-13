<?php 

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = htmlspecialchars(trim(stripslashes(strtolower($_POST['email']))));
    $password = htmlspecialchars(trim(stripslashes($_POST['password'])));

    //validation

    $errors = [];


    if(empty($email))
    {
        $errors['email'] = "Email is required";

    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors['email'] = "Email not correct";

    }

    if(empty($password))
    {
        $errors['password'] = "Password is required";

    }

    if(empty($errors))
    {

        $query = "SELECT * FROM admin WHERE email = '$email'";

        $result = query_row($query);

        if(is_array($result))
        {   
            if($result['email'] === $email  && password_verify($password, $result['password']))
            {
                //connected

                $_SESSION['admin'] = $result;

                redirect("dash.admin"); 
            }else{

                $errors['failed'] = "Email or Password not correct!"; 
            }
        }

        

    }

}