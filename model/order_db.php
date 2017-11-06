<?php
function get_baked($db) {
    $query = 'SELECT * FROM pizza_orders where status = 2';
    $statement = $db->prepare($query);
    $statement->execute();
    $baked = $statement->fetchAll();
    return $baked; 
}
function get_inoven($db) {
    $query = 'SELECT * FROM pizza_orders where status = 1';
    $statement = $db->prepare($query);
    $statement->execute();
    $prep = $statement->fetchAll();
    return $prep; 
}
function get_changestate($db) {
    $query = 'update pizza_orders set status = 2 where status = 1 AND id = (select min(id) from pizza_orders)';
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closecursor();
}
?>