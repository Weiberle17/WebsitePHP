<!DOCTYPE html>
<!-- Defines types of documents : Html 5.O -->
<html lang="de">
<!-- Defines languages of content : german -->
<head>
  <!-- Information about website and creator -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Make website responsive -->
  <meta name="TlR Preise"
    content="Preisuebersicht der Tennislehrenden Reutlingen">
    <!-- Short explanation of website content -->
  <title>Preise der TlR</title>
  <!-- Name of website -->
  <link rel="stylesheet" href="../css/stylesheet.css">
    <!-- Link to css stylesheet-->
</head>
<body>
<!-- Defines what is displayed on top of the page -->
<header>
  <!-- Navigation between webpages -->
  <nav>
    <h1>Tennislehrende Reutlingen</h1>

    <div class="menu">
      <a href="../index.html">Startseite</a>
      <a href="../preise.html">Preise</a>
      <a href="../kontakt.html">Kontakt</a>
      <a href="../login.html">Login</a>
    </div>

    <button class="icon">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>

  <div class="mobile">
    <a href="../index.html">Startseite</a>
    <a href="../preise.html">Preise</a>
    <a href="../kontakt.html">Kontakt</a>
    <a href="../login.html">Login</a>
  </div>

</header>
<!-- Main content of website -->
<?php
$teacher = $_POST["teacher"];
$hours = $_POST["hours"];
switch ($_POST["wdays"])
{
case 'week':
$wdays = "Unter der Woche";
break;

case 'saturday':
$wdays = "Samstag";
break;

case 'sunday':
$wdays = "Sonn- und Feiertage";
break;

default:
$wdays = "Ohne Angabe";
break;
}
switch ($teacher)
{
case 'Matthias':
$preis = 75;
break;

case 'Jochen':
$preis = 70;
break;

case 'Thomas':
$preis = 60;
break;

default:
$preis = "Mit den von Ihnen gemachten Angaben konnte kein Preis errechnet werden.";
$teacher = 0;
break;
}
if ($teacher != 0)
{
  if ($wdays === "Samstag") {
    $preis *= 1.2;
  } elseif ($wdays === "Sonn- und Feiertage") {
    $preis *= 1.5;
  } else {
    $preis *= 1.0;
  }
  if ($hours > 15) {
    $rabatt = 25;
    $faktor = 0.75;
  } elseif ($hours > 10) {
    $rabatt = 10;
    $faktor = 0.9;
  } elseif ($hours > 5) {
    $rabatt = 5;
    $faktor = 0.95;
  } else {
    $rabatt = "Wir bieten ab 5 Stunden Rabatte an.";
    $faktor = 0;
  }
  if ($faktor != 0) {
    $preis *= $faktor;
    $preis = number_format($preis,2,",",".");
    $msg="Es ergibt sich ein Preis von " . $preis . "$ pro Stunde.<br>Bei einem Rabatt von ". $rabatt ."%.<br>";
  } else {
    $msg="Es ergibt sich ein Preis von " . $preis . "$ pro Stunde.<br>$rabatt<br>";
  }
} else {
  $msg = $preis;
  $teacher = "Keinen ausgewählt";
}
?>
<h2>Ihre eingegebenen Daten</h2><br>
<table style="margin-left:auto;margin-right:auto;" id='tablePreise'>
<tr><th style="min-width: 20%;">Trainer</th><th style="min-width: 47%;">Anzahl der Stunden</th><th style="min-width: 33%;">Wochentag</th></tr>
<tr><td><?=$teacher?></td><td align='CENTER'><?=$hours?></td><td><?=$wdays?></td></tr>
</table><br>
<h2>Daraus ergeben sich folgende Preise</h2><br>
<p><?=$msg?></p>
<script src="../js/nav.js"></script>
</body>
</html>
