<div class="container pb-4 view-ad-image">
	<div class="owl-carousel owl-theme">
	<?php foreach ($ads as $key => $value): ?>
		<div class="item"><a href="<?php echo $key ?>"
        ><img class="img-fluid rounded" src="<?php echo $value ?>"
      /></a></div>
      <?php endforeach;?>
	</div>
</div>
