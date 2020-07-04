<?php
$handler = new UploadHandler;

if (isset($_GET['file_id']) && isset($_GET['user_id'])) {
    if ($handler->is_exist($_GET['file_id']) && $handler->user_exist($_GET['user_id'])) {
        $file = json_decode($handler->get_file($_GET['file_id'])->file_data);
        if ($handler->delete_file($_GET['file_id'], $_GET['user_id'])) {
            unlink(realpath("uploads" . "/" . $file->filename));
            $msg = "File has been deleted (:";
        } else {
            $msg = "The delete process failed";
        }
    } else {
        $msg = "File does not exist or User ID is incorrect ):";
    }
} else {
    $msg = "User ID or File ID is missing";
}
