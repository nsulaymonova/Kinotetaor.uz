<?
include('db.php');
 if(isset($_POST['submit'])){
 	$id = $_POST['id'];
 	$nomi = $_POST['nomi'];
 	$turi = $_POST['turi'];
 	$yili = $_POST['yili'];
 	$janr_id = $_POST['janr_id']; 
 	$tili = $_POST['tili'];
 	$davlat = $_POST['davlat'];
 	$narxi = $_POST['narxi'];
 	$res  = mysqli_query($db, "INSERT INTO `film` SET `nomi`='$nomi',`turi`='$turi',`yili`='$yili',`janr_id`='$janr_id',`tili`='$tili',`davlat`='$davlat',`narxi`='$narxi'");
 	if($res){
 		header("Location: film.php");
 	}
 }






?>