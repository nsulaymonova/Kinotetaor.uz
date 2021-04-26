<?
include('db.php');
 if(isset($_POST['submit'])){
 	$id = $_POST['id'];
 	$vaqti = $_POST['vaqti'];
 	$film_id = $_POST['film_id'];
 	$zali_id = $_POST['zali_id'];
 	$seans = $_POST['seans'];
 	$res  = mysqli_query($db, "INSERT INTO `vaqti` SET `vaqti`='$vaqti',`film_id`='$film_id',`zali_id`='$zali_id',`seans`='$seans'");
 	if($res){
 		header("Location: vaqt.php");
 	}
 }






?>