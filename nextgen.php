<?php

// Variables pour stocker les paramètres de génération de mot de passe
$length = 12; // Nombre de caractères par défaut
$useUpper = true; // Utiliser les majuscules par défaut
$useLower = true; // Utiliser les minuscules par défaut
$useNumbers = true; // Utiliser les chiffres par défaut
$useSpecial = false; // Ne pas utiliser les caractères spéciaux par défaut

// Si le formulaire a été soumis, mettre à jour les paramètres en fonction des valeurs soumises
if (isset($_POST['submit'])) {
    $length = (int)$_POST['length'];
    $useUpper = (bool)$_POST['useUpper'];
    $useLower = (bool)$_POST['useLower'];
    $useNumbers = (bool)$_POST['useNumbers'];
    $useSpecial = (bool)$_POST['useSpecial'];
}

// Tableau de caractères disponibles pour générer le mot de passe
$chars = array();

// Ajouter les caractères majuscules si nécessaire
if ($useUpper) {
    $chars = array_merge($chars, range('A', 'Z'));
}

// Ajouter les caractères minuscules si nécessaire
if ($useLower) {
    $chars = array_merge($chars, range('a', 'z'));
}

// Ajouter les chiffres si nécessaire
if ($useNumbers) {
    $chars = array_merge($chars, range(0, 9));
}

// Ajouter les caractères spéciaux si nécessaire
if ($useSpecial) {
    $chars = array_merge($chars, array_merge(range('!', '/'), range(':', '@'), range('[', '`'), range('{', '~')));
}

// Mélanger les caractères disponibles
shuffle($chars);

// Générer le mot de passe en sélectionnant les premiers $length caractères
$password = implode(array_slice($chars, 0, $length));

// Utiliser $password pour générer un mot de passe
echo $password;
