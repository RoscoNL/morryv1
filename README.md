# Norvault Security WordPress Theme

Een moderne, professionele WordPress theme voor Norvault Security - Virtual CISO diensten.

## Features

- 🚀 Modern design met animaties en effecten
- 🌍 Multi-language support (NL, EN, SK) met Polylang
- 📱 Volledig responsive
- ⚡ Performance geoptimaliseerd
- 🔍 SEO-vriendelijk
- 🎨 Dark mode support
- ✨ Particles.js hero sectie
- 📊 AOS scroll animaties

## Installatie

### Vereisten

- WordPress 5.0 of hoger
- PHP 7.4 of hoger
- MySQL 5.6 of hoger

### Stappen

1. Clone deze repository naar je lokale machine:
```bash
git clone https://github.com/RoscoNL/morryv1.git
```

2. Upload de `norvault-theme` folder naar `/wp-content/themes/`

3. Activeer het theme in WordPress Admin > Appearance > Themes

4. Installeer en activeer Polylang plugin voor multi-language support

5. Configureer de talen in Polylang:
   - Nederlands (nl) - Default
   - Engels (en)
   - Slowaaks (sk)

## 10Web Deployment

Dit theme is voorbereid voor deployment naar 10Web. 

### Setup

1. Maak een account aan bij 10Web
2. Maak een nieuwe WordPress site aan
3. Verbind je GitHub repository
4. Voeg de volgende secrets toe aan je GitHub repository:
   - `TEN_WEB_API_KEY`: Je 10Web API key
   - `TEN_WEB_SITE_ID`: Je 10Web site ID

### Deployment

Deployment gebeurt automatisch bij elke push naar de `main` branch via GitHub Actions.

## Theme Structuur

```
norvault-theme/
├── assets/
│   ├── css/
│   │   └── custom.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── page-templates/
│   └── page-services.php
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page.php
├── page-diensten.php
├── page-over-ons.php
├── page-cases.php
├── sidebar.php
└── 404.php
```

## Aanpassingen

### Logo
Upload je logo via WordPress Customizer > Site Identity

### Menu's
- Primary Menu: Hoofdnavigatie
- Footer Menu: Footer links

### Widgets
- Primary Sidebar: Blog sidebar
- Footer Widgets: Footer widget area

### Customizer Opties
- Bedrijfsinformatie (telefoon, email, adres)
- Social media links
- Color schemes

## Plugins

Aanbevolen plugins:
- Polylang (verplicht voor multi-language)
- Contact Form 7 of WPForms
- Yoast SEO
- WP Rocket (caching)

## Support

Voor vragen of problemen, neem contact op met het development team.

## License

Dit theme is eigendom van Norvault Security.