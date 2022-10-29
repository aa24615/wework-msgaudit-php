rm -rf php/extension
cp -r php/php7-wxwork-finance-sdk php/extension
docker-compose down && docker-compose up -d