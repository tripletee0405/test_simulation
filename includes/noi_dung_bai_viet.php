<div id="news" class="news">
		<?php
		$id = -1;
		if (isset($_GET["id"])) { $id = intval($_GET['id']); }
		$result = mysqli_query($conn, "SELECT * FROM news WHERE id_news = $id");
		while ($row = mysqli_fetch_assoc($result)){
			echo "<div class='bai_viet'>
			<img src='" . $row['img'] . "'>
			<h3>" . $row['name_news'] . "</h3>
			<p>" . $row['content'] . "</p>
			</div>";	}
			?>
	</div>