	<!--  ================= Hero =================  -->
<?php 
	$image = get_field('h_background');
	// dump($image);
?>

<section class="hero" style="background-image: url(<?php echo $image['sizes']['full-hd']; ?>);" id="home">
		
	<div class="container">
		<div>
			<h1><?php echo the_field('h_heading'); ?></h1>
		</div>
	</div>

</section>