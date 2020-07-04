<footer class="py-5 bg-primary">
  <div class="container">
    <p class="m-0 text-center text-white">
      Copyright &copy;
      <?php echo $config['website_name'] . " - " . date('Y') ?>
    </p>
    <div data-aos="slide-up">
      <div class="container text-center pt-3 h6">
        <ul class="list-inline">
          <?php foreach ($socialmedia as $key => $value): ?>
          <li class="list-inline-item circle">
            <a href="<?php echo $value ?>"
              ><i
                class="onhover fa fa-<?php echo $key ?> fa-stack circle-<?php echo $key ?>"
              ></i
            ></a>
          </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
  </div>
  <!-- /.container -->
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"
></script>
<script
  type="text/javascript"
  src="src/js/owl.carousel.min.js"
></script>
<script
  type="text/javascript"
  src="src/js/custom.js"
></script>
