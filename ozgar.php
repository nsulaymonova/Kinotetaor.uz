<?
include 'db.php';
if (isset($_POST ['edit'])) {
	$id = $_POST['id'];
	$vaqti = $_POST['vaqti'];
 	$film_id = $_POST['film_id'];
 	$zali_id = $_POST['zali_id'];
 	$seans = $_POST['seans'];
 	
 	$sql = "UPDATE `vaqti` SET `vaqti` = '$vaqti', `film_id` = '$film_id', `zali_id` = '$zali_id', `seans` = '$seans' WHERE `id` = '$id'";
	$res = mysqli_query($db, $sql);
	if($res){
		header("Location: vaqt.php");
	}else{
		echo "<p> Xatolik </p>";
		}
	}else{
	header("Location: vaqt.php");
		}

?>
