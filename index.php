<?require './editable/config.php'?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>WATCHDOGE - BEST SKINCHANGER</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav>
<div><a class="transition" href="<?php echo NAVBAR_MAIN;?>" tabindex="-1"><?php echo SHORTNAME;?></a></div>
  <div><a class="transition" href="<?php echo NAVBAR_DETECT;?>" tabindex="-1">DETECT</a></div>
  <div><a class="transition" href="<?php echo NAVBAR_DOWNLOAD;?>" tabindex="-1">DOWNLOAD</a></div>
  <div><a class="transition" href="<?php echo NAVBAR_BUY;?>" tabindex="-1">BUY</a></div>
</nav>
<main>
  <section class="landing">
    <div><?php echo NAME;?></div>
    <p class="lead"><?php echo SUBTITLE;?></p>
  </section>
  <section id="download" class="btn start" tabindex="0">скачать</section>

  <p class="emailform">Оставьте свой email для получения свежей информации по обнаружению системой VAC и новыми релизами.</p>

  <section>
    
    <form action="/libs/email.php" method="POST" class="form-group">
      <input type="email" required class="email form-control" placeholder="Ваш Email" name="email">
      <input type="submit" value="Подписаться" class="btn btn-primary submit">
    </form>
  </section>
</main>
<footer>&copy<?php echo YEAR;?>. <?php echo AUTHOR;?> • software version: <?php echo VER;?></footer> 
<!-- partial -->

</body>
<script type="text/javascript">
  document.getElementById("download").onclick = function () {
      location.href = "/download";
  };
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("body").css("display", "none");

    $("body").fadeIn(2000);

	$("a.transition").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(1000, redirectPage);
	});

	function redirectPage() {
		window.location = linkLocation;
	}
});
</script>
</html>
