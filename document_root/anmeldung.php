<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Diese Seite basiert auf https://github.com/ubuciko/LPT-Microsite verwendet unter CC-BY-NC 3.0 – http://creativecommons.org/licenses/by-nc/3.0/"/>

		<title>Landesparteitag/Aufstellungsversammlung der PIRATEN Thüringen 2012</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript">
			var RecaptchaOptions = {
			theme : 'white'
			};
		</script>
	</head>

	<body>
		<div id="wrapper">
			<div id="header">
				<img src="logo.png" class="logo" alt="Piratenpartei Logo" />
				<h1>#lptavth</h1>
				<p>Landesparteitag und Aufstellungsversammlung der PIRATEN Thüringen</p>
			</div>
			<ul class="nav">
				<li><a href="index.php">Hauptseite</a></li>
				<li class="active"><a href="anmeldung.php">Anmeldung</a></li>
				<li><a href="anfahrt.php">Anfahrt</a></li>
				<li><a href="verpflegung.php">Verpflegung &amp; Übernachtung</a></li>
				<li><a href="presse.php">Presse</a></li>
				<li><a href="impressum.php">Impressum &amp; Kontakt</a></li>
			</ul>
			<div id="content">
				<img src="akkreditierung.jpg" class="floatr" alt="Akkreditierung" />
				<h2>Warum sollte ich mich anmelden?</h2>
				<p>Damit wir den Parteitag besser planen können, wäre es toll, wenn Du dir eine Minute Zeit nimmst und Dich unverbindlich anmeldest.
				Deine Daten werden vertraulich behandelt und nicht veröffentlicht oder an Dritte weitergegeben, sondern nur zu Zwecken der internen Organisation genutzt.
				</p>
				<h2>Anmeldung</h2>
				<form action="verify.php" method="post">
					<p><strong>Name:</strong><br /><input name="name" type="text" size="40" maxlength="40" class="text" /></p>
					<p><strong>E-Mail-Adresse:</strong><br /><input name="mail" type="text" size="40" maxlength="40" class="text" /></p>
					<p><strong>Bist Du bereits Mitglied der PIRATEN Thüringen?</strong><br />
						<input type="radio" name="mitglied" value="ja" checked="checked" id="r1" /><label for="r1"> Ja</label><br />
						<input type="radio" name="mitglied" value="nein" id="r2" /><label for="r2"> Nein</label><br />
					</p>
					<p><strong>An welchem Tag wirst Du vorraussichtlich anreisen?</strong><br />
						<input type="radio" name="anreise" value="freitag" id="r3" /><label for="r3"> Freitag, 02.11.2012</label><br />
						<input type="radio" name="anreise" value="samstag" id="r4" /><label for="r4"> Samstag, 03.11.2012</label><br />
						<input type="radio" name="anreise" value="sonntag" id="r5" /><label for="r5"> Sonntag, 04.11.2012</label><br />
					</p>
					<p><strong>Anmerkungen:</strong>&nbsp;(optional)<br /><textarea name="anmerkungen" cols="50" rows="4" class="anmerkungen"></textarea></p>
					<p><strong>Sicherheitscode:</strong><br />
						<?php
							require_once('recaptchalib.php');
							$publickey = "6LdgM88SAAAAACAzYoxuzsTSDnQ2Mj6l-gtQGF5N"; // you got this from the signup page
							echo recaptcha_get_html($publickey);
						?>
					</p>
					<p>
						<input type="reset" value="Abbrechen" class="button" />
						<input type="submit" value="Anmelden" class="button" />
					</p>
				</form>
			</div>
		</div>
	</body>
</html>
