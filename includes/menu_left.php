<div id="menu_left" class="menu_left">
	<h3>Menu</h3>
	<ul>
		<?php 
		$result = mysqli_query($conn, "SELECT * FROM news_catalog ORDER BY id_catalog ASC");
		while ($row = mysqli_fetch_assoc($result)){
			echo "<li><a href='#'>" . $row['name_catalog'] . "</a></li>";
		}
		?>
	</ul>
	<p>Copyright 2017</p>
</div>