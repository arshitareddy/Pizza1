<?php
function get_day($db) {
    $query = 'SELECT * FROM pizza_orders';
    $statement = $db->prepare($query);
    $statement->execute();
    $orders = $statement->fetchAll();
    return $orders; 
    }
function get_currentday($db) {
    $query = 'SELECT * FROM pizza_sys_tab';
    $statement = $db->prepare($query);
    $statement->execute();
    $presentday = $statement->fetchAll();
    return $presentday; 
    }
?>