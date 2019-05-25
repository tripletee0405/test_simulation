<head>
    <title>Thêm bài viết</title>
    <script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script src="../js/jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <?php
    include "../controller/connect.php";
    $result = $conn->query("SELECT * FROM `news_catalog`");

# Danh mục bài viết
    $news_catalog = array();

    if ($result->num_rows > 1) {
        while ($row = $result->fetch_assoc()) {
            $name_catalog[$row['name_catalog']] = $row['id_catalog'];;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_catalog = (int)$_POST['id_catalog'];
        $name_news = $_POST['name_news'];
        $des_news = $_POST['des_news'];
        $img = $_POST['img'];
        $content = $_POST['content'];

    # Thêm bài viết
        $insert_sql = "INSERT INTO `news`(`id_catalog`, `name_news`, `des_news`, `img`, `content`) VALUES ($id_catalog, '$name_news', '$des_news', '$img', '$content')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "Hello";
        }
        else {
            echo "Fuck";
        }
    }
    $result->close();
    $conn->close();
    ?>
    <div>
        <h2>Thêm Bài viết</h2>
        <form id="form_add_news" action="add_news.php" method="POST">
            <div>
                <label>Chuyên mục:</label>
                <select id="id_catalog" name="id_catalog">
                    <?php
                    foreach ($name_catalog as $key => $value) {
                        echo "<option value=\"$value\">$key</option>";
                    }
                    ?>
                </select>
                <br>
                <br>
                <label for="name_news">Title:</label>
                <textarea type="text" id="name_news" name="name_news" required></textarea>
                <br>
                <br>
                <br>
                <label for="des_news">Mô tả:</label>
                <textarea type="text" id="des_news" name="des_news" required></textarea>
                <br>
                <br>
                <br>
                <label for="img">Link ảnh:</label>
                <input type="text" id="img" name="img" required>
                <br>
                <br>
                <label for="content">Nhập Nội dung</label>
                <br>
                <br>
                <textarea type="text" id="content" name="content" required></textarea>
                <br>
            </div>
            <button type="submit">Thêm bài viết</button>
        </form>
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>    
</body>