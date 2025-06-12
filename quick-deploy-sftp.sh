#!/bin/bash

# Quick SFTP Deploy Script voor 10Web
# Gebruik: ./quick-deploy-sftp.sh

echo "🚀 10Web Quick Deploy Script"
echo "=========================="

# Check of lftp geinstalleerd is
if ! command -v lftp &> /dev/null; then
    echo "❌ lftp niet gevonden. Installeer met: brew install lftp"
    exit 1
fi

# Vraag om credentials als ze niet zijn ingesteld
if [ -z "$TENWEB_SFTP_HOST" ]; then
    read -p "10Web SFTP Host (bijv. your-site.sftp.10web.site): " TENWEB_SFTP_HOST
fi

if [ -z "$TENWEB_SFTP_USER" ]; then
    read -p "10Web SFTP Username: " TENWEB_SFTP_USER
fi

if [ -z "$TENWEB_SFTP_PASS" ]; then
    read -sp "10Web SFTP Password: " TENWEB_SFTP_PASS
    echo
fi

# Default port
TENWEB_SFTP_PORT=${TENWEB_SFTP_PORT:-22}

# Paths
LOCAL_THEME="/Users/jeroenvanrossum/Local Sites/norvault/app/public/wp-content/themes/norvault-theme"
REMOTE_THEME="/public_html/wp-content/themes/norvault-theme"

echo "📁 Local: $LOCAL_THEME"
echo "📁 Remote: $REMOTE_THEME"
echo ""

# Confirm
read -p "Start deployment? (y/n) " -n 1 -r
echo
if [[ ! $REPLY =~ ^[Yy]$ ]]; then
    exit 1
fi

# Deploy via LFTP
echo "🔄 Syncing files..."
lftp -e "
set sftp:auto-confirm yes
set ssl:verify-certificate false
set net:timeout 10
set net:max-retries 3
set net:reconnect-interval-base 5
open sftp://$TENWEB_SFTP_USER:$TENWEB_SFTP_PASS@$TENWEB_SFTP_HOST:$TENWEB_SFTP_PORT
mirror -R --delete --parallel=3 --verbose \
  --exclude .git/ \
  --exclude .DS_Store \
  --exclude node_modules/ \
  --exclude .gitignore \
  $LOCAL_THEME $REMOTE_THEME
bye
" 2>&1 | grep -E "(Transferring|Removing|Making|Total|Done)"

echo ""
echo "✅ Theme deployed!"
echo ""
echo "🔧 BELANGRIJK: Fix nu de 404 errors:"
echo "   1. Ga naar: https://$TENWEB_SFTP_HOST/wp-admin/"
echo "   2. Ga naar: Settings > Permalinks"
echo "   3. Klik op 'Save Changes' (zonder iets te wijzigen)"
echo ""
echo "💡 TIP: Bookmark deze URL voor snelle permalink fix:"
echo "   https://$TENWEB_SFTP_HOST/wp-admin/options-permalink.php"

# Optioneel: Bewaar credentials voor volgende keer
read -p "Wil je deze credentials opslaan voor volgende keer? (y/n) " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
    cat > .env.10web << EOF
export TENWEB_SFTP_HOST="$TENWEB_SFTP_HOST"
export TENWEB_SFTP_USER="$TENWEB_SFTP_USER"
export TENWEB_SFTP_PASS="$TENWEB_SFTP_PASS"
export TENWEB_SFTP_PORT="$TENWEB_SFTP_PORT"
EOF
    chmod 600 .env.10web
    echo "✅ Credentials opgeslagen in .env.10web"
    echo "   Gebruik: source .env.10web"
fi