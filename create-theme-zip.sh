#!/bin/bash

# Create a clean theme ZIP for upload
echo "Creating Norvault theme ZIP..."

# Define paths
THEME_PATH="/Users/jeroenvanrossum/Local Sites/norvault/app/public/wp-content/themes/norvault-theme"
OUTPUT_PATH="/Users/jeroenvanrossum/Desktop/norvault-theme.zip"
TEMP_DIR="/tmp/norvault-theme"

# Remove old ZIP if exists
rm -f "$OUTPUT_PATH"

# Create temp directory
rm -rf "$TEMP_DIR"
cp -r "$THEME_PATH" "$TEMP_DIR"

# Remove unnecessary files
find "$TEMP_DIR" -name ".DS_Store" -delete
find "$TEMP_DIR" -name "*.git*" -delete
rm -f "$TEMP_DIR/test-placeholder.php"
rm -f "$TEMP_DIR/placeholder-direct.php"
rm -f "$TEMP_DIR/functions-backup.php"

# Create ZIP
cd /tmp
zip -r "$OUTPUT_PATH" "norvault-theme"

# Cleanup
rm -rf "$TEMP_DIR"

echo "✅ Theme ZIP created at: $OUTPUT_PATH"
echo ""
echo "📦 Upload instructies voor 10Web:"
echo "================================"
echo "1. Login op je 10Web WordPress Admin"
echo "2. Ga naar Appearance > Themes > Add New > Upload Theme"
echo "3. Kies bestand: norvault-theme.zip van je Desktop"
echo "4. Klik 'Install Now' en dan 'Activate'"
echo ""
echo "🔧 Na activatie:"
echo "- Installeer/activeer Polylang plugin"
echo "- Maak de pagina's aan met de juiste templates"
echo "- Configureer menu's en widgets"