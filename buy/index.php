<?php require '../editable/config.php';?>
<?php $ip = $_SERVER['REMOTE_ADDR'];?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo SHORTNAME;?> - BUY</title>
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
    <div>Оплата</div>
    <p class="lead"><?php echo BUY_SUBTITLE;?> Помните, что при переводе суммы меньше чем <?php echo BUY_SUMMA;?> платеж защитан не будет.</p>
    <p class="lead">После оплаты вы будете перенаправлены на страницу с ключем, также когд активации будет выслан вам на email, указанный при переводе.</p>
    <iframe src="https://yoomoney.ru/quickpay/shop-widget?writer=seller&targets=WATCHDOGE%20FULL%20ACESS%20-%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F%20%D1%81%D1%83%D0%BC%D0%BC%D0%B0%20%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D1%8B%20150%20%D1%80%D1%83%D0%B1%D0%BB%D0%B5%D0%B9&targets-hint=&default-sum=150&button-text=11&payment-type-choice=on&mobile-payment-type-choice=on&mail=on&hint=&successURL=https%3A%2F%2Fwatchdoge.ml%2Fbuy%2Fgood%2F%3Fbuy%3Dtrue%26id%3D<?php echo $ip;?>&quickpay=shop&account=4100117487265695&" width="423" height="250" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
  </section>

</main>
<footer>&copy<?php echo YEAR;?>. <?php echo AUTHOR;?> • software version: <?php echo VER;?></footer> 
</body>
</html>
