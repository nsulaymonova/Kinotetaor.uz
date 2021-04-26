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
	<style>
		.demo-wrap {

  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 0.6;
  z-index: -1;
  background-image: url('image/b.jpg');
  background-repeat: no-repeat;
  background-position: 50% 0;
  background-size: cover;
}
	</style>
</head>
<body>

  <ul class="nav nav-tabs">
    <li class="active" style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><a href="reklama.php">REKLAMA</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="vaqt.php">Film vaqti</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="online.php">Online filmlar</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="qoshish.php">Yangi filmlar qo'shish</a></li>
    <li style="color: white; text-shadow: 1px 1px 2px yellow, 0 0 25px blue, 0 0 5px darkblue;"><a href="film.php">Filmlar</a></li>
  </ul>
<div class="container" >
<div class="demo-wrap"></div>
<style>
	.zin{
		background-color: rgba(117, 190, 218, 0.2);
		border: 1px solid blue;
	}
	.label-text{
		font-size:20px;
	}
</style>
<form role="form" action="regf.php" method="POST">
		<div class="form-group">
			<p>Iltimos janr bo'limiga quyidagi id raqamlarini kiriting </p>
			<p>1. Jangar </p>
			<p>2. Sarguzasht</p>
			<p>3. Treller</p>
			<p>4. Fantastik </p><br>
			<div class="row">
				<div class="col-md-6">
					<label for="usr" class="label-text">Film nomi:</label>
					<input type="text" class="form-control zin" id="usr" name="nomi">
				</div>
				<div class="col-md-6">
					<label for="usr"  class="label-text">Flm turi:</label>
					<input type="text" class="form-control zin" id="usr" name="turi">
				</div>
				<div class="col-md-6">
				<label for="usr"  class="label-text">Yili:</label>
			<input type="text" class="form-control zin" id="usr" name="yili">
				</div>
				<div class="col-md-6">
				<label for="usr"  class="label-text">Janri:</label>
			<input type="text" class="form-control zin" id="usr" name="janr_id">
				</div>
				<div class="col-md-6">
				<label for="usr"  class="label-text">Tili:</label>
			<input type="text" class="form-control zin" id="usr" name="tili">
				</div>
				<div class="col-md-6">
				<label for="usr"  class="label-text">Davlati:</label>
			<input type="text" class="form-control zin" id="usr" name="davlat">
				</div>
				<div class="col-md-6">
				<label for="usr"  class="label-text">Narxi:</label>
			<input type="text" class="form-control zin" id="usr" name="narxi">
				</div>
				<div class="col-md-6">
					<div style="padding-top:20px">
				<button type="submit" class="btn btn-primary" name="submit">Qo'shish</button>
			<button type="reset" class="btn btn-danger">Tozalash</button>
</div>
</div>
			</div>
			
			
			<h2> Filmning vaqtlarini ham qo'shish uchun<a href="vaqtqosh.php"> <kbd>vaqt</kbd></a> tugmasini bosing </h2>
		</div>
	</form>
</div>
</body>
</html>