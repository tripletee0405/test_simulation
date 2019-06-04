<?php 
include "../controller/connect.php";
if($_GET['id'] != ""){
	$id_catalog = $_GET['id'];
	$result = $conn->query("DELETE FROM news_catalog WHERE id_catalog='".$id_catalog."'");

}
$conn->close();
echo "Xóa thành công";

?>
