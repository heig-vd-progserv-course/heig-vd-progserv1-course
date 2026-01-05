#!/usr/bin/env sh


## Configure Bash aliases
tee -a ~/.bash_aliases > /dev/null <<"EOF"
alias tree='tree --dirsfirst -A -F'
alias jpegoptim='jpegoptim --strip-all --all-progressive'
alias optipng='optipng -o5 -strip all -fix'
EOF

## Install required packages
# Update packages list
sudo apt update

# Install packages to optimize images (jpegoptim, optipng)
sudo apt install --yes jpegoptim optipng

# Install packages to optimize documents (ps2pdf)
sudo apt install --yes ghostscript

# Install network utilities (dig, nslookup, ping, ncat)
sudo apt install --yes dnsutils iputils-ping ncat

# Install packages to interact with SQLite databases
sudo apt install --yes sqlite3

## Configure Apache server
# Remove the default document root
sudo rm -rf /var/www/html

# Create symbolic link to the document root
sudo ln -s /workspace /var/www/html

# Allow directory listing
sudo sed -i 's/Options -Indexes/Options +Indexes/' /etc/apache2/conf-available/docker-php.conf
