<?
include 'db.php';
 if (isset($_GET['id'])) {
 	$id = $_GET['id'];

 	$sql = "DELETE FROM vaqti WHERE id = $id";
 	$res = mysqli_query($db, $sql);
 	if($res){
 		header("Location: vaqt.php");
 	}else{
 		echo "Xatolik";
 	}
 }else{
 	header("Location: vaqt.php");
 }


?>