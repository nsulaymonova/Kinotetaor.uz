<?
include 'db.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

$sql = "SELECT * FROM film WHERE id = $id";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);



?>
<form action="update.php" method="POST">
			<p>Iltimos janr bo'limiga quyidagi id raqamlarini kiriting </p>
			<p>1. Jangar </p>
			<p>2. Sarguzasht</p>
			<p>3. Treller</p>
			<p>4. Fantastik </p><br>
			Film nomi:
			<input type="text" name="nomi" value="<?=$row['nomi'];?>"><br>
			Flm turi:
			<input type="text" name="turi" value="<?=$row['turi'];?>"><br>
			Yili:
			<input type="text" name="yili" value="<?=$row['yili'];?>"><br>
			Janri:
			<input type="text" name="janr_id" value="<?=$row['janr_id'];?>"><br>
			Tili:
			<input type="text" name="tili" value="<?=$row['tili'];?>"><br>
			Davlati:
			<input type="text" name="davlat" value="<?=$row['davlat'];?>"><br>
			Narxi:
			<input type="text" name="narxi" value="<?=$row['narxi'];?>"><br>
			<input type="hidden" name="id" value="<?=$row['id']?>">
			<button type="submit" class="btn btn-primary" name="edite">Tahrirlash</button>
			<button type="reset" class="btn btn-danger">Tozalash</button>
			
	
</form>