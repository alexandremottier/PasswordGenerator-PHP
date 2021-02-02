<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>Générateur de mot de passe</title>

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script>
        $(document).ready(function() {
        $('#btn_click').on('click', function() {
        var url = 'index.php'; //please insert the url of the your current page here, we are assuming the url is 'index.php'
        $('#passgen-wrapper').load(url + ' #passgen'); //note: the space before #div1 is very important
        });
    });
  </script>

</head>
<body>

<h1 style="text-align: center;">Générateur de mot de passe</h1>
<div id="passgen-wrapper">
  <div id="passgen" style="text-align: center;">
    <?php
      $minuscule = array('alpha', 'bravo', 'charlie', 'delta', 'echo', 'foxtrot', 'golf', 'hotel', 'india', 'juliette', 'kilo', 'lima', 'november', 'oscar', 'papa', 'quebec', 'romeo', 'sierra', 'tango', 'uniform', 'victor', 'whisky', 'yankee', 'zulu');
      $majuscule = array('ALPHA', 'BRAVO', 'CHARLIE', 'DELTA', 'ECHO', 'FOXTROT', 'GOLF', 'HOTEL', 'INDIA', 'JULIETTE', 'KILO', 'LIMA', 'NOVEMBER', 'OSCAR', 'PAPA', 'QUEBEC', 'ROMEO', 'SIERRA', 'TANGO', 'UNIFORM', 'VICTOR', 'WHISKY', 'YANKEE', 'ZULU');
      $special = array('@', '+', '-', '&');
      echo $minuscule[array_rand($minuscule)];
      echo $majuscule[array_rand($majuscule)];
      echo $special[array_rand($special)];
      echo(rand(1,99));
    ?>
  </div>
</div>
<br />
<div style="text-align: center;">
<button type="button" id="btn_click" />Générer nouveau mot de passe</button>
</div>
</body>
</html>
