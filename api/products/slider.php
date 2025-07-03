
<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$slider_items = [
    ["id" => 1, "title" => "Summer Collection", "image_url" => "/assets/summer.jpg"],
    ["id" => 2, "title" => "Winter Collection", "image_url" => "/assets/winter.jpg"]
];

echo json_encode(["status" => "success", "data" => $slider_items]);
?>
