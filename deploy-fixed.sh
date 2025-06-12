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
    echo -e "${YELLOW}lftp is not installed but required. Please install it first:${NC}"
    echo "macOS: brew install lftp"
    echo "Linux: sudo apt-get install lftp"
    exit 1
fi

# Test connection first
echo -e "${YELLOW}🔌 Testing connection...${NC}"
lftp -c "
set sftp:auto-confirm yes
set ssl:verify-certificate false
open sftp://$SFTP_USER:$SFTP_PASS@$SFTP_HOST:$SFTP_PORT
ls /public_html/
bye
" > /dev/null 2>&1

if [ $? -ne 0 ]; then
    echo -e "${RED}❌ Connection failed! Check your credentials.${NC}"
    exit 1
fi

echo -e "${GREEN}✅ Connection successful!${NC}"

# Deploy via lftp
echo -e "${YELLOW}📤 Uploading theme files...${NC}"
echo "This may take a few minutes..."

lftp -c "
set sftp:auto-confirm yes
set ssl:verify-certificate false
set net:timeout 60
set net:max-retries 5
set net:reconnect-interval-base 5
open sftp://$SFTP_USER:$SFTP_PASS@$SFTP_HOST:$SFTP_PORT
cd /public_html/wp-content/themes/
mirror -R --delete --verbose --parallel=3 ./wp-content/themes/norvault-theme/ norvault-theme/
bye
" 2>&1 | while read line; do
    if [[ $line == *"Transferring"* ]] || [[ $line == *"Making"* ]]; then
        echo "  📁 $line"
    elif [[ $line == *"Removing"* ]]; then
        echo "  🗑️  $line"
    fi
done

if [ ${PIPESTATUS[0]} -eq 0 ]; then
    echo -e "${GREEN}✅ Deployment successful!${NC}"
    echo ""
    echo -e "${YELLOW}📝 Next steps:${NC}"
    echo "   1. Visit: https://norvault.10web.site/wp-admin"
    echo "   2. Go to Settings > Permalinks"
    echo "   3. Click 'Save Changes' (without changing anything)"
    echo ""
    echo -e "${GREEN}🔗 Your site: https://norvault.10web.site${NC}"
else
    echo -e "${RED}❌ Deployment failed!${NC}"
    echo "Please check your connection and try again."
    exit 1
fi