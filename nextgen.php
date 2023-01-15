<html>
<head>
<meta charset="utf-8">
<title>Générateur de mots de passe (créé avec ChatGPT)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="get" action="">
    <fieldset>
    <legend>Configuration</legend>
    <label for="length">Longueur du mot de passe :</label>
    <input type="number" name="length" value="12" min="8" max="100" required>

    <br><br>

    <label>Type de caractères :</label>
    <br>
    <input type="checkbox" name="useUpper" value="1" checked> Utiliser les majuscules
    <br>
    <input type="checkbox" name="useLower" value="1" checked> Utiliser les minuscules
    <br>
    <input type="checkbox" name="useNumbers" value="1" checked> Utiliser les chiffres
    <br>
    <input type="checkbox" name="useSpecial" value="1"> Utiliser les caractères spéciaux

    <br><br>

    <input type="submit" name="submit" value="Générer le mot de passe">
  </fieldset>
</form>
<br>
<fieldset>
<legend>Mot de passe généré</legend>
<br>
<?php

// Variables pour stocker les paramètres de génération de mot de passe
$length = 12; // Nombre de caractères par défaut
$useUpper = true; // Utiliser les majuscules par défaut
$useLower = true; // Utiliser les minuscules par défaut
$useNumbers = true; // Utiliser les chiffres par défaut
$useSpecial = false; // Ne pas utiliser les caractères spéciaux par défaut

// Si le formulaire a été soumis, mettre à jour les paramètres en fonction des valeurs soumises
if (isset($_GET['submit'])) {
    $length = (int)$_GET['length'];
    $useUpper = (bool)$_GET['useUpper'];
    $useLower = (bool)$_GET['useLower'];
    $useNumbers = (bool)$_GET['useNumbers'];
    $useSpecial = (bool)$_GET['useSpecial'];
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
?>
</fieldset>
</body>
</html>
