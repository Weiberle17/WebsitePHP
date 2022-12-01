# Overview Website Max Weiberle
## Webseite
Die Seite ist als Homepage fuer eine Gruppe von Tennislehrenden in Reutlingen gedacht, die auf ihrer Seite Informationen zu Preisen und Terminen bereitstellen.
## Seitenuebersicht
### Index.html
Ist als Uebersicht der Lehrer gedacht. Zeigt ein Bild der einzelnen Lehrer. Am Ende der Seite ist eine Multiple Auswahlliste zu finden, mit der genauere Informationen zu den jeweiligen Lehrern zu finden sind. Sie verweist auf die Seite index.php.
### Index.php
Beinhaltet genauere Daten zu den einzelnen Lehrern. Es werden jeweils die Daten angezeigt, die in der Auswahlliste ausgewaehlt wurden.
### Preise.html
Hier kann mit Hilfe von Radiobuttons ein Lehrer ausgewaehlt werden. Die Anzahl der Stunden koennen eingetragen werden und fuer welchen Wochentag die Preise berechnet werden sollen kann in einer Dropdownliste bestimmt werden. Der Button 'Berechnen' leitet die Daten weiter an die Seite preise.php.
### Preise.php
Abhaengig vom ausgewaehlten Lehrer wird mit einem gewissen Stundensatz gerechnet. Je nach Wochentag wird ein Faktor festgelegt, mit dem der Stundensatz verrechnet wird. Anschliessend wird abhaengig von der Anzahl der Stunden ein gewisser Rabatt auf den Stundenpreis gegeben. Die eingetragenen Angaben und die Ergebnisse werden anschliessend ausgegeben. Falls gemachte Angaben keine Rechnung erlauben werden jeweils passende Fehlermeldungen ausgegeben. 
### Kontakt.html
Auf dieser Seite findet sich ein gewoehnliches Kontaktformular mit einem Textfeld fuer den Namen, einer Radiobuttonauswahl fuer das Geschlecht, ein weiteres Textfeld fuer eine E-Mail-Adresse, eine Dropdownliste um zu spezifizieren und auf was sich die Anfrage bezieht. Zu guter letzt findet sich noch eine Textarea um eine komplette Nachricht eingeben zu koennen. Mit dem Knopf Ueberpruefen werden die Daten an die Seite kontakt.php weitergeleitet.
### Kontakt.php
Auf dieser Seite wird die Person mit der richtigen Anrede und eingetragenen Namen angesprochen. Die Daten werden aufgelistet, um eine Kontrolle zu erlauben. Ganz im Sinne der Softwareergonomie. Nachdem der User die Daten ueberprueft hat hat er drei Moeglichkeiten. Entweder kann er die Nachricht absenden, die eingetragenen Daten veraendern, oder den Vorgang abbrechen. Beim Veraendern wird die vorherige Seite geladen mit den zuvor eingetragenen Informationen noch in den Eingabefeldern. Wenn der User auf Abbrechen klickt wird er auf die Startseite zurueckgeleitet.
### Login.html
Bietet eine gewohnte Maske, auf der ein Benutzername und ein Passwort gefordert wird. In diesem Fall ist ein User und Passwort festhinterlegt. Benutzername: 'Sander' und Passwort: 'root'. Wenn die richtigen Daten eingegeben werden wird der User auf die Seite buchen.html umgeleitet. Ansonsten werden jeweils Fehlermeldungen fuer den Benutzernamen oder das Passwort ausgegeben.
### Buchen.html
Diese Seite dient als Uebersicht fuer den User, um seine gebuchten und schon wahrgenommenen Stunden einzusehen.
## Generelle Informationen
### Navigationsleiste
Die implementierte Navigationsleiste ist so gestaltet, dass sie bei kleinen Fenstern in einen 'mobilen' Modus schaltet, in dem die Liste nicht dauerhaft sichtbar ist, sondern ueber ein Klicken auf die drei rechts oben angebrachten Balken aufgerufen werden kann.
### Softwareinformationen
Die Seite ist auf Linux programmiert und getestet worden, mit dem Mozilla Firefox Browser. Die Xampp Version ist 8.1.10-0 for Linux.
