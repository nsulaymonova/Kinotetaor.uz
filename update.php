<?
include 'db.php';
if (isset($_POST ['edite'])) {
	$id = $_POST['id'];
	$nomi = $_POST['nomi'];
 	$turi = $_POST['turi'];
 	$yili = $_POST['yili'];
 	$janr_id = $_POST['janr_id'];
 	$tili = $_POST['tili'];
 	$davlat = $_POST['davlat'];
 	$narxi = $_POST['narxi'];
 	
	$sql = "UPDATE `film` SET `nomi` = '$nomi', `turi` = '$turi', `yili` = '$yili', `janr_id` = '$janr_id', `tili` = '$tili', `davlat` = '$davlat', `narxi` = '$narxi' WHERE `id` = '$id'";
	$res = mysqli_query($db, $sql);
	if($res){
		header("Location: film.php");
	}else{
		echo "<p> Xatolik </p>";
		}
	}else{
	header("Location: film.php");
		}

?>
