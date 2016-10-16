	<h1>Registrierung</h1>
	<p>Bitte gib Deine Nutzerdaten ein</p>
	<img> </img><!-- Logo des Spiels-->	
	<img></img><!-- Hintergrundbild -->
	
	<form method=POST action=form_eval_registrierung.php>

				<label for=username>Benutzername: </label><br>
				<input type=text name=username required><br><br>
			
			
				<label for=email>E-Mail Adresse:</label><br>
				<input type=mail name=email required><br><br>
				
				<label for=passwort>Passwort:</label><br>
				<input type=password name=password required><br><br>
				
			
				<label for=passwort2>Passwort wiederholen:</label><br>
				<input type=password name=password  ><br><br>
			
			
			<img src="captcha Datei"id="captchaimg"> <br>
			
			<label for=captcha>Captcha eingeben</label><br>
			<input type=text id=captcha name=captcha required><br><br>
			
			<input type=submit> 
			
	</form>
	<a href=Login-Maske.php> <button type=reset>Zurück</button>
	
 
