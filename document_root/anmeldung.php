<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--  Piratenpartei LV Thüringen – LPT-Microsite -->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Landesparteitag der PIRATEN Th&uuml;ringen 2012</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script type="text/javascript">
			var RecaptchaOptions = {
			theme : 'white'
			};
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<img src="logo.png" class="logo" />
				<h1>#lptth12</h1>
				<p>Der Landesparteitag der PIRATEN Th&uuml;ringen</p>
			</div>
			<ul class="nav">
				<li><a href="index.php">Hauptseite</a></li>
				<li class="active"><a href="anmeldung.php">Anmeldung</a></li>
				<li><a href="anfahrt.php">Anfahrt</a></li>
				<li><a href="verpflegung.php">Verpflegung &amp; &Uuml;bernachtung</a></li>
				<li><a href="presse.php">Presse</a></li>
				<li><a href="impressum.php">Impressum &amp; Kontakt</a></li>
			</ul>
			<div id="content">
				<img src="akkreditierung.jpg" class="floatr" />
				<h2>Warum sollte ich mich anmelden?</h2>
				<p>Damit wir den Parteitag besser planen k&ouml;nnen, w&auml;re es toll, wenn Du dir eine Minute Zeit nimmst und Dich unverbindlich anmeldest.
				Deine Daten werden vertraulich behandelt und nicht ver&ouml;ffentlicht oder an Dritte weitergegeben, sondern nur zu Zwecken der internen Organisation genutzt.
				</p>
				<h2>Anmeldung</h2>
				<form action="verify.php" method="post">
					<p><strong>Name:</strong><br /><input name="name" type="text" size="40" maxlength="40" class="text" /></p>
					<p><strong>E-Mail-Adresse:</strong><br /><input name="mail" type="text" size="40" maxlength="40" class="text" /></p>
					<p><strong>Bist Du bereits Mitglied der PIRATEN Th&uuml;ringen?</strong><br />
						<input type="radio" name="mitglied" value="ja" checked="checked" id="r1" /><label for="r1"> Ja</label><br />
						<input type="radio" name="mitglied" value="nein" id="r2" /><label for="r2"> Nein</label><br />
					</p>
					<p><strong>An welchem Tag wirst Du vorraussichtlich anreisen?</strong><br />
						<input type="radio" name="anreise" value="freitag" id="r3" /><label for="r3"> Freitag, 11.05.2012</label><br />
						<input type="radio" name="anreise" value="samstag" id="r4" /><label for="r4"> Samstag, 12.05.2012</label><br />
						<input type="radio" name="anreise" value="sonntag" id="r5" /><label for="r5"> Sonntag, 13.05.2012</label><br />
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
