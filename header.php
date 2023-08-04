<?php 
$protocol = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://';
$domen = $_SERVER['HTTP_HOST'];
$url = $protocol . $domen;

$dr = $_SERVER['DOCUMENT_ROOT'];
$dir = dirname(__FILE__);

$siteName = 'Жилой комплект Светлый';

$phone = file_get_contents('contact/phone.html');
$whatsapp = file_get_contents($dir.'/contact/whatsapp.html');
$whatsappSocIcon = file_get_contents($dir.'/img/soc_whatsapp.svg');


?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<meta name="author" content="miller-site.com" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="theme-color" content="#ffffff">
<meta name="msapplication-navbutton-color" content="#ffffff">
<meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">

<meta name="application-name" content="ЖК Светлый">
<meta name="application-name" lang="en" content="Light - Residential Complex ">
<meta name="application-name" lang="fr" content="Lumineux - lotissement">

<title>Главная | <?php echo $siteName; ?></title>
<!--favicon/iOS icon-->
<link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
<link rel="apple-touch-icon" href="img/safari60.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/safari76.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/safari120.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/safari152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/safari180.png">
<!--css-->
<link rel="stylesheet" href="css/main.css?v=<? include('cache_v.html'); ?>" type="text/css" />
<link rel="stylesheet" href="css/media.css?v=<? include('cache_v.html'); ?>" />
<!--og-->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo $siteName; ?>">
<meta property="og:title" content="Главная | <?php echo $siteName; ?>"/>
<meta property="og:description" content=""/>
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:locale" content="ru_RU">
<meta property="og:image" content="<?php echo $url; ?>/img/safari120.png"/>
<meta property="vk:image"  content="<?php echo $url; ?>/img/safari120.png" /></head>
<body>
<!--хэдэр-->
<header class="posr">
<div class="content df aj fw">
<div class="logo"><img src="img/logo.svg" alt="<?php echo $siteName; ?>"></div>
<div class="menu">
<ul class="df alice fw fz14">
<li class="cu" data-target="mortgage"><span>ипотека</span></li>
<li class="cu" data-target="superiority"><span>преимущества</span></li>
<li class="cu" data-target="layouts"><span>планировки</span></li>
<li class="cu" data-target="reviews"><span>отзывы</span></li>
<li class="cu" data-target="gallery"><span>галерея</span></li>
<li class="cu" data-target="contact"><span>контакты</span></li>
</ul>
</div>
<div class="headerContact df column aife">
<div class="phone df alice fw">
<img src="img/call-icon.svg" alt="Позвонить в отдел продаж - телефон">
<a href="tel:<?php echo $phone; ?>" class="hb fz22"><?php echo $phone; ?></a>
</div>
<div class="btnAndWhatsapp df aj fw">
<a href="<?php echo $whatsapp; ?>" class="waHref hide" target="_blank"><?php echo $whatsappSocIcon; ?></a>
<button type="button" class="callback btnType2">перезвоните мне</button>
</div>
</div>
</div>
</header>