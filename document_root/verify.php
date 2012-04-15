<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--  Piratenpartei LV Thüringen – LPT-Microsite -->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Landesparteitag der PIRATEN Th&uuml;ringen 2012</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
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
				<?php
					require_once('recaptchalib.php');
					$privatekey = "6LdgM88SAAAAAGMjteQOU4_3tzmnkGsjJgM9c2am";
					$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

					if (!$resp->is_valid) {
					// What happens when the CAPTCHA was entered incorrectly
						die ("<h2>Wir konnten deine Anmeldung leider nicht entgegennehmen</h2><p>Der Sicherheitscode war nicht korrekt.</p><br /><p class='extern'><a href='anmeldung.php'>Zur&uuml;ck zum Anmeldeformular</a> ");
					} 
					if (empty($_POST['name']) or empty($_POST['mail'])) {
						die ("<h2>Wir konnten deine Anmeldung leider nicht entgegennehmen</h2><p>Du hast nicht alle notwendigen Daten angegeben. <br />Bitte gib zumindest deinen Namen und eine E-Mail-Adresse an.</p><br /><p class='extern'><a href='anmeldung.php'>Zur&uuml;ck zum Anmeldeformular</a> ");
					}
					
					
					$con = mysql_connect("127.0.0.1", "lpt", "penis") or die ("Verbindung zum Datenbankserver fehlgeschlagen");  
					mysql_select_db("lpt", $con) or die ("Verbindung zur Datenbank fehlgeschlagen"); 

					if (get_magic_quotes_gpc() == 1) 
					{ 
						foreach ($_POST AS $key => $postvar) 
							$_POST[$key] = stripslashes($postvar); 
					} 

					$_POST['name'] = mysql_real_escape_string($_POST['name']); 
					$_POST['mail'] = mysql_real_escape_string($_POST['mail']); 
					$_POST['mitglied'] = mysql_real_escape_string($_POST['mitglied']); 
					$_POST['anreise'] = mysql_real_escape_string($_POST['anreise']); 
					$_POST['anmerkungen'] = mysql_real_escape_string($_POST['anmerkungen']); 

					$sql = "INSERT INTO `lptest` (`Name`,`Mail`,`Mitglied`,`Anreisetag`,`Anmerkungen`) 
										VALUES ('".$_POST['name']."', '".$_POST['mail']."', '".$_POST['mitglied']."', '".$_POST['anreise']."', '".$_POST['anmerkungen']."');"; 

					$result = mysql_query($sql,$con); 
					if (!$result) echo mysql_error(); 
					mysql_close($con); 
					
				?>
				<?php if ($result) { ?>
				<h2>Du hast dich erfolgreich zum Landesparteitag 2012.1 angemeldet.</h2>
				<p>
				Vergiss nicht, auf dem Parteitag deinen Personalausweis sowie 36 Euro mitzubringen (falls du deinen Mitgliedsbeitrag noch nicht gezahlt haben solltest), damit du akkreditiert werden kannst.
				</p>
				<?php } else { ?>
				<h2>Bei deiner Anmeldung sind leider Fehler aufgetreten.</h2>
				<?php } ?>
			</div>
		</div>
	</body>
</html>
