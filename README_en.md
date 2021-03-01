![Last release](https://services.am-networks.fr/badges/PasswordGenerator-PHP/release.svg)
![Status](https://services.am-networks.fr/badges/PasswordGenerator-PHP/status.svg)

[*Pour lire ce README en Français, cliquez ici.*](https://github.com/alexandremottier/PasswordGenerator-PHP/blob/master/README.md)

# Password generator based on PHP and Javascript

This is a web password generator.
To make it work, you just have to get the index_en.php and getpwd.php files and upload them to your web server, in your folder / subdomain intended for this purpose.

You will also need to rename index_en.php to index.php.

## index_en.php file

This file is the interactive password generation page.
It offers a button to generate a new password.
This page includes responsive design, i.e. it adapts to the format of your screen (PC / mobile / tablet).

## getpwd.php file

This file is used for use from another tool via a query. It only returns the generated password, without formatting.
Written completely in PHP, the only source code returned is the generated password.

## AM Networks instance

Want to test the generator directly at home?

[Discover my test instance!](https://services.am-networks.fr/pwdgen/index_en.php)

This instance is updated by [GitLab](https://gitlab.am-networks.fr/am/PasswordGenerator-PHP) every minute.
