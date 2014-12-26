<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Steganografi</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>

<div class="navbar navbar-fixed-top alt" data-spy="affix" data-offset-top="1000">
  <div class="container">
    <div class="navbar-header">
      <a href="#" class="navbar-brand">Home</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="#enkripsi">Enkripsi</a></li>
        <li><a href="#dekripsi">Dekripsi</a></li>
      </ul>
    </div>
   </div>
</div>

<div class="header alt vert">
  <div class="container">
    <div>&nbsp;</div>
    <h2>Steganografi</h2>
      <p class="lead">Seni menyembunyikan pesan dengan gambar</p>
      <div>&nbsp;</div>
      <a href="#enkripsi" class="btn btn-default btn-lg">Mulai</a>
  </div>
</div>

<hr>

<div id="enkripsi" class="blurb">
  <div class="container">
    <div class="row">
      <form action="encrypt.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
			<label for="exampleInputFile">Background</label>
			<input type="file" name="background">
			<p class="help-block">Gambar untuk background.</p>
		  </div>
		  <div class="form-group">
			<label for="exampleInputFile">Pesan Gambar</label>
			<input type="file" name="pesan">
			<p class="help-block">Pesan gambar yang akan disembunyikan.</p>
		  </div>
		  <button type="submit" class="btn btn-default">Enkrip</button>
		</form>
    </div>
  </div>
</div>

<hr>

<div id="dekripsi" class="featurette">
  <div class="container">
    <div class="row">
      <form action="decrypt.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
			<label for="exampleInputFile">Pilih Gambar</label>
			<input type="file" name="pesan">
			<p class="help-block">Gambar yang telah disisipi pesan rahasia.</p>
		  </div>
		  <button type="submit" class="btn btn-default">Pecahkan</button>
		</form>
    </div>
  </div>
</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>
