<?php
	include("config.php");
	function ataKod(){ // 10 tane soruyu cavapl ve id leri ile birlikte döndüren fonksiyon
		$number = range(1,20); // soru sayısı kadar olacak yani 1- 20 arasında sıralı dizi üretildi
		shuffle($number); // dizi rastgele karıştırıldı
		$sorular = array(); // sorular için dizi tanımlaması
		$cevaplar = array(); // cevaplar için dizi tanımlaması
		$id = array(); // id ler için dizi tanımlaması
		$falses = array(); // şıklar için dizi tanımlaması
		for($i=0; $i<20; $i++){ // Soru Sayısı Kadar döndür
			$a = $number[$i]; // karıştırılmış dizinin elemanları tek tek alınır
			$query = "SELECT * FROM anaTablo WHERE id = '$a'"; // veri tabanı sorgusu  
			$sorgu = mysql_query($query); // sorgu çalıştırıldı 
			$satir = mysql_fetch_array($sorgu); // sorgu sonucu dönen tek satır diziye fetch edildi
			$sorular[$i] = $satir['atakod']; // Soru kısmı ayrıldı yani kod
			$cevaplar[$i] = $satir['grafik']; // Cevap kısmı ayrıldı yani 1.jpg gibi
			$id[$i] = $satir['id']; // id kısmı ayrıldı
			// doğru olmayan şıklar için random üreteç
			do{ // yanlış şıkları belirlemek için do-while döngüsü
				$Fnumbers = range(1,50); // veri tabanında bulunan soru sayısı aralığında dizi üretildi
				shuffle($Fnumbers); // üretilen dizinin içeriği karıştırıldı
				$Fnumbers = array_slice($Fnumbers, 3, 3); // karıştırılan dizinin 3,4,5. elamanları ayrılarak alındı
			} while(in_array($id[$i], $Fnumbers)); // alınan yanlışların doğru cevabı da barındırması durumunda tekrarla

				for($j=0;$j<=2;$j++){
					$Fnumbers[$j] = $Fnumbers[$j].'.jpg';	// üretilen sayıların sonuna .jpg eklendi
				}			
			// doğru olmayanlar için 3 elemanlı dizi üretildi 
			$falses[$i] = $Fnumbers; // şıklar için dizi tanımlandı ve yanlış cevaplar içine yazıldı
			array_push($falses[$i],$cevaplar[$i]); // doğru cevap bu dizinin en sonuna eklendi
		}

		return array( // metodun geriye döndüreceği değerlerin indislerinin belirlenmesi
			'cevaplar' => $cevaplar, 
			'sorular' => $sorular,
			'falses' => $falses
		);
		}		
?>
