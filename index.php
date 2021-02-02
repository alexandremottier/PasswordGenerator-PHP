<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>G&eacute;n&eacute;rateur de mot de passe</title>


</head>
<body>

<h1 style="text-align: center;">G&eacute;n&eacute;rateur
de mot de passe</h1>

<br>

<div style="text-align: center;">
</div>

<div style="text-align: center;"><?php $minuscule = array('alpha', 'bravo', 'charlie', 'delta', 'echo', 'foxtrot', 'golf', 'hotel', 'india', 'juliette', 'kilo', 'lima', 'november', 'oscar', 'papa', 'quebec', 'romeo', 'sierra', 'tango', 'uniform', 'victor', 'whisky', 'yankee', 'zulu');
$majuscule = array('ALPHA', 'BRAVO', 'CHARLIE', 'DELTA', 'ECHO', 'FOXTROT', 'GOLF', 'HOTEL', 'INDIA', 'JULIETTE', 'KILO', 'LIMA', 'NOVEMBER', 'OSCAR', 'PAPA', 'QUEBEC', 'ROMEO', 'SIERRA', 'TANGO', 'UNIFORM', 'VICTOR', 'WHISKY', 'YANKEE', 'ZULU');
$special = array('@', '+', '-', '&');
echo $minuscule[array_rand($minuscule)];
echo $majuscule[array_rand($majuscule)];
echo $special[array_rand($special)];
echo(rand(1,99));?><br>

</div>
<div style="text-align: center;"></div>

</body>
</html>
