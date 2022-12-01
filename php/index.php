<!DOCTYPE html>
<!-- Defines types of documents : Html 5.O -->
<html lang="de">
<!-- Defines languages of content : german -->
<head>
  <!-- Information about website and creator -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Make website responsive -->
  <meta name="TlR Startseite"
    content="Informationsseite zu den Tennislehrenden Reutlingen">
    <!-- Short explanation of website content -->
  <title>Tennislehrende Reutlingen</title>
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
<?php
for($i=0; $i<count($_POST["infos"]); $i++)
{ if (isset($_POST["infos"][$i]))
  {
    $msg[$i]="" . $_POST["infos"][$i] . "<br>";
  }
}
if (isset($msg[0]) === false) {
  $msg[0] = false;
}
if (isset($msg[1]) === false) {
  $msg[1] = false;
}
if (isset($msg[2]) === false) {
  $msg[2] = false;
}
?>
<?=$msg[0]?>
<?=$msg[1]?>
<?=$msg[2]?>
<script src="../js/nav.js"></script>
</body>
</html>
