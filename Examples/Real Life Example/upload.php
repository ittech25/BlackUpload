<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include "../../Upload.php";

use BlackUpload\Upload;

$upload = new Upload;
$upload->setController("../../");
if ($upload->factory()) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error"));
}
