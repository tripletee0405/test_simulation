<div id="news" class="news">
	<?php 
	$result = mysqli_query($conn, 'SELECT COUNT(id_news) AS total FROM news');
	$row = mysqli_fetch_assoc($result);
	$total_records = $row['total'];
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$limit = 5;
	$total_page = ceil($total_records / $limit);
	if ($current_page > $total_page){
		$current_page = $total_page;
	}
	else if ($current_page < 1){
		$current_page = 1;
	}
	$start = ($current_page - 1) * $limit;

	$result = mysqli_query($conn, "SELECT * FROM news ORDER BY id_news DESC LIMIT $start, $limit");

	?>
	<div>
		<a href=""></a>
		<?php 
		while ($row = mysqli_fetch_assoc($result)){
			echo "<div class='bai_viet'>
					<a href='chi_tiet_bai_viet.php?id=" . $row['id_news'] . "'><img src='" . $row['img'] . "'></a>
					<h3><a href='chi_tiet_bai_viet.php?id=" . $row['id_news'] . "'>" . $row['name_news'] . "</a></h3>
					<p>" . $row['des_news'] . "</p>
				</div>";	}
		?>
	</div>
	<div class="pagination">
		<?php 
		if ($current_page > 1 && $total_page > 1){
			echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
		}
		for ($i = 1; $i <= $total_page; $i++){
			if ($i == $current_page){
				echo '<span>'.$i.'</span> | ';
			}
			else{
				echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
			}
		}
		if ($current_page < $total_page && $total_page > 1){
			echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
		}
		?>
	</div>
</div>