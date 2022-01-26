<?require './editable/config.php'?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>WATCHDOGE - BEST SKINCHANGER</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav>
<div><a href="<?php echo NAVBAR_MAIN;?>" tabindex="-1"><?php echo SHORTNAME;?></a></div>
  <div><a href="<?php echo NAVBAR_DETECT;?>" tabindex="-1">DETECT</a></div>
  <div><a href="<?php echo NAVBAR_DOWNLOAD;?>" tabindex="-1">DOWNLOAD</a></div>
  <div><a href="<?php echo NAVBAR_BUY;?>" tabindex="-1">BUY</a></div>
</nav>
<main>
  <section class="landing">
    <div><?php echo NAME;?></div>
    <p class="lead"><?php echo SUBTITLE;?></p>
  </section>
  <section id="download" class="btn start" tabindex="0">скачать</section>
</main>
<footer>&copy<?php echo YEAR;?>. <?php echo AUTHOR;?> • software version: <?php echo VER;?></footer> 
<!-- partial -->
  <!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #951AB1 url(http://hello-site.ru//main/images/preloads/tail-spin.svg) center center no-repeat;background-size:41px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->
<script charset="UTF-8" src="//web.webpushs.com/js/push/f0f9b01b62a1728cd78a3fccf54cf2c1_0.js" async></script>
</body>
<script type="text/javascript">
  document.getElementById("download").onclick = function () {
      location.href = "/download";
  };
</script>
</html>
