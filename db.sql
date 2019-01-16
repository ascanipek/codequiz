DROP TABLE IF EXISTS `anaTablo`;
CREATE TABLE `anaTablo` (
  `id` int(10) UNSIGNED NOT NULL,
  `atasozu` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `atakod` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `konular` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `grafik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dil` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
--  `anaTablo`
--

INSERT INTO `anaTablo` (`id`, `atasozu`, `atakod`, `konular`, `grafik`, `dil`) VALUES
(1, 'Koyunun olmadığı yerde keçiye Abdurrahman Çelebi Derler.', 'if (!koyun) {<br>\r\n    &emsp;keci = \"Abdurrahman Çelebi\"; <br>\r\n}<br>', 'Değişkenler - Operatörler - Koşul Yapıları', '1.jpg', 'JS'),
(2, 'İki cambaz bir ipte oynamaz.', 'if (count($cambaz) != 1) {<br>\r\n    &emsp;throw new \\LogicException();<br>\r\n}<br>\r\n', 'Koşul Yapıları - Hata Kontrolü', '2.jpg', 'JS'),
(3, 'Ak akçe kara gün içindir. ', 'update akçe <br>\r\n&emsp; set gün=\"kara\" <br>\r\n&emsp; where renk=\"ak\"; <br>\r\n', 'Koşul Yapıları', '3.jpg', 'SQL'),
(4, 'Bülbülü altın kafese koymuşlar vatanım da vatanım demiş.', 'var bird = new Bird(); <br>\r\nvar cage = new Cage();<br>\r\ncage.setMaterial(http://Cage.GOLD ); <br>\r\nbird.putInto(cage); <br>\r\nconsole.log(bird.sing());<br>\r\n\"vatanım\"\r\n', 'Nesne ve Sınıf Kavramları - Giriş Çıkış Komutları', '4.jpg', 'JS'),
(5, 'Gün gelir devran döner', 'window.addEventListener(\"GÜN\", function() { <br>\r\n&emsp; return \"DEVRAN\"; <br>\r\n})\r\n', 'Fonksiyonlar', '5.jpg', 'JS'),
(6, 'Bir  musibet bin nasihattan yeğdir.', 'if(count($musibet) == 0 ){ <br>\r\n&emsp;  for($i=1; $i<=1000; $i++){ <br>\r\n     &emsp; &emsp; echo \"nasihat\"; <br>\r\n  } <br>\r\n}else{ <br>\r\n   &emsp; echo \" \"; <br>\r\n} <br>\r\n', 'Koşul Yapılar - Döngüler', '6.jpg', 'PHP'),
(7, 'Hayy\'dan gelen Hu\'ya gider.', 'if (req.originalUrl == \'Hay\') { <br>\r\n   &emsp;  res.redirect(\'Hu\'); <br>\r\n}<br>\r\n', 'Koşul Yapıları - Fonksiyonlar', '7.jpg', 'JS'),
(8, 'Ayağını yorganına göre uzat.', 'ayak.setKonum(getYorgan().lenght); <br>', 'Diziler - Fonksiyonlar', '8.jpg', 'JS'),
(9, 'Eşeğe altın semer vursan eşek yine eşektir.', 'animal.type = \"eşşek\"; <br>\r\nif (animal.attr.indexOf(\'gumus semer\') > -1) { <br>\r\n   &emsp;  animal.type = \"eşşek\"; <br>\r\n} <br>\r\nelse if (animal.attr.indexOf(\'altın semer\') > -1) {<br>\r\n  &emsp;   animal.type = \"eşşek\";<br>\r\n}<br>\r\n', 'Nesne ve Sınıf Kavramları - Koşul Yapıları', '9.jpg', 'JS'),
(10, 'Akacak kan damarda durmaz.', 'While (Kan.isAkacak){ <br>\r\n      		&emsp; Kan.Location != Damar; <br>\r\n}<br>\r\n', 'Döngüler - Fonksiyonlar', '10.jpg', 'JS'),
(11, 'Isıracak köpek dişlerini göstermez.', 'if ($request->isMethod(\'ISIR\')) {<br>\r\n  &emsp;   Köpek->dişleriGizle();<br>\r\n}<br>\r\n', 'Fonksiyonlar - Parametreler - Koşul Yapıları', '11.jpg', 'PHP'),
(12, 'görünen köy kılavuz istemez.', 'var guideNeeded = !$(‘.village’).visible();<br>', 'Operatörler - Fonksiyonlar', '12.jpg', 'JS'),
(13, 'Su testisi su yolunda kırılır.', ' var suTestisi; <br>\r\nyollar.forEach((yol)=> <br>\r\n       {<br>\r\n           &emsp; if(yol.turu == “su”) {<br>\r\n              &emsp; &emsp;  delete suTestisi; <br>\r\n           }<br>\r\n       }<br>\r\n); <br>\r\n', 'Diziler- Döngüler - Koşul Yapıları', '13.jpg', 'JS'),
(14, 'Köprüyü geçene kadar ayıya dayı demek.', '$köprü = 1000; <br>\r\nfor ($konum=0;$konum<=1000; $konum++) {<br>\r\n&emsp;  if ($konum<$köprü) {<br>\r\n   &emsp; &emsp; echo \"Dayı\";<br>\r\n }else{<br>\r\n   &emsp; &emsp; echo \"Ayı oğlu ayı\";<br>\r\n }<br>\r\n}<br>\r\n', 'Değişkenler - Döngüler - Koşul Yapıları', '14.jpg', 'PHP'),
(15, 'Bir elin nesi var iki elin sesi var.', 'if(el==1 || el==0){ <br>\r\n&emsp; ses=null; \r\n}<br>\r\nelse {<br>\r\n&emsp; ses=2; <br>\r\n}<br>\r\n', 'Koşul Yapıları - Operatörler', '15.jpg', 'PHP'),
(16, 'Taşıma su ile değirmen dönmez.', 'class Değirmen {<br>\r\n    &emsp; function döndür(su) {<br>\r\n       &emsp; &emsp;  if (su.tip == SuTipi.Taşıma) {<br>\r\n           &emsp; &emsp; &emsp;  throw new Error()<br>\r\n        &emsp;&emsp;}<br>\r\n&emsp; \r\n        ... <br>\r\n &emsp; }<br>\r\n}<br>\r\n', 'Sııf ve NEsne Karamları - Fonksiyonlar - Hata Ayıklama', '16.jpg', 'JS'),
(17, 'Güneş balçıkla sıvanmaz.', '>>> print(Güneş(BalçıklaSıva)) <br>\r\nFalse<br>\r\n', 'Fonksiyonlar - Giriş Çıkış Komutları', '17.jpg', 'JS'),
(18, 'Kedi uzanamadığı ciğere mundar der.', 'if( ! kedi.access(ciger) ) {<br>\r\n   &emsp; kedi.say(\"mundar\");<br>\r\n}<br>\r\n', 'Fonksiyonlar - Koşul Yapıları - ', '18.jpg', 'JS'),
(19, 'Damlaya damlaya göl olur.', 'var lake = [];<br>\r\n   try {<br>\r\n     &emsp; for (i = 0; i < 10; i++) {<br>\r\n    &emsp; &emsp;   lake.push(\"damla\");<br>\r\n     }<br>\r\n     if(lake.length > 9)  throw \"the lake &emsp; become\";<br>\r\n    }<br>\r\n    catch(err) {<br>\r\n      &emsp;   alert(err); <br>\r\n    }<br>\r\n', 'Diziler- Hata Ayıklama - Döngüler', '19.jpg', 'JS'),
(20, 'Halamın bıyığı olsa amca derdim.', 'if (preg_match(\"/bıyık/\", $halam)) <br>\r\n   &emsp;  echo \"amca\";<br>\r\n', 'Koşul Yapıları - Düzenli İfadeler', '20.jpg', 'PHP'),
(21, 'Aç ayı oynamaz.', 'if(!bear(hungry)) <br>\r\n  &emsp;  dance();', 'Fonksiyonlar - Koşul Yapıları', '21.jpg', 'PHP');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anaTablo`
--
ALTER TABLE `anaTablo`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anaTablo`
--
ALTER TABLE `anaTablo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;


