!/bin/bash

sudo apt update && sudo apt upgrade
sudo apt install ca-certificates apt-transport-https lsb-release 
wget -q https://packages.sury.org/php/apt.gpg -O- | sudo apt-key add -
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list

sleep 10
sudo apt update
sudo apt install php8.1

sleep 5
sudo apt install php8.1-cli php8.1-common php8.1-curl php8.1-mbstring php8.1-mysql php8.1-xml
