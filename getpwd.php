<?php
  $minuscule = array('alpha', 'bravo', 'charlie', 'delta', 'echo', 'foxtrot', 'golf', 'hotel', 'india', 'juliette', 'kilo', 'lima', 'november', 'oscar', 'papa', 'quebec', 'romeo', 'sierra', 'tango', 'uniform', 'victor', 'whisky', 'yankee', 'zulu');
  $majuscule = array('ALPHA', 'BRAVO', 'CHARLIE', 'DELTA', 'ECHO', 'FOXTROT', 'GOLF', 'HOTEL', 'INDIA', 'JULIETTE', 'KILO', 'LIMA', 'NOVEMBER', 'OSCAR', 'PAPA', 'QUEBEC', 'ROMEO', 'SIERRA', 'TANGO', 'UNIFORM', 'VICTOR', 'WHISKY', 'YANKEE', 'ZULU');
  $special = array('@', '+', '-', '&');
  echo $minuscule[array_rand($minuscule)];
  echo $majuscule[array_rand($majuscule)];
  echo $special[array_rand($special)];
  echo(rand(1,99));
?>
