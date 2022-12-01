<!DOCTYPE html>
<!-- Defines types of documents : Html 5.O -->
<html lang="de">
<!-- Defines languages of content : german -->
<head>
  <!-- Information about website and creator -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Make website responsive -->
  <meta name="Login Error"
    content="Seite zur Ausgabe einer Login Fehlermeldung">
    <!-- Short explanation of website content -->
  <title>Login Error</title>
  <!-- Name of website -->
  <link rel="stylesheet" href="../css/stylesheet.css">
    <!-- Link to css stylesheet-->
</head>
<!-- Only allow hardcoded user to proceed to next page
could be extended with a database to allow multiple users -->
<?php
$user = $_POST["username"];
$pw = $_POST["password"];
// <!-- Only hard coded user and password allowed -->
if (($user === "Sander") && ($pw === "root"))
{
  header("Location: ../buchen.html");
  die;
} elseif ($user != "Sander")
// <!-- Error message if the wrong username was used -->
{
  $msg = "<p>Entschuldigen Sie, wir konnten kein Konto mit dem Benuternamen <strong>$user</strong> finden.<br><br></p>";
} else
// <!-- Error message if the wrong password was used -->
{
  $msg = "<p>Entschuldigen Sie, das eingegebene Passwort ist leider falsch.<br><br></p>";
}
$button = '
<form class="center">
<input type="button" value="Daten korrigieren" onclick="history.back()">
</form><br>
'
?>
<?= $msg ?>
<?= $button ?> 
</html>
