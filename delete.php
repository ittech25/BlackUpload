<?php
include 'configuration/config.php';
include 'classes/Database.php';
include 'classes/UploadHandler.php';
include 'logic/deleteLogic.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title><?php echo $config['website_name'] ?> - Delete File</title>
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
              Delete you file
            </div>

            <div class="card-body">
              <h4 class="card-title"></h4>
              <div class="container">
                <div class="ml-auto">
                  <div class="alert">
                    <div class="border border-primary rounded">
						<p class="pt-3 text-dark"><?php echo $msg; ?></p>
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
