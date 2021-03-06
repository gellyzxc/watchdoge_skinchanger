<?php

include '../../editable/config.php';

function file_force_download($file) {
    if (file_exists($file)) {
      // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
      // если этого не сделать файл будет читаться в память полностью!
      if (ob_get_level()) {
        ob_end_clean();
      }
      // заставляем браузер показать окно сохранения файла
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=' . 'key.rev1.WATCHDOGE');
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      // читаем файл и отправляем его пользователю
      readfile($file);
      exit;
    }
  }


function gen_password($length)
{
	$password = '';
	$arr = array(
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
		'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
		'1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
	);
 
	for ($i = 0; $i < $length; $i++) {
		$password .= $arr[random_int(0, count($arr) - 1)];
	}
	return $password;
}
 
$password = 'WTCHDG' . gen_password(32);

$reffer = $_SERVER['HTTP_REFERER'];

$ip = $_SERVER['REMOTE_ADDR'];
$text = $password . '\r\n';
$filename = __DIR__ . '/file.txt';

$file = 'codes.txt';
$message = $password . ':' .  $ip;

$dead = $_GET['buy'];

if ($dead == 'true' and $_GET['id'] == $ip) {

$link = mysqli_connect("NAXYI IDI", "PIDORAS", "XDD", "JEBANIY");

$zalupa = 'INSERT INTO `codes` (`code`, `ip`) VALUES ("'.$password.'", "'.$ip.'")';
$sql = mysqli_query($link, $zalupa);


$key = $password;

}


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>СПАСИБО ЗА ПОКУПКУ <?php echo SHORTNAME;?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<nav>
<div><a href="<?php echo NAVBAR_MAIN;?>" tabindex="-1"><?php echo SHORTNAME;?></a></div>
  <div><a href="<?php echo NAVBAR_DETECT;?>" tabindex="-1">DETECT</a></div>
  <div><a href="<?php echo NAVBAR_DOWNLOAD;?>" tabindex="-1">DOWNLOAD</a></div>
  <div><a href="<?php echo NAVBAR_BUY;?>" tabindex="-1">BUY</a></div>
</nav>
<main>
  <section class="landing">
    <div>Спасибо за покупку ПО <?php echo NAME;?></div>
    <p class="lead"><?php echo BUY_GOOD;?></p>
    <div class="key"><h1 class="key_text"><?php echo $key;?></h1></div>
  </section>
</main>
<footer>&copy<?php echo YEAR;?>. <?php echo AUTHOR;?> • software version: <?php echo VER;?></footer> 
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #951AB1 url(http://hello-site.ru//main/images/preloads/tail-spin.svg) center center no-repeat;background-size:41px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
</body>
</html> 

