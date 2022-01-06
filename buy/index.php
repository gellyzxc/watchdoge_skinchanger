<?php require '../editable/config.php'?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo SHORTNAME;?> - BUY</title>
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
    <div>Оплата</div>
    <p class="lead"><?php echo BUY_SUBTITLE;?> Помните, что при переводе суммы меньше чем <?php echo BUY_SUMMA;?> платеж защитан не будет.</p>
    <p class="lead">После оплаты вы будете перенаправлены на страницу с ключем, также когд активации будет выслан вам на email, указанный при переводе.</p>
    <?php echo BUY_WRAP;?>
  </section>

</main>
<footer>&copy<?php echo YEAR;?>. <?php echo AUTHOR;?> • software version: <?php echo VER;?></footer> 
</body>
</html>
