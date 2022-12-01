<!DOCTYPE html>
<!-- Defines types of documents : Html 5.O -->
<html lang="de">
<!-- Defines languages of content : german -->
<head>
  <!-- Information about website and creator -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Make website responsive -->
  <meta name="TlR Kontaktseite"
    content="Informationsseite zu den Tennislehrenden Reutlingen">
    <!-- Short explanation of website content -->
  <title>TlR Kontaktseite</title>
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
    <div id="kontakt">
    <?php
      $name = $_POST["name"];
      $mail = $_POST["mail"];
      $thema = $_POST["thema"];
      if ($_POST["gender"] == "male") {
        $msg="Guten Tag Herr $name.";
      } elseif ($_POST["gender"] == "female") {
        $msg="Guten Tag Frau $name.";
      } else {
        $msg="Guten Tag $name.";
      }
    ?>
    <h3><?=$msg?></h3>
    <h3>Sie haben folgende Daten eingetragen, bitte kontrollieren Sie Ihre Angaben und bestätigen sie.</h3><br>
    <table style="margin-left: auto; margin-right: auto;">
    <tr><td>Ihr Name ist</td><td align='right'><?=$name?></td></tr>
    <tr><td>Ihre E-Mail ist</td><td style='min-width:600px' align='right'><?=$mail?></td></tr>
    <tr><td style="min-width:300px;">Ihr Anliegen bezieht sich auf</td><td align='right'><?=$thema?></td></tr>
    </table><br>
    <h3>Mit folgender Nachricht:</h3><br>
    <p><?=$_POST["message"]?></p><br><br>
    <form class="center">
      <input type="button" value="Absenden" onclick="location.href='../index.html'">
      <input type="button" value="Eingetragene Daten verändern" onclick="history.back()">
      <input type="button" value="Abbrechen" onclick="location.href='../kontakt.html'">
    </form><br>
    <script src="../js/nav.js"></script>
    </div>
  </body>
</html>
