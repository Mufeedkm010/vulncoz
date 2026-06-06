#!/bin/bash

echo "[+] Updating packages"
sudo apt update

echo "[+] Installing dependencies"
sudo apt install apache2 mariadb-server php php-mysql git unzip zip rsync -y

echo "[+] Starting services"
sudo systemctl enable apache2 mariadb
sudo systemctl start apache2 mariadb

echo "[+] Creating web directory"
sudo mkdir -p /var/www/html/vulncoz

echo "[+] Deploying Vulncoz application..."

sudo rsync -a \
--exclude='.git' \
./ /var/www/html/vulncoz/ > /dev/null 2>&1

echo "[✓] Application deployed successfully"

echo "[+] Importing database"

sudo mysql < database.sql

echo "[+] Creating database user"

sudo mysql -e "
CREATE USER IF NOT EXISTS 'vulnapp'@'localhost' IDENTIFIED BY 'VulnApp@2026';
GRANT ALL PRIVILEGES ON vulncoz.* TO 'vulnapp'@'localhost';
FLUSH PRIVILEGES;
"

echo "[+] Permissions"

sudo chown -R www-data:www-data /var/www/html/vulncoz

echo "[+] Restarting Apache"

sudo systemctl restart apache2

echo "[+] Installation Completed"
echo "[+] Open: http://127.0.0.1/vulncoz"
