# Deployment Instructies voor 10Web

## Opties voor deployment naar 10Web:

### Optie 1: Via 10Web Git Deploy (Aanbevolen)
10Web heeft een ingebouwde Git Deploy functie:

1. **Login op 10Web dashboard**
2. **Ga naar je website > Git Deploy**
3. **Verbind met GitHub:**
   - Klik op "Connect to Git"
   - Kies GitHub
   - Autoriseer 10Web toegang tot je repositories
   - Selecteer de `morryv1` repository

4. **Configureer deployment:**
   - Branch: `main` (of `master`)
   - Deploy path: `/wp-content/themes/`
   - Auto-deploy: Aan (optioneel)

5. **Deploy:**
   - Klik op "Deploy Now"
   - 10Web zal automatisch het theme deployen

### Optie 2: Via SFTP/FTP

1. **Krijg SFTP toegang van 10Web:**
   - Dashboard > Website > SFTP/SSH
   - Noteer: Host, Username, Password, Port

2. **Upload via FTP client (zoals FileZilla):**
   ```
   Upload: /wp-content/themes/norvault-theme/
   Naar: public_html/wp-content/themes/
   ```

### Optie 3: Via 10Web File Manager

1. **Login op 10Web dashboard**
2. **Ga naar File Manager**
3. **Navigeer naar:** `public_html/wp-content/themes/`
4. **Upload de `norvault-theme` folder**

### Optie 4: Via WordPress Admin (ZIP)

1. **Maak een ZIP van het theme:**
   ```bash
   cd wp-content/themes
   zip -r norvault-theme.zip norvault-theme/
   ```

2. **Upload in WordPress:**
   - WordPress Admin > Appearance > Themes
   - Add New > Upload Theme
   - Kies `norvault-theme.zip`

## Na deployment:

1. **Activeer het theme** in WordPress Admin

2. **Installeer benodigde plugins:**
   - Polylang (voor multi-language)
   - Advanced Custom Fields (optioneel)
   - Contact Form 7 of WPForms

3. **Configureer Polylang:**
   - Languages > Add language
   - Voeg toe: Nederlands (nl), English (en), Slovenčina (sk)
   - Stel Nederlands in als default

4. **Maak menu's aan:**
   - Appearance > Menus
   - Maak "Primary Menu" en "Footer Menu"
   - Wijs toe aan de juiste locaties

5. **Importeer demo content (optioneel):**
   - Maak pagina's aan met de juiste templates:
     - Homepage → "Front Page" template
     - Diensten → "Diensten" template
     - Over Ons → "Over Ons" template
     - Cases → "Cases" template

## 10Web specifieke features:

- **10Web Booster**: Wordt automatisch toegepast voor performance
- **Staging**: Maak eerst een staging site om te testen
- **Backups**: Worden automatisch gemaakt voor deployment

## Geen API keys nodig!

10Web gebruikt GEEN API keys voor deployment. Ze gebruiken:
- OAuth voor GitHub integratie
- SFTP credentials voor manual uploads
- Ingebouwde WordPress functies

De `.github/workflows/deploy-to-10web.yml` file kun je verwijderen of aanpassen voor andere deployment methods.