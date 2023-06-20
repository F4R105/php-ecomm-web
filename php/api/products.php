<?php

    $db = mysqli_connect('localhost','root','','ecomm');
    $query = "SELECT pid, name, price, image FROM products";
    $results = mysqli_query($db, $query);

    $products = [];
    while($row = mysqli_fetch_assoc($results)){
        $products[] = $row;
    };

    echo json_encode($products);