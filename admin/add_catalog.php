<head>
	<title>Thêm danh mục</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<?php
	include "../controller/connect.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$catalog = $_POST['catalog'];

    # Thêm danh mục
		$insert_sql = "INSERT INTO `news_catalog`(`name_catalog`) VALUES ('$catalog')";

		$conn->query($insert_sql);
		$conn->close();
	}
	?>
	<div>
		<h2>Thêm danh mục</h2>
		<form action="add_catalog.php" method="post">
			<div>
				<input type="text" id="catalog" name="catalog">
			</div>
			<br>
			<button type="submit">Thêm danh mục</button>
		</form>
	</div>
</body>