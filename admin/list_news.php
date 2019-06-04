<head>
    <title>Danh sách bài viết</title>
</head>
<body>
    <?php
include "../controller/connect.php"; # Kết nối CSDL

# Danh sách các sách
$list_news = array();

$result = $conn->query("SELECT id_news, name_news FROM `news` ORDER BY id_news");

if ($result->num_rows >= 1) {
    while ($row = $result->fetch_assoc()) {
        array_push($list_news, array('id_news' => $row['id_news'], 'name_news' => $row['name_news']));
    }
}
$result->close();
$conn->close();
?>
<h2>Danh sách bài viết</h2>
<input type="submit" value="Thêm bài viết" onclick="location.href='add_news.php'">
<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index = 1;
        foreach ($list_news as $news) {
            echo "<tr>";
            echo "<td>$index</td>";
            echo "<td>" . $news['name_news'] . "</td>";
            echo '<td><a href="/test_simulation/chi_tiet_bai_viet?id=' . $news['id_news'] . '">Xem</a></td>';
            echo '<td><a href="delete_news?id=' . $news['id_news'] . '">Xóa</a></td>';
            echo "</tr>";
            $index++;
        }
        ?>
    </tbody>
</table>
</div>
</body>
</html>