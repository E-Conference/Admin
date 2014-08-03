#!/bin/bash
echo "Init script for LiveCon Admin is strating...";
echo "Enter the RELATIVE path of the fibe directory in Livecon repository (for the symbolik link) :";

read fibeDir;
ln -s ../${fibeDir} ./src/fibe;

echo "Configuration of the parameters.yml.";
echo "database_host (ex : 127.0.0.1):";
read database_host;
echo "database_name (ex : wwwlivecon):";
read database_name;
echo "database_user (ex : liveon_app):";
read database_user;
echo "database_password (ex : liveon_app):";
read database_password;

echo "# This file is auto-generated during the composer install
parameters:
    database_driver: pdo_mysql
    database_host: $database_host
    database_port: null
    database_name: $database_name
    database_user: $database_user
    database_password: $database_password
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    locale: en
    secret: ThisTokenIsNotSoSecretChangeIt
    debug_toolbar: true
    debug_redirects: true
    use_assetic_controller: true
" > ./app/config/parameters.yml

echo "End of Initialisation.";
echo "";
echo "don't forget to do the following commands:"
echo "composer install";
echo "php app/console assets:install";