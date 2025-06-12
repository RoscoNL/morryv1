#!/bin/bash

# 10Web SFTP credentials
SFTP_HOST="34.90.115.65"
SFTP_USER="sftp_live_dJYPP"
SFTP_PASS="bCaRPabH1VpEyobwSSmSJe1PafbMbGgNSH"
SFTP_PORT="55207"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${YELLOW}🚀 Starting deployment to 10Web...${NC}"

# Check if we're in the right directory
if [ ! -d "wp-content/themes/norvault-theme" ]; then
    echo -e "${RED}❌ Error: wp-content/themes/norvault-theme directory not found!${NC}"
    echo "Please run this script from the project root directory."
    exit 1
fi

# Check if lftp is installed
if ! command -v lftp &> /dev/null; then
    echo -e "${RED}❌ lftp is not installed. Installing...${NC}"
    if [[ "$OSTYPE" == "darwin"* ]]; then
        brew install lftp
    else
        sudo apt-get update && sudo apt-get install -y lftp
    fi
fi

# Create temporary directory for deployment
TEMP_DIR=$(mktemp -d)
echo -e "${YELLOW}📦 Preparing files for deployment...${NC}"

# Copy theme files to temp directory
cp -r wp-content/themes/norvault-theme/* "$TEMP_DIR/"

# Deploy via lftp
echo -e "${YELLOW}📤 Uploading theme files...${NC}"
cd "$TEMP_DIR"

lftp -c "
set sftp:auto-confirm yes
set ssl:verify-certificate false
set net:timeout 30
set net:max-retries 3
set net:reconnect-interval-base 5
open sftp://$SFTP_USER:$SFTP_PASS@$SFTP_HOST:$SFTP_PORT
cd /public_html/wp-content/themes/norvault-theme/
mirror -R --delete --verbose --parallel=3 ./ ./
bye
"

DEPLOY_STATUS=$?

# Cleanup
cd - > /dev/null
rm -rf "$TEMP_DIR"

if [ $DEPLOY_STATUS -eq 0 ]; then
    echo -e "${GREEN}✅ Deployment successful!${NC}"
    echo -e "${YELLOW}📝 Don't forget to:${NC}"
    echo "   1. Login to WordPress admin"
    echo "   2. Go to Settings > Permalinks"
    echo "   3. Click 'Save Changes' (without changing anything)"
    echo ""
    echo -e "${GREEN}🔗 Your site: https://norvault.10web.site${NC}"
else
    echo -e "${RED}❌ Deployment failed!${NC}"
    exit 1
fi