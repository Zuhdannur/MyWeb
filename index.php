<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>LearnPage</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/mdb.min.css">
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<style media="screen">
		body{
			margin: 0;
		}
		#bac{
			height: 100vh;
		}
		.posisi{
			position: absolute;
			top: 45%;
		}
		.posisi2{
			position: absolute;
			left: 60%;
		}
	</style>
</head>
<body>
<div class="fixed-top" style="margin-top:4vh;">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="opacity:0.8;">
			<a href="#" class="navbar-brand">
					<div class="text-white">
						Tutorials
					</div></a>
			<!-- <div class="navbar-nav">
				<a class="nav-item nav-link" href="#">Home<span class="sr-only"></a>
			</div> -->
				<ul class="navbar-nav">
						<li class="nav-item	">
							<a class="nav-link" href="#">Home</a>
						</li>
				</ul>
		</nav>
	</div>

</div>
<img class="img-fluid" src="asset/img/background.png" alt="" width="100%" id="bac">
<div class="posisi">
	<div class="container-fluid">
		<h1 class="display-1 text-white">TUTORIALS</h1>
		<p class="font-weight-normal text-white">WebSite Tutorials</p>
	</div>
</div>
<div class="jumbotron">
	<div class="container" style="margin-top:10vh;">
		<div class="row">
				<div class="col-sm-4">
					<h1 class="display-4 text-center">Android</h1>

					<p class="lead text-center">The world’s most popular mobile OS</p>
					<br>
					<center>
<img src="asset/img/android_logo.png" alt="" width="100vh">
</center>
				</div>
				<div class="col-sm-4">
						<h1 class="display-4 text-center">C#</h1>
						<p class="lead text-center">develop software for Linux, Android, and iOS systems as well.</p>
						<center>
						<img src="asset/img/csharp.jpg" alt="" width="100vh">
					</center>
				</div>
				<div class="col-sm-4">
					<h1 class="display-4 text-center">PHP</h1>
					<p class="lead text-center">The world’s most popular programming Language</p>
					<center>
					<img src="asset/img/php_logo.png" alt="" width="100vh">
				</center>
				</div>
		</div>
		<div class="container">
			<div class="text-center">
					<a class="btn btn-primary" href="loginPage.php" style="margin-top:18vh;margin-bottom:15vh;">Belajar Sekarang</a>
			</div>


		</div>
	</div>


</div>
<!-- Ini Untuk content -->
<div class="container" style="margin-bottom:10vh;">
	<div class="row">
				<div class="col-sm-9">
						<h1 class="display-5">Artikel Terpilih</h1>
				</div>
	</div>

	<br>
	<br>
	<div class="row">
			<div class="col-sm-4">
					<div class="card">
							<img class="card-img-top" src="asset/img/coding.jpg" alt="">
							<div class="card-block">
								<div class="container">
									<h4 class="card-title" style="margin-top:1vh;">Opini</h4>
									<br>
									<h5 class="display-6 font-weight-normal">Mengapa Belajar Coding Adalah Investasi Masa Depan</h5>
									<br>
									<p class="text-left text-muted">Zuhdan Nur Ihsan</p>
								</div>
							</div>
					</div>
			</div>
			<div class="col-sm-4">
					<div class="card">
							<img class="card-img-top" src="asset/img/blender_logo.jpg" alt="">
							<div class="card-block">
								<div class="container">
									<h4 class="card-title" style="margin-top:1vh;">Tutorial</h4>
									<br>
									<h5 class="display-6 font-weight-normal">Belajar Membuat Game dengan Blender: Sejarah Blender</h5>
										<br>
									<p class="text-left text-muted">Zuhdan Nur Ihsan</p>
								</div>
							</div>
					</div>
			</div>
			<div class="col-sm-4">
					<div class="card">
							<img class="card-img-top" src="asset/img/google_doodle.png" alt="">
							<div class="card-block">
								<div class="container">
									<h4 class="card-title" style="margin-top:1vh;">News</h4>
									<br>
									<h5 class="display-6 font-weight-normal">Google Buat Doodle Belajar Ngoding Untuk Anak Anak</h5>
									<br>
									<p class="text-left text-muted">Zuhdan Nur Ihsan</p>
								</div>
							</div>
					</div>
			</div>
	</div>
</div>
<!-- Akhir konten -->
<div class="jumbotron jumbotron-fluid bg-dark">
	<div class="container">
				<div class="row">
						<div class="col-sm-9">
								<h4 class="display-5 text-white">Bagi pengetahuanmu untuk bersama membangun komunitas developer di Indonesia! Kita bisa jika semua terlibat dan saling memberi manfaat.</h4>
						</div>
						<div class="col-sm-2">
								<a class="btn btn-success" href="loginPage.php" style="width:100%;">Tulis Artikel</a>
						</div>
				</div>
	</div>
</div>
<!-- Terimakasi Kepada  -->
<div class="container">
	<h1 class="display-4 text-center">Thanks To </h1>
	<br>
	<div class="row">
			<div class="col-sm-4">
						<img src="asset/img/bot_logo.png" alt="" class="img-fluid"><br>
						<p class="lead text-center">Bootstrap v4</p>
			</div>
			<div class="col-sm-4">
						<img src="asset/img/code_pol.png" alt="" class="img-fluid" style="height:88%; width:84%;"><br>
						<p class="lead text-center">CodePolitan</p>
			</div>
			<div class="col-sm-4">
					<img src="asset/img/w3_logo.png" alt="" class="img-fluid" style="height:75%;">
					<br>
					<p class="lead text-center">W3SCHOOLS</p>
			</div>
	</div>
</div>
</body>
</html>
