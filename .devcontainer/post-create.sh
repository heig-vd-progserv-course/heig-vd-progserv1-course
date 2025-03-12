#!/usr/bin/env sh

## Update packages list
sudo apt update

## Install packages to optimize images (jpegoptim, optipng)
sudo apt install --yes jpegoptim optipng

## Install packages to optimize documents (ps2pdf)
sudo apt install --yes ghostscript

## Install packages to interact with SQLite databases
sudo apt install --yes sqlite3

## Configure and start Apache server

# Remove the default document root
sudo rm -rf /var/www/html

# Create symbolic link to the document root
sudo ln -s /workspace /var/www/html

# Allow directory listing
sudo sed -i 's/Options -Indexes/Options +Indexes/' /etc/apache2/conf-available/docker-php.conf

# Start Apache server
sudo service apache2 start
