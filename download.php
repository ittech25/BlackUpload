<?php
include 'configuration/config.php';
include 'classes/Database.php';
include 'classes/UploadHandler.php';

$handler = new UploadHandler;

if (isset($_GET['file_id'])) {
	if($handler->is_exist($_GET['file_id'])){
		$file = $handler->get_file($_GET['file_id']);
		$file_data = json_decode($file->file_data);	
	} else {
		die("File does not exist ):");
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title><?php echo $config['website_name'] ?> - Your Files</title>
    <?php include_once 'components/header.php';?>
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

    <div class="container pt-5 pb-5">
      <div class="row justify-content-center text-center">
        <div class="col-9">
          <div class="card">
            <div class="card-header">
              Download You File
            </div>

            <div class="card-body">
              <h4 class="card-title"></h4>
              <div class="container">
                <div class="ml-auto">
                  <div class="alert">
                    <div class="row border border-primary rounded">
                      <div
                        class="col-sm-12 col-md-12 col-lg-4 text-center pt-4"
                      >
                        <img
                          class="mr-auto justify-content-center"
                          src="<?php echo $file_data->qrcode ?>"
                          title="QR Code"
                        />
                      </div>
                      <div
                        class="col-sm-12 col-md-12 col-lg-8 pt-2 text-left bg-light"
                      >
                        <div
                          class="col-12 text-dark pt-lg-4 pt-sm-0 mb-3 mr-3 ml-3 text-underline"
                        >
                          <p>
                            <u
                              >File Name:
                              <?php echo $file_data->filename ?></u
                            >
                          </p>
                        </div>

                        <div class="col-12 text-dark mt-3 mb-3 mr-3 ml-3">
                          <p>
                            <u
                              >SHA1 Hash:
                              <?php echo $file_data->filehash ?></u
                            >
                          </p>
                        </div>

                        <div class="col-12 text-dark mt-3 mb-3 mr-3 ml-3">
                          <p>
                            <u
                              >File Size:
                              <?php echo $file_data->filesize ?></u
                            >
                          </p>
                        </div>

                        <div class="col-12 text-dark mt-3 mr-3 ml-3 mb-4">
                          <p>
                            <u
                              >Upload Date:
                              <?php echo $file_data->uploaddate ?></u
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="pt-3">
                      <a
                        href="<?php echo $file_data->directlink ?>"
                        class="btn btn-primary text-decoration-none" download
                        >Download</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'components/ads.php';?>

    <?php include_once 'components/footer.php';?>
  </body>
</html>
