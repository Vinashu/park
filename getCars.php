<?php
    header('Content-Type: application/json'); 
    $cores = array(array("plate" => "White", "color" => "#FFFFFF"),array("plate" => "Black"),array("plate" => "Blue"),array("plate" => "Red"),array("plate" => "Silver"));
    //$cores = array("plate" => "White");         
    echo json_encode($cores, JSON_FORCE_OBJECT);        
?>