<img></img><!-- Hintergrundbild -->


 <!-- Auflistung aller Spielmodi, Extras etc. als Schaltflächen. -->
<table>
			<tr>
				<td>Items</td>
			</tr>
			
			<tr>
				<?php
					$anzahlItems = 50; // Wert aus Datenbank
					echo("Shop");
					echo("<table>");
					for ($i =0; $i <$anzahlItems; $i++)
					{
						echo("<tr>
								<td>ItemName</td> <!-- Wert aus Datenbank -->
								<td>ItemPreis</td> <!-- Wert aus Datenbank -->
								<td><button id=kaufen label=kaufen>kaufen</button></td>
							</tr>");
					}
					echo("</table>");
		
				?>
			</tr>
		
		</table>

	
			
			</table>
			
			
			<a href=Hauptmenu.php><button>zurück</button>
			<br>
			
		

<!--
===================================
=== Feedback Alpers, 2016-10-04 ===
===================================

Hier nur Ergänzungen, die ich noch nicht in Login.html erstellt habe.

Dazu die Struktur laut strukt.html:

-40- Textfeld (Titel: "Shop")
-41- Tabelle (Auflistung der Extras, die man freischalten oder für Geld kaufen kann)
-03- Schaltfläche (Bestätigung, dass eine Eingabe abgeschickt werden soll)
-04- Schaltfläche ("Zurück" Button: Schließt eine Maske wieder)
-78- Bild (Hintergrundbild)

Das würde wie folgt aussehen:

echo("Shop");
echo("<table>");
for ... {
	echo("<tr>");
	for ... {
		echo("<td>".extra[...]."</td>");
		...
	}
	echo("</tr>");
}
echo("</table>");
echo("<button action=...>");

Bezüglich des Hintergrundbildes hatte ich im Feedback zu den strukturellen Elementen etwas geschrieben. Wenn es sich hier um ein Hintergrundbild für die Tabelle handelt, gilt das nicht.
-->