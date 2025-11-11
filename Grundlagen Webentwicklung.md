# Grundlagen Webentwicklung

##  1. Installation der Entwicklungsumgebung

Um eigene Webanwendungen zu erstellen, braucht man:
- **Webserver:** z. B. Apache oder Nginx  
- **PHP:** um serverseitigen Code auszuführen  
- **Datenbank:** z. B. MySQL oder MariaDB zum Speichern von Daten  
- **Editor:** z. B. Visual Studio Code, PHPStorm oder Notepad++ mit PHP-Unterstützung  

Alles zusammen kann man z. B. mit **XAMPP** oder **Laragon** installieren.  
Danach kann man lokal Webseiten testen (z. B. unter `http://localhost`).

---

## 2. Sicherheitsrisiken von Webanwendungen

Webseiten können angegriffen werden, z. B. durch:
- **Phishing:** Nutzer werden auf gefälschte Seiten gelockt  
- **Datendiebstahl:** private Daten werden gestohlen  
- **SQL Injections:** Schadcode wird in Datenbankbefehle eingeschleust  
- **Cross-Site-Scripting (XSS):** fremder Code läuft im Browser  
- **Session-Hijacking:** Sitzungen werden übernommen  
- **DoS (Denial of Service):** Server wird mit zu vielen Anfragen überlastet  

---

##  3. Schutzmaßnahmen

So kann man Webanwendungen sicherer machen:
- **Verschlüsselung (HTTPS):** schützt Daten bei der Übertragung  
- **Multifaktor-Authentifizierung:** zusätzlicher Login-Schutz  
- **Prepared Statements / Sanitizing:** schützt vor SQL Injections  
- **Regelmäßige Updates:** halten Server und Software sicher  
- **Starke Passwörter & Zugriffsbeschränkungen:** verhindern Missbrauch  

---

**© 2025 – LBS Eibiswald | 3aAPC**
