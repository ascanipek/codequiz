<!DOCTYPE html>
<html>

  <head>
  	<?php
	  	 ob_start();
		 if(!$_SESSION['isim']){ 
		 	 session_start();  
		 }
	  	 
	  
	?>
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AtaKod! Oyun...</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">CodeQuiz!</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
      
      </div>
    </nav>

    <!-- Header -->
    
    <?php 
	 include('shuffle.php');
	 if(!$_GET && !$_POST['isim']) // isim yazılmaması durumunda tekrar oyun başlat sayfasına gönder
		  header("Location: index.php");
	  if($_POST) { // POST olayı olması durumunda çalışacak blok - yani oyunun başlangıcı - ilk soru
		  	  $isim = $_POST['isim']; // girilen isim verisinin alınması
		  	  $_SESSION["login"] = "true"; // Oturum kontrolü için
			  $_SESSION["isim"] = $isim; // isim Oturum değişkenine alındı
			  $_SESSION["hak"] = 3; // Hak verisi oturum değişkenine tanımlandı
			  $_SESSION["soru"] = 1; // Soru sayısının kontrolü için oturum değişkenine tanımlama yapıldı
			  $_SESSION["atakod"] = ataKod(); // benzersiz 20 soruyu db'den çeken metod çalıştırıldı
			  $soru = $_SESSION["atakod"]['sorular'][$_SESSION["soru"] - 1]; // datanın içinden ilk elamanın soru indisine ulaşılığ ilk soru alındı
			  $cevap = $_SESSION["atakod"]['falses'][$_SESSION["soru"] - 1]; // yanlış ve doğru cevaplar alındı 
			  $_SESSION["dogru"] = $_SESSION["atakod"]['falses'][$_SESSION["soru"] - 1][3]; // içinden doğru olan alındı 
			  shuffle($cevap); // şıklar shuffle edildi - sürekli aynı yerlere gelmemesi için
	  }  
	  else if($_GET){ // ilk sorunun dışında yani 2-20. sorular arasında çalışacak blok
		  $_SESSION["soru"] = $_SESSION["soru"] + 1; //diğer soruya geçiş için paramere +1 edildi
		  $secilen = $_GET['test']; // seçilen cevap değeri alındı
		  if($secilen != $_SESSION["dogru"]) // cevap doğru mu ? 
			  $_SESSION["hak"] = $_SESSION["hak"] - 1; // yanlış ise hak - 1 yapıldı
		  // Oyunun bitme veya devam etme kontrolü
		  if( $_SESSION["soru"] == 20 ||  $_SESSION["hak"] == 0) // 20soru ve hak doldu ise bitirmek için sonuca yönlendir
			  header("Location: http://projego.com/atakod/sonuc.php"); // sonuç sayfası
		  else{
			  $soru = $_SESSION["atakod"]['sorular'][$_SESSION["soru"] - 1]; // devam ise yeni soruyu al 
		  	  $cevap = $_SESSION["atakod"]['falses'][$_SESSION["soru"] - 1]; // yeni sorunun şıklarını al 
		  	  $_SESSION["dogru"] = $_SESSION["atakod"]['falses'][$_SESSION["soru"] - 1][3]; // şıklardan doğrusunu al 
		      shuffle($cevap); //şıkları shuffle et
		  }   
	  } 	  
	?>

    <!-- About Section -->
  

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">
	  <div class="row" style="margin-bottom: 10px;">
	  	
	  	<div class="col-lg-6">
	  		Welcome, <span style="color: #64a19d; font-weight: 800; font-size: 20px;"><?php echo $_SESSION["isim"]; ?></span>
	  	</div>
	  	<div class="col-lg-6">
	  		Now, <span style="color: #64a19d; font-weight: 800; font-size: 20px;"><?php echo $_SESSION['hak']; ?></span> wrong answers right now.
	  	</div>
	  	
	  </div>
        <!-- Featured Project Row -->
     <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-6 col-lg-">
            <h4>Codes</h4>
            <hr style="border-color: #64a19d; border-width: .25rem; width: 30%; margin-left: 0!important; margin-bottom: 0 !important; display: block !important;">
			  <div id="kodlar">
            <?php
			  
			  	echo  $soru;
		
			  ?>
				 </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="featured-text text-center text-lg-left">
              <h4><?php echo $_SESSION["soru"];?>. question</h4>
              <p class="text-black-50 mb-0">Which proverb or statement does the codes on the side mean? </p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        
		<form action="atakod.php" method="get">
		<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
          A) <input type="radio" name="test" class="form-check-inline" value="<?php echo $cevap[0];?>"> <?php echo $cevap[0];?>
             <img class="img-fluid" src="img/bg-1.jpg" alt="">
          </div>
          <div class="col-lg-6">
          B) <input type="radio" name="test" class="form-check-inline" value="<?php echo $cevap[1];?>"> <?php echo $cevap[1];?>
         	 <img class="img-fluid" src="img/bg-2.jpg" alt="">
          </div>
        </div>

        <!-- Project Two Row -->
     <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
          C)  <input type="radio" name="test" class="form-check-inline" value="<?php echo $cevap[2];?>"> <?php echo $cevap[2];?>
              <img class="img-fluid" src="img/bg-3.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
          D) <input type="radio" name="test" class="form-check-inline" value="<?php echo $cevap[3];?>"> <?php echo $cevap[3];?>
          	 <img class="img-fluid" src="img/bg-4.jpg" alt="">
          </div>
        </div>
		  
	<div class="row no-gutters">
		 <div class="col-lg-10">
        		
          </div>
          <div class="col-lg-2">
        		<input type="submit" value="Sonraki Soru" class="btn btn-primary" style="margin-top: 10px;"> 
          </div>
        </div>
	
	</form>
     
   
      </div>
    </section>

    <!-- Signup Section -->
    

    <!-- Contact Section -->


    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; CodeQuiz! 2018
        <?php 
		  // print_r($_SESSION['atakod']['falses'][0]); 
			echo $_SESSION["dogru"];  
		?>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>
<style>
	  #mainNav{background-color: #fff; color: black;}
	  #mainNav .navbar-brand {color: black;}
	  #mainNav .nav-link {color: black;}#
	  .nav-link:hover{color: 64a19d;}
	#kodlar{padding-left: 20px; padding-top: 30px;}
	</style>
</html>
