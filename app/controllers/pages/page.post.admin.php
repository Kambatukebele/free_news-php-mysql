<?php

     if($_SERVER['REQUEST_METHOD'] == "POST")
    {      

        $title = htmlspecialchars(trim(stripslashes($_POST['title'])));
        $image = $_FILES['main_image']; 
        $category = htmlspecialchars(trim(stripslashes($_POST['category'])));
        $description = htmlspecialchars(trim(stripslashes($_POST['description'])));
        $blog = htmlspecialchars(stripslashes($_POST['editordata'])); 
        $imageName = $_FILES['main_image']['name'];
        $imageFullPath = $_FILES['main_image']['full_path'];
        $image_type = $_FILES['main_image']['type'];
        $image_tmp_name =  $_FILES['main_image']['tmp_name'];
        $imageError = $_FILES['main_image']['error']; 
        $imageSize = $_FILES['main_image']['size'];
        $allowImageExtension = ["image/png", "image/jpg", "image/jpeg"]; 
       
        $errors = [];

        //validation

        if(empty($title))
        {
            $errors['title'] = "Title is required";
        }elseif (!preg_match("/^[a-zA-Z ]*$/", $title)) {
            # code...
            $errors['title'] = "Title must contain only letters";
        }

        if(!file_exists($image_tmp_name))
        {   
            $errors['main_image'] = "An Image is required"; 

        }else if(!in_array($image_type, $allowImageExtension))
        {
            $errors['main_image'] = "Wrong image format"; 

        }elseif ($imageSize > 2000000 ) {
            # code...
            $errors['main_image'] = "Image size exceeds 2MB"; 

        }         

        if($category === "choose")
        {
            $errors['category'] = "Please choose a category";  
        }

        if(empty($errors))
        {

            $target = "assets/image_posts/" . basename($imageName);
            if(move_uploaded_file($image_tmp_name, $target))
            {
                $data = [];

                $data['title'] = $title;
                $data['main_image'] =$imageName;
                $data['category'] = $category;
                $data['description'] = $description; 
                $data['editordata'] = $blog; 
                $data['admin_id'] = $_SESSION['admin']['id']; 

                $query = "INSERT INTO posts_admin (title, main_image, category, description, editordata, admin_id) VALUES (:title, :main_image, :category, :description, :editordata, :admin_id)";

                query($query, $data); 

                redirect("post.admin"); 
            }

            
        }

        

    }