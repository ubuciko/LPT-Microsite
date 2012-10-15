**Changelog:**
* nicht mehr so valides XHTML =(  
* (sinnvolle) Metadaten hinzugefügt: `<meta name="author">` und `<meta name="description">`  
* MySQL Zugangsdaten ausgelagert in mysql-config.php  
* alles über `<body>` ausgelagert nach head.php  
* Twitter-Widget ausgetauscht weil das alte bald nicht mehr funktioniert und das neue eh besser/hübscher ist :D  
  
**HowTo: Twitter-Widget anpassen**  
Um das Twitter-Widget anzupassen einfach die entsprechenden Daten in *twidget.js* bearbeiten bzw. in *style.css unter `#content div.twtr-widget`*
  
**HowTo: Anmeldungen in Datenbank speichern**
* in mysql anmelden und:
	* `CREATE DATABASE gewuenschter_datenbankname_hier;`  
	* `USE gewuenschter_datenbankname_hier;`  
	* `CREATE TABLE gewuenschter_tabellenname_hier ( Name TEXT, Mail TEXT, Mitglied TEXT, Anreisetag TEXT, Anmerkungen TEXT );`  
* mysql-config.php anpassen