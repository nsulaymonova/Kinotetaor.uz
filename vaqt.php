<? include "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Film vaqti </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<script crs="https://ajax.googleapis.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>
</head>
<body background="image/e.jpg" >
<ul class="nav nav-tabs">
    <li class="active" style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><a href="reklama.php">REKLAMA</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="vaqt.php">Film vaqti</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="online.php">Online filmlar</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="qoshish.php">Yangi filmlar qo'shish</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="film.php">Filmlar</a></li>
  </ul>
<div class="container-fulid" style="padding-top: 50px;padding-left: 15px;padding-right: 15px; background: ">
<center>
<table style = "border: 1px solid black; width: 700px;">
<thead style="border: 1px solid black; background-color: orange; color: white;">
	<tr>
		<th style="border: 1px solid black; padding-left: 5px;">No_</th>
		<th style="border: 1px solid black; padding-left: 5px;">Film vaqti</th>
		<th style="border: 1px solid black; padding-left: 5px;">Film</th>
		<th style="border: 1px solid black; padding-left: 5px;">Zali</th>
		<th style="border: 1px solid black; padding-left: 5px;">Seansi</th>
		<th style="border: 1px solid black; padding-left: 5px;">Edit</th>
		<th style="border: 1px solid black; padding-left: 5px;">Delete</th>
	</tr>
</thead>
<tbody style="color: white;">
					<?
					$query = mysqli_query($db,"SELECT * FROM `vaqti`");
					while($doc = mysqli_fetch_assoc($query)){
						$film = mysqli_query($db, "SELECT * FROM film WHERE `id` = '$doc[film_id]'");
						$fm = mysqli_fetch_assoc($film);
						$film_nomi = $fm['nomi'];
						$zal = mysqli_query($db, "SELECT * FROM zali WHERE `id` = '$doc[zali_id]'");
						$zl = mysqli_fetch_assoc($zal);
						$zali = $zl['zali'] 
					?>
	<tr>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['id']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['vaqti']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$film_nomi?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$zali?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['seans']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><a href="edit.php?id=<?=$doc['id']?>">Edit</a></td>
		<td style="border: 1px solid black; padding-left: 5px;"><a href="dele.php?id=<?=$doc['id']?>">Delete</a></td>
	</tr>
	<?}?>
</tbody>
</table>
</center>
</div>
</body>
</html>