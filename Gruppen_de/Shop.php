<img></img><!-- Hintergrundbild -->


 <!-- Auflistung aller Spielmodi, Extras etc. als Schaltfl�chen. -->
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
			
			
			<a href=Hauptmenu.php><button>zur�ck</button>
			<br>
			
		

<!--
===================================
=== Feedback Alpers, 2016-10-04 ===
===================================

Hier nur Erg�nzungen, die ich noch nicht in Login.html erstellt habe.

Dazu die Struktur laut strukt.html:

-40- Textfeld (Titel: "Shop")
-41- Tabelle (Auflistung der Extras, die man freischalten oder f�r Geld kaufen kann)
-03- Schaltfl�che (Best�tigung, dass eine Eingabe abgeschickt werden soll)
-04- Schaltfl�che ("Zur�ck" Button: Schlie�t eine Maske wieder)
-78- Bild (Hintergrundbild)

Das w�rde wie folgt aussehen:

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

Bez�glich des Hintergrundbildes hatte ich im Feedback zu den strukturellen Elementen etwas geschrieben. Wenn es sich hier um ein Hintergrundbild f�r die Tabelle handelt, gilt das nicht.
-->