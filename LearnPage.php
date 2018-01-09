<!DOCTYPE html>
<?php
    $name = $_POST['id'];
    $pass =$_POST['password'];
    if($name != "admin" || $pass !="admin"){
      echo "Gagal Login <br/>";
      echo "<a href='loginPage.php'>Kembali</a>";
    }
    else{


 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>LearnPage</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  	<link rel="stylesheet" href="asset/css/mdb.min.css">
  	<link rel="stylesheet" href="asset/css/bootstrap.css">
    <style media="screen">
  		body{
  			margin: 0;
        overflow-x: hidden;
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

    <!-- Bar Di atas -->
    <div class="fixed-top" style="margin-top:4vh;">
    	<div class="container">
    		<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="opacity:0.8;">
    			<a href="#" class="navbar-brand">
    					<div class="text-white">
    						Tutorials
    					</div></a>
    				<ul class="navbar-nav">
    						<li class="nav-item	">
    							<a class="nav-link" href="#">
                    <img src="asset/img/login_logo.png" alt="" width="15vh;">
                    Admin
                  </a>
    						</li>
    				</ul>
    		</nav>
    	</div>
    </div>
    <!-- Gambar -->
    <img class="img-fluid" src="asset/img/background.png" alt="" width="100%" id="bac">
    <div class="posisi">
    	<div class="container-fluid">
    		<h1 class="display-1 text-white">TUTORIALS</h1>
    		<p class="font-weight-normal text-white">WebSite Tutorials</p>
    	</div>
    </div>
    <!-- Isi -->
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
      </div>
    </div>
    <!-- Pilihan Tutorial -->
        <div class="row bg-light" style="margin-top:-5vh;">
              <div class="col-sm-4">
                <div class="container" style="margin:10vh;">
                    <img src="asset/img/android_logo.png" alt="" width="160vh">

                </div>

              </div>
              <div class="col-sm-4">
                <div style="margin-top:15vh;">
                      <h1 class="display-4">Android</h1>
                      <p class="lead">Total Tutorial : 10</p>
                </div>
              </div>
              <div class="col-sm-4">
                    <div class="container" style="margin-top:20vh;">
                          <a class="btn btn-dark text-white" href="#" style="width:30vh;">Ikuti Belajar</a>
                    </div>
              </div>
        </div>
        <div class="row bg-light">
              <div class="col-sm-4">
                <div class="container" style="margin:10vh;">
                    <img src="asset/img/csharp.jpg" alt="" width="160vh">

                </div>

              </div>
              <div class="col-sm-4">
                <div style="margin-top:15vh;">
                      <h1 class="display-4">C#</h1>
                      <p class="lead">Total Tutorial : 5</p>
                </div>
              </div>
              <div class="col-sm-4">
                    <div class="container" style="margin-top:20vh;">
                          <a class="btn btn-dark text-white" href="#" style="width:30vh;">Ikuti Belajar</a>
                    </div>
              </div>
        </div>
        <div class="row bg-light">
              <div class="col-sm-4">
                <div class="container" style="margin:10vh;">
                    <img src="asset/img/php_logo.png" alt="" width="160vh">

                </div>

              </div>
              <div class="col-sm-4">
                <div style="margin-top:15vh;">
                      <h1 class="display-4">PHP</h1>
                      <p class="lead">Total Tutorial : 15</p>
                </div>
              </div>
              <div class="col-sm-4">
                    <div class="container" style="margin-top:20vh;">
                          <a class="btn btn-dark text-white" href="#" style="width:30vh;">Ikuti Belajar</a>
                    </div>
              </div>
        </div>
        <!-- akhir Dari Pilihan -->
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
        						<div class="text-center">
        								<h4 class="display-5 text-white">Bagi pengetahuanmu untuk bersama membangun komunitas developer di Indonesia! Kita bisa jika semua terlibat dan saling memberi manfaat.</h4>
        						</div>

        				</div>
        	</div>
        </div>
        <div class="text-center">
            <h1 class="display-4">Post Artikel</h1>
        </div>
        <div class="container">
          <div class="form-group row">
            <form class="" action="hasil.php" method="post">
              <p class="lead col-4">Judul Artikel</p>
              <input class="form-control" type="text" name="judul" value="">

                <p class="lead col-4">Kategori</p>
                <select class="col-5 form-control" name="bahasa">
                  <option value="android">Android</option>
                  <option value="c#">C#</option>
                  <option value="php">PHP</option>
                </select>
                  <p class="lead col-4">Isi Artikel</p>
              <textarea class="form-control" name="isi" rows="3"></textarea>
              <p class="lead col-4">Penulis</p>
              <input class="form-control" type="text" name="penulis" value="">
              <div class="text-right">
                  <button class="btn btn-dark" type="submit" name="button">Post</button>
              </div>
            </form>


          </div>
        </div>

  </body>
</html>
<?php
}
 ?>
