<?php 
include "../controller/connect.php";
if($_GET['id'] != ""){
	$id_news = $_GET['id'];
	$result = $conn->query("DELETE FROM news WHERE id_news='".$id_news."'");

}
$conn->close();
echo "Xóa thành công";

?>
