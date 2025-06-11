# Setup instructies voor Local

## Stap 1: Activeer het theme
1. Ga naar http://norvault.local/wp-admin
2. Ga naar Appearance > Themes
3. Activeer "Norvault Security Theme"

Dit zal automatisch:
- Alle pagina's aanmaken
- Menu's configureren
- Homepage instellen
- Permalinks configureren

## Stap 2: Installeer plugins (optioneel)
1. Ga naar Plugins > Add New
2. Zoek en installeer:
   - **Polylang** (voor multi-language)
   - **Contact Form 7** (voor contact formulieren)

## Stap 3: Configureer Polylang (indien geïnstalleerd)
1. Ga naar Languages > Languages
2. Voeg toe:
   - Nederlands (nl_NL) - Default
   - English (en_US)
   - Slovenčina (sk_SK)

## Stap 4: Check de site
- Homepage: http://norvault.local/
- Diensten: http://norvault.local/diensten/
- Over Ons: http://norvault.local/over-ons/
- Cases: http://norvault.local/cases/

## Troubleshooting

### Als pagina's niet zijn aangemaakt:
Voer dit uit in je browser:
```
http://norvault.local/wp-content/themes/norvault-theme/setup-pages.php
```

### Als menu's niet werken:
1. Ga naar Appearance > Menus
2. Maak een nieuw menu "Primary Menu"
3. Voeg alle pagina's toe
4. Vink "Primary Menu" aan onder Display location

### Als CSS/JS niet laadt:
1. Check of de assets folder bestaat in het theme
2. Clear browser cache
3. Check console voor errors