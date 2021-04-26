<? include "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Filmlar </title>
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
 <div class="container-fulid" style="padding-top: 50px; padding-left: 15px; padding-right: 15px; ">
<center>
<table style = "border: 1px solid black; width: 700px;">
<thead style="border: 1px solid black; background-color: orange; color: white;">
	<tr>
		<th style="border: 1px solid black; padding-left: 5px;">No_</th>
		<th style="border: 1px solid black; padding-left: 5px;">Film nomi</th>
		<th style="border: 1px solid black; padding-left: 5px;">Film turi</th>
		<th style="border: 1px solid black; padding-left: 5px;">Yili</th>
		<th style="border: 1px solid black; padding-left: 5px;">Janri</th>
		<th style="border: 1px solid black; padding-left: 5px;">Tili</th>
		<th style="border: 1px solid black; padding-left: 5px;">Davlati</th>
		<th style="border: 1px solid black; padding-left: 5px;">Narxi</th>	
		<th style="border: 1px solid black; padding-left: 5px;">Edit</th>
		<th style="border: 1px solid black; padding-left: 5px;">Delete</th>
	</tr>
</thead>
<tbody style="color: white;">
				<?
				$query = mysqli_query ($db, "SELECT * FROM `film` ");
				
				while($doc = mysqli_fetch_assoc($query)) {
				$janr = mysqli_query($db, "SELECT * FROM janr WHERE `id` = '$doc[janr_id]'");
				$jn = mysqli_fetch_assoc($janr);
				$janr_nomi = $jn['janri'] 
				
				?>

	
	<tr>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['id']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['nomi']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['turi']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['yili']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$janr_nomi?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['tili']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['davlat']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><?=$doc['narxi']?></td>
		<td style="border: 1px solid black; padding-left: 5px;"><a href="edite.php?id=<?=$doc['id']?>">Edit</a></td>
		<td style="border: 1px solid black; padding-left: 5px;"><a href="delete.php?id=<?=$doc['id']?>">Delete</a></td>
	</tr>
	<?}?>
</tbody>
</table>
</center>
</div>
</body>
</html>