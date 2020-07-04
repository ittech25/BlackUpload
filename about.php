<?php
include 'configuration/config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title><?php echo $config['website_name'] ?> - About Us</title>
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
              ><span class="fa fa-home"></span> Home
              <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="terms.php"
              ><span class="fa fa-file-text"></span> Terms of Services</a
            >
          </li>
          <li class="nav-item active">
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
      <div class="card">
        <div class="card-header">
          About
          <?php echo $config['website_name'] ?>
        </div>
        <div class="card-body">
          <h3 class="card-title">About Us</h3>
          <p>
            <?php echo $config['website_name'] ?>
            is a free and anonymous file-sharing platform. You can store and
            share data of all types (files, images, music, videos etc...). There
            is no limit, you download at the maximum speed of your connection
            and everything is free.
          </p>

          <h3>Supported Formats</h3>
          <p>
            We support more then 900 format
            <a href="supported.php">See Here...</a>
          </p>

          <h3>No registration required</h3>
          <p>
            Use
            <?php echo $config['website_name'] ?>
            immediatly, no registration required.
          </p>

          <h3>Privacy and Anonymity</h3>
          <p>
            Respecting our users is essential. We do not store any personal
            data, we do not sell anything.
          </p>
        </div>
      </div>
    </div>

    <?php include_once 'components/ads.php';?>

    <?php include_once 'components/footer.php';?>
  </body>
</html>
