<?php
include 'configuration/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
		<meta charset="UTF-8" />
        <title>
			<?php echo $config['website_name'] ?> - File Uploading Service
		</title>
		<?php include_once 'components/header.php';?>
      <style type="text/css">
        #submit {
          transition: all 0.5s;
        }
        #submitURL {
          transition: all 0.5s;
        }
      </style>
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
            <li class="nav-item active">
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
          <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="card">
              <div class="card-header">
                <b>Upload Your Files</b>
              </div>
              <div class="card-body">
				  <div id="upload_alert"></div>
				  <div id="upload_alert">
					<?php if( isset( $_GET['error'] )): ?>
					<div class="alert alert-danger">You are trying to bypass the security measures</div>
					<?php endif; ?>
				  </div>
                <p class="card-title lead font-weight-bold text-dark">
                  Select Files
                </p>
                <form
                  enctype="multipart/form-data"
                  role="form"
                  method="POST"
                  action="upload.php"
                >
                  <div class="form-group" id="dvFile">
                    <input
                      type="file"
                      class="form-control-file pt-2"
                      id="file[]"
                      name="file[]"
                    />
                    <input
                      type="file"
                      class="form-control-file pt-2"
                      id="file[]"
                      name="file[]"
                    />
                    <input
                      type="file"
                      class="form-control-file pt-2"
                      id="file[]"
                      name="file[]"
                    />
                    <input
                      type="file"
                      class="form-control-file pt-2"
                      id="file[]"
                      name="file[]"
                    />
                  </div>
                  <div class="form-group">
                    <input type="checkbox" name="tos" id="tos" />
                    <label for="tos"
                      >I agree to the
                      <a href="terms.php">Terms and Conditions</a></label
                    >
                  </div>
                  <button
                    id="submit"
                    name="submit"
                    type="submit"
                    class="btn btn-primary disabled"
                  >
                    <span class="fa fa-upload"></span> Upload Files
                  </button>
                  <a
                    onclick="add_more()"
                    id="add_more"
                    class="btn btn-primary text-white"
                    ><span class="fa fa-plus"></span> Add a File</a
                  >
                </form>
              </div>
              <div class="card-footer mb-0">
                <p class="mb-0">
                  Note: Supported formats:
                  <a href="supported.php">See Here...</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include_once 'components/ads.php';?>

      <?php include_once 'components/footer.php';?>

      <script type="text/javascript">
        count = 4;
        function add_more() {
          if (count <= 9) {
            var txt =
              "<input type=\"file\" class=\"form-control-file pt-2\" id=\"file[]\" name=\"file[]\">";
            $("#dvFile").append(txt);
            count++;
          } else {
            $("#upload_alert").html("<div class=\"alert alert-danger\">Sorry you can't upload more then 10 files</div>")
            $("#add_more").addClass("disabled");
          }
        }

        $("#tos").change(function() {
          if ($(this).prop("checked")) {
            $("#submit").removeClass("disabled");
          } else {
            $("#submit").addClass("disabled");
          }
        });
      </script>
    </body>
  </html>
</html>
