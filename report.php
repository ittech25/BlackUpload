<?php
include 'configuration/config.php';
include "logic/reportLogic.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $config['website_name'] ?> - Report Abuse</title>
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
          <li class="nav-item">
            <a class="nav-link" href="about.php"
              ><span class="fa fa-user"></span> About Us</a
            >
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="report.php"
              ><span class="fa fa-flag"></span> Report Abuse</a
            >
          </li>
        </ul>
      </div>
    </nav>

    <div class="container pb-5 pt-5">
      <div class="row justify-content-center text-center">
        <div class="col-sm-12 col-md-8 col-lg-8">
          <div class="card">
            <div class="card-header">
              <b>Report Abuse</b>
            </div>
            <div class="card-body">
              <div class="container">
				  <?php if(isset($ok)): ?>
					<div class="alert alert-success"><?php echo $ok ?></div>
					<?php elseif(isset($error)): ?>
					<div class="alert alert-danger"><?php echo $error ?></div>
				  <?php endif; ?>
			</div>
              <form role="form" method="POST">
                <div class="form-row justify-content-center text-center">
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        name="firstname"
                        id="firstname"
                        placeholder="First Name"
                      />
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        name="lastname"
                        id="lastname"
                        placeholder="Last Name"
                      />
                    </div>
                  </div>

                  <div class="form-group col-sm-12 col-md-12 col-lg-8">
                    <input
                      type="email"
                      name="email"
                      id="subject"
                      class="form-control"
                      placeholder="Email Address"
                    />
                  </div>

                  <div class="form-group col-sm-12 col-md-12 col-lg-8">
                    <input
                      type="subject"
                      name="subject"
                      id="subject"
                      class="form-control"
                      placeholder="Subject"
                    />
                  </div>

                  <div class="form-group col-sm-12 col-md-12 col-lg-8">
                    <textarea
                      class="form-control"
                      name="message"
                      id="message"
                      rows="5"
                    >
Your Message</textarea
                    >
                  </div>
                </div>
                <button
                  type="submit"
                  id="submit"
                  name="submit"
                  class="btn btn-primary rounded"
                >
                  Send Report
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'components/ads.php';?>

    <?php include_once 'components/footer.php';?>
  </body>
</html>
