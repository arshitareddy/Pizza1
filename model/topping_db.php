<?php
// the try/catch for these actions is in the caller
function add_topping($db, $topping_name)  
{
    $query = 'insert into toppings(topping_name) values(:topping_name)';
    $statement = $db->prepare($query);
    $statement->bindvalue(':topping_name',$topping_name);
    $statement->execute();
    $statement->closecursor();
}

function get_toppings($db) {
    $query = 'SELECT * FROM toppings';
    $statement = $db->prepare($query);
    $statement->execute();
    $toppings = $statement->fetchAll();
    return $toppings;    
}

?>