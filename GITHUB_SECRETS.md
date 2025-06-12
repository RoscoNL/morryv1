# GitHub Secrets Setup

Voeg deze secrets toe aan je GitHub repository:
(Settings > Secrets and variables > Actions > New repository secret)

## Secrets die je moet toevoegen:

1. **TENWEB_SFTP_HOST**
   Value: `34.90.115.65`

2. **TENWEB_SFTP_USER**
   Value: `sftp_live_dJYPP`

3. **TENWEB_SFTP_PASSWORD**
   Value: `bCaRPabH1VpEyobwSSmSJe1PafbMbGgNSH`

4. **TENWEB_SFTP_PORT**
   Value: `55207`

## Deployment opties:

### Automatisch (via GitHub)
- Push naar `main` of `master` branch triggert automatische deployment
- Of ga naar Actions tab > "Deploy to 10Web" > "Run workflow"

### Handmatig (lokaal)
```bash
./deploy-to-10web.sh
```

## Na deployment:
1. Login op WordPress admin
2. Ga naar Settings > Permalinks
3. Klik "Save Changes" zonder iets te wijzigen

## Troubleshooting:
- Als de workflow faalt, check de Actions tab voor error logs
- Voor lokale deployment issues, run: `brew install lftp` eerst
