
<!doctype html>
<html lang=de> <!-- Zum Prüfen der Funktionalität aktuell noch notwendig, wird später in Startseite importiert -->

<img></img><!-- Hintergrundbild -->	
<form action= ...><!-- php-Adresse: Programm, das prüft ob der Nutzername vorhanden ist und ob das Passwort dazu passt-->
	<fieldset>
		<label for=username>Benutzername: </label>
		<input type=text id=username name=username>

		<label for=passwort>Passwort:</label>
		<input type=password id=password name=password>	
	</fieldset>
	<a href=Registrierung.php>Registrierung</a>
	<input type=submit>
	<input type=reset>
</form>

<html>	
		
<!--
===================================
=== Feedback Alpers, 2016-10-04 ===
===================================
Leider haben Sie diese Gruppe als vollständiges Dokument umgesetzt. So wird es zu Problemen kommen, wenn Sie sie später per include() in ein anderes Dokument einbinden.

-20- Textfeld (Titel: "Login")
-21- Textfeld (Fordert Spieler dazu auf, seine Nutzerdaten einzugeben)
-22- Eingabefeld (für Nutzernamen)
-23- Eingabefeld, das die Eingabe als *** anzeigt (für Passwort)
-24- Text mit Hyperlink (Leitet an eine Seite weiter, auf der man ein Benutzerprofil erstellen kann)
-03- Schaltfläche (Bestätigung, dass eine Eingabe abgeschickt werden soll)
-04- Schaltfläche ("Zurück" Button: Schließt eine Maske wieder)
-78- Bild (Hintergrundbild)

Schauen wir uns einmal an, wie diese Struktur als HTML-Dokument aussehen würde:

Login
<summary>Bitte geben Sie Ihre Nutzerdaten ein.
<details>
<input type=text id=... name=...>
<input type=password id=... name=...>
<a href=...">Registrierung</a>
<input type=sumbit>
</details>
</summary>

Bezüglich -78- habe ich bereits in der strukt.html etwas notiert.
-04- funktioniert so nicht; eine Alternative können Sie diesem Beispiel entnehmen. In der Art wie Sie es vorschlagen wirkt es wie eine Design-Idee. Für den Moment geht es aber nur um Struktur und Umsetzung in Code; Eleganz bringen wir danach ins Spiel.

Wichtig ist an dieser Stelle, dass Sie noch etwas wichtiges vergessen haben: Die Weitergabe im Sinne Ihres Kommentars "Die Daten werden an ein Programm geschickt, das prüft ob der Nutzername vorhanden ist und ob das Passwort dazu passt." ist nur möglich, wenn Sie hier ein Formular verwenden.

Sie sind bereits nahe dran, aber da sind leider noch zu viele Ungenauigkeiten bei der Umsetzung von der strukturellen Planung in Code.

-->