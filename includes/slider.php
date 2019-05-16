<div id="slider" class="slider">
	<?php 
	$result = mysqli_query($conn, "SELECT * FROM img_banner");
	while ($row = mysqli_fetch_assoc($result)){
		echo "<img class='mySlides' src='" . $row['link_img'] . "'>";	}
		?>
		<button class="btn_slider_left" onclick="plusDivs(-1)">&#10094;</button>
		<button class="btn_slider_right" onclick="plusDivs(1)">&#10095;</button>
	</div>
	<script type="text/javascript" src="js/slider.js"></script>