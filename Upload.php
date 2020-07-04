<?php
include "configuration/config.php";
include "classes/Database.php";
include "classes/Upload.php";
include "classes/UploadHandler.php";

use BlackUpload\Upload;

$upload = new Upload;
$handler = new UploadHandler;

$upload->setINI(
    [
        "file_uploads" => 1,
        "display_errors" => 1,
        "log_errors" => 1,
        "error_log" => "error_logs/php_scripts_error.log",
        "upload_max_filesize" => "2000M",
        "max_file_uploads" => "10",
        "post_max_size" => "2500M",
        "max_input_time" => "60",
        "memory_limit" => "500M",
        "max_execution_time" => "60",
    ]
);

$upload->setController("classes/");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $inputs = $upload->fix_array($_FILES['file']);
    if (count($inputs) > 10) {
        header('Location: index.php?error=1');
        exit;
    }

    foreach ($inputs as $file) {
        if ($upload->factory($file)) {
            $handler->add_file($upload->getFileID(), $upload->getUserID(), $upload->getJSON());
        }
    }
}
$resp = $upload->getLogs();
$files = $upload->get_files()

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title><?php echo $config['website_name'] ?> - Your Files</title>
    <?php include_once 'components/header.php'?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#"><?php echo $config['website_name'] ?></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarColor01"
        aria-controls="navbarColor01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"
              ><span class="fa fa-home"></span> Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="terms.php"
              ><span class="fa fa-file-text"></span> Terms of Services</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"
              ><span class="fa fa-user"></span> About Us</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php"
              ><span class="fa fa-flag"></span> Report Abuse</a
            >
          </li>
        </ul>
      </div>
    </nav>

    <div class="container pb-5 pt-5">
      <div class="row justify-content-center text-center">
        <div class="col-sm-12 col-md-9 col-lg-9">
          <div class="card">
            <div class="card-header">
              Your Uploaded Files
            </div>
            <div class="card-body">
              <h4 class="card-title">Your Files</h4>
              <hr />
              <div class="container">
                <?php foreach ($files as $file): ?>
                <div class="alert alert-success mb-1 mt-3">
                  <b><?php echo $file->filename . " : " . $upload->getMessage($file->message) ?></b>
                </div>
                <?php echo $file->filename; ?>
                <br />
                <a
                  class="btn btn-primary"
                  href="<?php echo $file->downloadurl ?>"
                  >Click Here to Download</a
                >
                <a
                  class="btn btn-danger"
                  href="<?php echo $file->deletelink ?>"
                  >Click Here to Delete</a
                >
                <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'components/ads.php'?>
    <?php include_once 'components/footer.php'?>
  </body>
</html>
