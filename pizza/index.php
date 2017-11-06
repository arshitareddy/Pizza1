<?php

require('../model/database.php');
require('../model/size_db.php');
require('../model/topping_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_student';
    }
}

if ($action == 'list_student') {
    try {
        $size = get_size($db);
        $toppings = get_toppings($db);
        include('student_welcome.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    }
} else if ($action == 'show_add_form') {
    include('order_pizza.php');
} 
?>