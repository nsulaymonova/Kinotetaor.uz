<?
include 'db.php';
 if (isset($_GET['id'])) {
 	$id = $_GET['id'];

 	$sql = "DELETE FROM film WHERE id = $id";
 	$res = mysqli_query($db, $sql);
 	if($res){
 		header("Location: film.php");
 	}else{
 		echo "Xatolik";
 	}
 }else{
 	header("Location: film.php");
 }


?>