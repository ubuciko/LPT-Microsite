**Changelog:**
* valides (X)HTML5  
* CSS-Charset-Definition auf HTML5 angepasst  
* (sinnvolle) Metadaten hinzugefügt: `<meta name="author">` und `<meta name="description">`  
* neuer Font: "Roboto" <3 ... (ja, der Android 4.0 Standardfont)  
* MySQL Zugangsdaten ausgelagert in mysql-config.php  
* alles über `<body>` ausgelagert nach head.php  
* Twitter-Widget ausgetauscht weil das alte bald nicht mehr funktioniert und das neue eh besser/hübscher ist :D  
* Tagesordnung ausgelagert nach tagesordnung.php  
    
**HowTo: Anmeldungen in Datenbank speichern**
* in mysql anmelden und:
	* `CREATE DATABASE gewuenschter_datenbankname_hier;`  
	* `USE gewuenschter_datenbankname_hier;`  
	* `CREATE TABLE gewuenschter_tabellenname_hier ( Name TEXT, Mail TEXT, Mitglied TEXT, Anreisetag TEXT, Anmerkungen TEXT );`  
* mysql-config.php anpassen