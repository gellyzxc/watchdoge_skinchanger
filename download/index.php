<?php require '../editable/config.php';?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>WATCHDOGE - DOWNLOAD</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/site.webmanifest">
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
    <div>Скачать <?php echo SHORTNAME;?></div>
    <p class="lead"><?php echo DOWNLOAD_SUBTITLE;?> <?php echo WORKON?></p>
  </section>
  <section id="dwnl_csgo" class="btn start" tabindex="0">CS:GO</section><section id="dwnl_dota" style="margin-top: 1vh;;" class="btn start" tabindex="0">DOTA 2</section>
</main>
<footer>&copy<?php echo YEAR;?>. <?php echo AUTHOR;?> • software version: <?php echo VER;?></footer> <!-- partial -->
</body>
<script type="text/javascript">
  document.getElementById("dwnl_csgo").onclick = function () {
      location.href = "/download/download.php?type=csgo&ver=latest";
  };
</script>
<script type="text/javascript">
  document.getElementById("dwnl_dota").onclick = function () {
      alert("НА ДАННЫЙ МОМЕНТ НАШ СКИНЧЕНЖЕР БЫЛ ОБНАРУЖЕН СИСТЕМОЙ VAC, вы можете узнать о статусе блокировок на нужной странице сайта. (мы заботимся о наших пользователях и не даем им скачивать устаревшие версии.)");
      alert("Если вы оставляли свой email на нашем сайте мы уведомим вас о вышедшем обновлении.")
      //location.href = "/download/download.php?type=dota&ver=latest";
  };
</script>
</html>
