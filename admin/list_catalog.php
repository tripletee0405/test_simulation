<head>
	<title>Danh sách danh mục</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<div>
		<h2>Danh sách danh mục</h2>
		<?php
		include "../controller/connect.php";

		$list_catalog = array();

		$result = $conn->query("SELECT name_catalog FROM `news_catalog` ORDER BY id_catalog");

if ($result->num_rows > 1) {
	while ($row = $result->fetch_assoc()) {
		array_push($list_catalog, array('name_catalog' => $row['name_catalog']));
	}
}
$result->close();
$conn->close();
?>
<div>
	<h2>Danh sách danh mục</h2>
	<input type="submit" value="Thêm chuyên mục" onclick="location.href='add_catalog.php'">
	<table>
		<thead>
			<tr>
				<th>Tên Danh mục</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($list_catalog as $catalog) {
				echo "<tr>";
				echo "<td>" . $catalog['name_catalog'] . "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>
</body>