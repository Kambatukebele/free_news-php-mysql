<?php 

    function BusinessSlider($limit)
    {
        $query = "SELECT * FROM posts_admin  LIMIT $limit";

        $result = query($query);

        return $result; 
        
    }