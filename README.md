# Générateur de mot de passe basé sur PHP et Javascript

Ceci est un générateur de mot de passe web.
Pour le faire fonctionner, il suffit de récupérer les fichiers index.php et getpwd.php et de les téléverser vers votre serveur web, dans votre dossier/sous-domaine destiné à cet effet.

## Fichier index.php

Ce fichier est la page interactive de génération de mot de passe.
Elle propose un bouton permettant de générer un nouveau mot de passe.
Cette page inclut le responsive design, c'est à dire qu'elle s'adapte au format de votre écran (PC/mobile/tablette).

## Fichier getpwd.php

Ce fichier sert à l'utilisation depuis un autre outil via une requête. Il ne renvoie que le mot de passe généré, sans mise en forme.
Écrit totalement en PHP, le seul code source renvoyé est le mot de passe généré.
