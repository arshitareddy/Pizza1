<?php
function add_size($db, $size_name)  
{
    $query = 'insert into pizza_size(size_name) values(:size_name)';
    $statement = $db->prepare($query);
    $statement->bindvalue(':size_name',$size_name);
    $statement->execute();
    $statement->closecursor();
}
function get_size($db) {
    $query = 'SELECT * FROM pizza_size';
    $statement = $db->prepare($query);
    $statement->execute();
    $size = $statement->fetchAll();
    return $size; 
}

?>