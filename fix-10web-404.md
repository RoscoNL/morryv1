# Fix voor 404 Errors op 10Web Production

## Probleem
Alle pagina's geven 404 errors op de 10Web productie omgeving.

## Oplossingen (in volgorde proberen):

### 1. Permalinks Opnieuw Opslaan (EERSTE STAP!)
Dit lost 90% van de 404 problemen op:

1. Login op WordPress Admin: `https://jouw-site.10web.site/wp-admin/`
2. Ga naar: **Settings > Permalinks**
3. Klik gewoon op **"Save Changes"** (zonder iets te wijzigen)
4. WordPress zal automatisch de .htaccess file regenereren

### 2. Check .htaccess File
Als stap 1 niet werkt, check de .htaccess file:

```apache
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
```

**Via 10Web File Manager:**
1. Dashboard > File Manager
2. Navigeer naar: `public_html/`
3. Zoek `.htaccess` (mogelijk verborgen - enable "Show hidden files")
4. Als het niet bestaat, maak het aan met bovenstaande content

### 3. Check Page Templates
Controleer of de custom page templates correct zijn:

**Te checken files:**
- `page-diensten.php`
- `page-over-ons.php`
- `page-cases.php`
- `page-prijzen.php`

**In WordPress Admin:**
1. Ga naar Pages
2. Edit elke pagina
3. Check rechts onder "Page Attributes" > "Template"
4. Zorg dat de juiste template is geselecteerd

### 4. 10Web Specifieke Issues

**A. Cache Leegmaken:**
1. 10Web Dashboard > Website > Cache
2. Klik "Clear Cache"
3. Wacht 2-3 minuten

**B. 10Web Booster Conflict:**
1. WordPress Admin > 10Web Booster
2. Zet tijdelijk uit om te testen
3. Als dit helpt, configureer exclusions voor je custom pages

**C. PHP Version Check:**
1. 10Web Dashboard > PHP Settings
2. Zorg voor PHP 7.4 of hoger (bij voorkeur 8.0+)

### 5. Debug Mode Aanzetten
Voeg dit toe aan `wp-config.php` voor meer info:

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

Check dan: `/wp-content/debug.log`

### 6. Alternative Permalink Structure
Als niets werkt, probeer tijdelijk:

1. Settings > Permalinks
2. Kies "Plain" 
3. Save
4. Test of pages werken
5. Zet dan terug naar "Post name" en save opnieuw

### 7. Contact 10Web Support
Als alles faalt:
- Live Chat in 10Web Dashboard
- Vraag specifiek om:
  - mod_rewrite status check
  - .htaccess write permissions
  - Error logs van Apache/Nginx

## Quick Test Script
Maak `test-rewrite.php` in root:

```php
<?php
echo "Rewrite Test<br>";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Mod_rewrite: " . (function_exists('apache_get_modules') && in_array('mod_rewrite', apache_get_modules()) ? 'Enabled' : 'Check with hosting') . "<br>";
?>
```

## Meest Waarschijnlijke Oorzaak
Bij 10Web is het meestal:
1. Permalinks niet goed ingesteld na deployment
2. .htaccess niet correct gekopieerd
3. 10Web Booster die custom routes blokkeert

**Start met oplossing 1 - dat lost het meestal op!**