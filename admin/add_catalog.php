<head>
	<title>Thêm bài viết</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<?php
	include "../controller/connect.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name_catalog = $_POST['name_catalog'];

		$insert_sql = "INSERT INTO `news_catalog`(`name_catalog`) VALUES ('$name_catalog')";
		if ($conn->query($insert_sql) === TRUE) {
			echo "Thêm danh mục thành công";
		}
		else {
			echo "Thêm bài viết thất bại";
		}
	}
	$conn->close();
	?>
	<div>
		<h2>Thêm danh mục</h2>
		<form id="form_add_catalog" action="add_catalog.php" method="POST">
			<input class="input_add-catalog" type="text" id="name_catalog" name="name_catalog" required>
			<button type="submit">Thêm danh mục</button>
		</form>
	</div>
</body>