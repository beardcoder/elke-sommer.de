# elke-sommer.de – statische Platzhalterseite

Das Statamic-Projekt wurde eingestellt. Der letzte vollstaendige Stand liegt
in der Git-Historie im Commit `3c30f5c`.
Die Domain bleibt bestehen und liefert nur noch diese statische Seite aus.

## Inhalt

| Datei        | Zweck                                                             |
| ------------ | ----------------------------------------------------------------- |
| `index.html` | Komplette Seite – HTML, CSS, Logo und Favicon sind eingebettet     |
| `.htaccess`  | Apache: alte URLs per 301 auf `/`, Verzeichnislisting aus          |
| `robots.txt` | Freigabe für Suchmaschinen                                         |

## Ausspielen

Die drei Dateien in das Webroot der Domain kopieren – fertig.
Der frühere GitHub-Actions-Deploy (rsync nach `host.letsbenow.de`) wurde
mit entfernt; ein Push deployt also nichts mehr automatisch.
Kein Build, kein PHP, keine Datenbank, keine externen Requests
(keine Google Fonts o. Ä., damit datenschutzrechtlich unbedenklich).

## Anpassen

Texte stehen unten in `index.html` im `<main>`-Block, Farben oben als
CSS-Variablen unter `:root`. Dark Mode wird automatisch mitgeliefert.

Falls später wieder Kontaktdaten oder ein Angebot auf der Seite stehen:
dann wird ein Impressum nach § 5 DDG nötig.
