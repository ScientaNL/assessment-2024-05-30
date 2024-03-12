# Assessment Sollicitatie Scienta

## Inleiding
Het doel van deze opdracht is om op basis van de geprovide data een geneste boomstructuur te genereren en deze te outputten in HTML-listing (UL, LI).
- De data representeert een boomstructuur, maar is een ‘platte’ lijst.
- parentId correspondeert met itemId, waardoor er diepte in de structuur is aangegeven
- ordering bepaalt op een niveau de volgorde waarin de items moeten komen te staan.

**Tip:** Lees eerst dit document goed door ;-)


## Schematische weergave vertaling tabel naar geneste data:

### Tabel

| itemId | parentId | title           |
|--------|----|-----------------------|
| 1      | _NULL_   | Hoofdstuk 1     |
| 2      | 1        | Hoofdstuk 1.1   |
| 3      | 2        | Hoofdstuk 1.1.1 |

### Geneste data

- hoofdstuk 1 (itemId 1)
  - Hoofdstuk 1.1 (itemId 2)
    - Hoofdstuk 1.1.1 (itemId 3)

### Data
De items in de data hebben altijd de volgende signatuur:
```
{
	"itemId":	<identifier van het item>,
	"parentId":	<id van z’n parent>,
	"title":	<human readable title>,
	"ordering":	<ordering tenopzichte van z’n siblings>
}
```
## Opdracht
De data wordt geshuffled aangeboden. De set is iedere keer dezelfde, maar in andere volgorde. De opdracht moet gemaakt worden in een klasse die de interface TreeAssessment implementeert.  De assessment bestaat uit twee fases.

**Bonuspunten:**

_Wil je helemaal goed voor de dag komen? Houd je dan ook aan deze extra voorwaarden!_
- Er mag geen recursie worden gebruikt in fase 1.
- Het aantal iteraties mag maximaal 2N zijn. (Een sorteerfunctie wordt niet gezien als iteratie in de telling)
- Er mag maximaal één keer een sorteerfunctie gebruiken.
- Enkel programmatische data mag gebruikt worden voor sortering (itemId, parentId, ordering).

### Voorbereiding bootstrappen
- run de code met php op de CLI of run in de browser met de ingebouwde webserver
  - `php -S localhost:8001`
- Maak een goede werkplek van waaruit je verder gaat werken
	- Let op: Zaken als autoloading zijn in vanilla PHP niet aanwezig. Ook geen composer.

### Fase 1: Boomstructuur opbouwen
- Implementeer methode `buildTree`. Gebruik deze methode als uitgangspunt.
- Bouw op basis van de array een geneste boomstructuur op in een multidimensionele array.
- Zorg ervoor dat de ordering correspondeert met de meegegeven ordering.

### Fase 2: Boomstructuur outputten
- Implementeer methode generateHtmlTree en gebruik deze methode als uitgangspunt.
- Genereer op basis van de opgebouwde data uit fase 1 een valide HTML unordered  list (`<UL>`) met daarin list-items (`<LI>`) die de title weergeven.
- De output zou er dan moeten uitzien als in het schematische voorbeeld van hierboven.

Succes!
