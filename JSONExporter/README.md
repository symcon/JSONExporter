# JSONExporter
Das Modul bietet die Möglichkeiten, die aktuelle Werte von Variablen als JSON Export darzustellen. Dabei kann die Objektstruktur vorab definiert werden, sodass z.B. ein Array von Objekten mit ID, Name, Wert und Profilsuffix zurückgegeben wird. Es können im Anschluss beliebig der Objekte in dieser Struktur zurückgegeben werden, wobei die einzelnen Felder mit Variablen verknüpft oder als Freitext definiert werden.

### Inhaltsverzeichnis

1. [Funktionsumfang](#1-funktionsumfang)
2. [Voraussetzungen](#2-voraussetzungen)
3. [Software-Installation](#3-software-installation)
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [Statusvariablen und Profile](#5-statusvariablen-und-profile)
6. [WebFront](#6-webfront)
7. [PHP-Befehlsreferenz](#7-php-befehlsreferenz)

### 1. Funktionsumfang

* Individuelle Struktur der Objekte kann definiert werden
* Ausgabe der aktuellen Werte im JSON Format, wobei ein Array von Objekten zurückgegeben wird

### 2. Voraussetzungen

- IP-Symcon ab Version 5.5

### 3. Software-Installation

* Über den Module Store das 'JSONExporter'-Modul installieren.
* Alternativ über das Module Control folgende URL hinzufügen `https://github.com/symcon/JSONExporter/`

### 4. Einrichten der Instanzen in IP-Symcon

 Unter 'Instanz hinzufügen' ist das 'JSONExporter'-Modul unter dem Hersteller '(Kern)' aufgeführt.

__Konfigurationsseite__:

Name                       | Beschreibung
-------------------------- | ------------------
Ident                      | Auswählbarer Name
Wert                       | __Benutzerdefiniert__ Auswahl, was von der Variable ausgewählt werden soll 
Zu exportierende Variablen | Liste, in dem die Variablen nach der Struktur aufgelistet und hinzugefügt werden kann
Im Browser öffnen          | Öffnet die JSON Struktur in einem Browser 

### 5. Statusvariablen und Profile

Die Statusvariablen/Kategorien werden automatisch angelegt. Das Löschen einzelner kann zu Fehlfunktionen führen.

#### Statusvariablen

Es werden keine zusätzlichen Statusvariablen erstellt.

#### Profile

Es werden keine zusätzlichen Profile erstellt.

### 6. WebFront

Dieses Modul bietet keinerlei Funktion im Webfront.

### 7. PHP-Befehlsreferenze

Dieses Modul bietet keinerlei aufrufbaren Funktionen. 