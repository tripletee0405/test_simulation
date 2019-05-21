<head>
    <title>List News</title>
</head>
<body>
    <?php
    include "../controller/connect.php";
    # Danh sách các sách
    $list_news = array();

    $result = $conn->query("SELECT `id_news`, `name_news` FROM `news` ORDER BY id_news DESC");

    if ($result->num_rows > 1) {
        while ($row = $result->fetch_assoc()) {
            array_push($list_news, array('id_news' => $row['id_news'],'name_news' => $row['name_news']));
        }
    }
    $conn->close();
    ?>
    <div>
        <h2>Danh sách tin tức</h2>
        <button><a href="add_news.php" target="_blank">Thêm tin tức</a></button>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_news as $news) {
                    echo '<tr><td>' . $news['name_news'] . '</td><td><a href="../chi_tiet_bai_viet.php?id=' . $news['id_news'] .'"></td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>