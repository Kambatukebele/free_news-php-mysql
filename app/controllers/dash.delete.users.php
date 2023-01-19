<?php

    $query = "SELECT * FROM users";

    $result = query($query);

    $id = $result[0]['id'];

    $query = "DELETE FROM users WHERE id = '$id'";  
    
    $result = query_row($query);

    redirect("dash.admin");
