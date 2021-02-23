<?php
$response = array(
  "status" => 200,
  "value" => strtoupper($_GET["word"])
);
header('Content-Type: application/json');
echo json_encode($response);
?>