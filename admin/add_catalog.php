<?php
include "../controller/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$catalog = $_POST['catalog'];

    # Thêm danh mục
	$insert_sql = "INSERT INTO `news_catalog`(`name_catalog`) VALUES ('$catalog')";
}
$conn->close();
?>
<div>
	<h2>Thêm danh mục</h2>
	<form action="add_catalog.php" method="post">
		<div class="form-group">
			<input type="text" class="form-control" id="catalog" name="catalog" required>
		</div>
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
</div>
<br>
</body>
</html>