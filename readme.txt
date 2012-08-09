=== CW Google Analytics Datenschutz ===
Contributors: christianwenzl
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=RVT9TV47T5CLS
Tags: google analytics, datenschutz, datenschutzkonform, anonymizeIp, anonymize, anonym
Requires at least: 3.0.0
Tested up to: 3.4
Stable tag: trunk

Dieses Plugin stellt eine einfache Möglichkeit zur Verfügung, Google Analytics auf der Seite datenschutzkonform einzubinden. 

== Description ==

Nach der Installation finden Sie unter Einstellungen, Privatsphäre ein weiteres Textfeld, bei dem Sie die Account-ID von Google Analytics eintragen können.

Mit der Hinterlegung dieser ID ist Analytics sofort einsatzklar. Technisch wird bei der Darstellung des Trackingcodes der Parameter "_gat._anonymizeIp" hinterlegt, der die IP-Adressen erst kürzt und anschließend an Google übermittelt.

Zum datenschutzkonformen Einsatz ist weiterhin eine Vereinbarung mit Google notwendig. Den Vertrag dazu (kostenlos) und weitere, ausführliche Informationen stellt der Datenschutzbeauftragten von Hamburg zur Verfügung, zu finden unter
http://www.christian-wenzl.de/google-analytics-datenschutzkonform

== Installation ==

1. ZIP-Datei über den Installer installieren
2. Unter Privatsphäre-Einstellungen die Google Analytics Account-ID eintragen
3. Fertig, Tracking erfolgt sofort.

== Frequently Asked Questions ==

= Ist diese Einbindung 100% rechtssicher? =

Sie entspricht den aktuellen Vorgaben, diese können sich aber jederzeit ändern. Für die Rechtssicherheit übernehme ich keine Haftung. Bitte kontaktieren Sie im Zweifelsfall Ihren Anwalt des Vertrauens.

== Screenshots ==

1. Privatsphäre-Einstellung
2. Darstellung im Quelltext

== Changelog ==

= 1.2 =
* Unbenötigte Requests entfernt (da inzwischen standardmäßig von Google erfasst)

= 1.1 =
* Anpassung, Einbindung im Head-Bereich

= 1.0 =
* Erstveröffentlichung bei wordpress.org