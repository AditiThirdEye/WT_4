<?php

header("Content-type: application/json");
require 'obj.php';

$req = $_GET['req'] ?? null;

if ($req) {
    $jsonData = file_get_contents("restaurant.json");
    $mlist = json_decode($jsonData, true)['menu_items'];

    try {
        $res = new restaurantinfo($mlist);
    } catch (Expection $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}

switch ($req) {
    case 'menu_list':
        echo $res->getName();
        break;
    
    case 'menuname':
        $id = $_GET['id'] ?? null;
        echo $res->getDetails($id);
        break;
    default:
        echo json_encode(["Invalid request"]);
        break;
}
?>