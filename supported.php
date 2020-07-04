<?php
include 'configuration/config.php';
$count = 1;
$extension = json_decode(file_get_contents("classes/extension.json"));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title><?php echo $config['website_name'] ?> - Supported Formats</title>
    <?php include_once 'components/header.php';?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
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
          Supported Formats
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table
              class="table table-bordered"
              id="dataTable"
              width="100%"
              cellspacing="0"
            >
              <thead>
                <tr>
                  <th>#</th>
                  <th>Format</th>
                  <th>Maximum Size</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
				  <?php foreach ($extension as $ext): ?>
					<tr>
						<td class="font-weight-bold"><?php echo $count ?></td>
						<td class="font-weight-bold"><?php echo $ext ?></td>
						<td class="font-weight-bold">100 MB</td>
						<td class="font-weight-bold">Allowed</td>
					</tr>
					<?php $count++; ?>
				 <?php endforeach; ?>
			</tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'components/ads.php';?>

    <?php include_once 'components/footer.php';?>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
	// Call the dataTables jQuery plugin
	$(document).ready(function () {
	  var table = $("#dataTable").DataTable({
		ordering: true,

		select: {
		  style: "multi",
		},
		order: [[1, "asc"]],
		columnDefs: [
		  {
			targets: 0,
			orderable: false,
		  },
		],
	  });
	});
    </script>
  </body>
</html>
