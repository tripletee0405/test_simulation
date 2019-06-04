<head>
    <title>Danh sách danh mục</title>
</head>
<body>
    <?php
include "../controller/connect.php"; # Kết nối CSDL

# Danh sách các sách
$list_catalog = array();

$result = $conn->query("SELECT id_catalog, name_catalog FROM `news_catalog` ORDER BY id_catalog");

if ($result->num_rows >= 1) {
    while ($row = $result->fetch_assoc()) {
        array_push($list_catalog, array('id_catalog' => $row['id_catalog'], 'name_catalog' => $row['name_catalog']));
    }
}
$result->close();
$conn->close();
?>
<h2>Danh sách danh mục</h2>
<input type="submit" value="Thêm danh mục" onclick="location.href='add_catalog.php'">
<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Danh mục</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index = 1;
        foreach ($list_catalog as $catalog) {
            echo "<tr>";
            echo "<td>$index</td>";
            echo "<td>" . $catalog['name_catalog'] . "</td>";
            echo '<td><a href="/test_simulation/danh_muc?id=' . $catalog['id_catalog'] . '">Xem</a></td>';
            echo '<td><a href="delete_catalog?id=' . $catalog['id_catalog'] . '">Xóa</a></td>';
            echo "</tr>";
            $index++;
        }
        ?>
    </tbody>
</table>
</div>
</body>
</html>