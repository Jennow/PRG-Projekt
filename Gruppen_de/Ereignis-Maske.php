<h3>Ereignis: Folgende Aktienwerte haben sich verändert</h3>
<img></img><!-- Hintergrundbild -->	

<?php
	$anzahlAenderugen = 5; // Wert aus Datenbank

	echo("<table>");
	for ($i =0; $i <$anzahlAenderugen; $i++)
	{
		echo("<tr>
				<td>Name<td><!-- Name der Airline aus Datenbank -->
				<td>0 €</td> <!-- alter Aktienwert -->
				<td>0 €</td> <!-- neuer Aktienwert -->
			</tr>");
	}
	echo("</table>");
?>