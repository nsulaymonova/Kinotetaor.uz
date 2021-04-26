<?
include 'db.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

$sql = "SELECT * FROM vaqti WHERE id = $id";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);



?>
<form action="ozgar.php" method="POST">

			Film vaqti:
			<input type="text" name="vaqti" value="<?=$row['vaqti'];?>"><br>
			Film:
			<input type="text" name="film_id" value="<?=$row['film_id'];?>"><br>
			Zali:
			<input type="text" name="zali_id" value="<?=$row['zali_id'];?>"><br>
			Seansi
			<input type="text" name="seans" value="<?=$row['seans'];?>"><br>
			<input type="hidden" name="id" value="<?=$row['id']?>">
			<button type="submit" class="btn btn-primary" name="edit">Tahrirlash</button>
			<button type="reset" class="btn btn-danger">Tozalash</button>
			
	
</form>