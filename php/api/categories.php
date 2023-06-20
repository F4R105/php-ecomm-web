<?php

    $db = mysqli_connect('localhost','root','','ecomm');
    $query = "SELECT cid, name FROM categories";
    $results = mysqli_query($db, $query);

    $categories = [];
    while($row = mysqli_fetch_assoc($results)){
        $categories[] = $row;
    };

    echo json_encode($categories);