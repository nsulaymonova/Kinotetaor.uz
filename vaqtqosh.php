<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yangi filmlar qo'shish</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>
</head>
<body background="image/b.jpg" style="background-size:cover;">

  <ul class="nav nav-tabs">
    <li class="active" style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><a href="reklama.php">REKLAMA</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="vaqt.php">Film vaqti</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="online.php">Online filmlar</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="qoshish.php">Yangi filmlar qo'shish</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="film.php">Filmlar</a></li>
  </ul>


<form role="form" action="regv.php" method="POST">
		<div class="form-group">
			<label for="usr">Film vaqti:</label>
			<input type="date" class="form-control" id="usr" name="vaqti">
			<label for="usr">Film:</label>
			<input type="text" class="form-control" id="usr" name="film_id">
			<label for="usr">Zali:</label>
			<input type="text" class="form-control" id="usr" name="zali_id">
			<label for="usr">Seansi:</label>
			<input type="text" class="form-control" id="usr" name="seans">
			<button type="submit" class="btn btn-primary" name="submit">Qo'shish</button>
			<button type="reset" class="btn btn-danger">Tozalash</button>
		</div>
	</form>
</body>
</html>