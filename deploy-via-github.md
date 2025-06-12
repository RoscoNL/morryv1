# Slimme Deployment naar 10Web via GitHub

## Optie 1: GitHub Deploy Action (Automatisch)

### Setup GitHub Secrets
Voeg deze secrets toe aan je GitHub repo (Settings > Secrets):
- `TENWEB_SFTP_HOST`
- `TENWEB_SFTP_USER` 
- `TENWEB_SFTP_PASSWORD`
- `TENWEB_SFTP_PORT` (meestal 22)

### GitHub Action Workflow
Maak `.github/workflows/deploy-to-10web.yml`:

```yaml
name: Deploy to 10Web

on:
  push:
    branches: [ main, master ]
  workflow_dispatch:

jobs:
  deploy:
    runs-on: ubuntu-latest
    
    steps:
    - uses: actions/checkout@v4
    
    - name: Deploy to 10Web via SFTP
      uses: wlixcc/SFTP-Deploy-Action@v1.2.4
      with:
        username: ${{ secrets.TENWEB_SFTP_USER }}
        server: ${{ secrets.TENWEB_SFTP_HOST }}
        password: ${{ secrets.TENWEB_SFTP_PASSWORD }}
        port: ${{ secrets.TENWEB_SFTP_PORT }}
        local_path: './wp-content/themes/norvault-theme/*'
        remote_path: '/public_html/wp-content/themes/norvault-theme/'
        sftp_only: true

    - name: Fix Permalinks via SSH
      uses: appleboy/ssh-action@v0.1.5
      with:
        host: ${{ secrets.TENWEB_SFTP_HOST }}
        username: ${{ secrets.TENWEB_SFTP_USER }}
        password: ${{ secrets.TENWEB_SFTP_PASSWORD }}
        port: ${{ secrets.TENWEB_SFTP_PORT }}
        script: |
          cd public_html
          wp rewrite flush --allow-root
```

## Optie 2: Via MCP Desktop Commander (Direct SFTP)

```bash
# Install lftp voor SFTP sync
brew install lftp

# Create deploy script
cat > deploy-to-10web.sh << 'EOF'
#!/bin/bash

# 10Web SFTP credentials (vervang deze!)
SFTP_HOST="your-site.sftp.10web.site"
SFTP_USER="your-username"
SFTP_PASS="your-password"
SFTP_PORT="22"

# Local and remote paths
LOCAL_PATH="/Users/jeroenvanrossum/Local Sites/norvault/app/public/wp-content/themes/norvault-theme"
REMOTE_PATH="/public_html/wp-content/themes/norvault-theme"

echo "🚀 Deploying to 10Web..."

# Deploy via lftp
lftp -e "
set sftp:auto-confirm yes
set ssl:verify-certificate false
open sftp://$SFTP_USER:$SFTP_PASS@$SFTP_HOST:$SFTP_PORT
mirror -R --delete --verbose $LOCAL_PATH $REMOTE_PATH
bye
"

echo "✅ Deployment complete!"
echo "🔧 Now login to WordPress admin and resave permalinks!"
EOF

chmod +x deploy-to-10web.sh
```

## Optie 3: Git-based Deploy met 10Web Git Integration

1. **Push naar GitHub:**
```bash
cd /Users/jeroenvanrossum/Local\ Sites/norvault/app/public
git init
git add wp-content/themes/norvault-theme/
git commit -m "Deploy Norvault theme"
git remote add origin https://github.com/yourusername/norvault-theme.git
git push -u origin main
```

2. **In 10Web Dashboard:**
- Ga naar je site > Git Deploy
- Connect met GitHub
- Selecteer je repository
- Deploy path: `/wp-content/themes/`
- Enable auto-deploy

## Optie 4: WP-CLI Remote (Als 10Web SSH toestaat)

```bash
# Create alias for remote site
cat >> ~/.wp-cli/config.yml << 'EOF'
@10web:
  ssh: username@your-site.ssh.10web.site
  path: /public_html
EOF

# Deploy and fix permalinks
wp @10web theme install /local/path/to/theme.zip --activate
wp @10web rewrite flush
wp @10web cache flush
```

## Optie 5: Rsync Deploy Script

```bash
#!/bin/bash
# deploy-rsync.sh

REMOTE="username@your-site.ssh.10web.site"
LOCAL_THEME="/Users/jeroenvanrossum/Local Sites/norvault/app/public/wp-content/themes/norvault-theme"
REMOTE_THEME="/public_html/wp-content/themes/norvault-theme"

# Sync theme
rsync -avz --delete \
  --exclude '.git' \
  --exclude '.DS_Store' \
  --exclude 'node_modules' \
  "$LOCAL_THEME/" "$REMOTE:$REMOTE_THEME/"

# Fix permalinks via SSH
ssh $REMOTE "cd /public_html && wp rewrite flush --allow-root"
```

## Quick Fix voor 404 (Via SSH/SFTP)

Maak een `fix-404.php` file en upload naar WordPress root:

```php
<?php
require_once('wp-load.php');

// Login check
if (!isset($_GET['key']) || $_GET['key'] !== 'your-secret-key') {
    die('Unauthorized');
}

// Flush rewrite rules
flush_rewrite_rules(true);

// Update .htaccess
$htaccess_content = '# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress';

file_put_contents('.htaccess', $htaccess_content);

// Clear cache if W3TC or similar exists
if (function_exists('w3tc_flush_all')) {
    w3tc_flush_all();
}

echo "✅ Permalinks geflusht en .htaccess bijgewerkt!";
?>
```

Gebruik: `https://your-site.10web.site/fix-404.php?key=your-secret-key`

## Beste Aanpak voor Nu:

1. **GitHub Action** - Set het één keer op, deploy automatisch
2. **LFTP Script** - Direct en snel voor manual deploys
3. **10Web Git Deploy** - Als je binnen 10Web ecosystem wilt blijven