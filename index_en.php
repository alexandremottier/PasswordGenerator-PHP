<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <meta name="viewport" content="width=device-width">
  <title>Password Generator</title>

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script>
        $(document).ready(function() {
        $('#btn_click').on('click', function() {
        var url = 'index.php';
        $('#passgen-wrapper').load(url + ' #passgen');
        });
    });
  </script>

</head>
<body>

<h1 style="text-align: center;">Password Generator</h1>
<div id="passgen-wrapper">
  <div id="passgen" style="text-align: center;">
    <?php
      $lowercase = array('alpha', 'bravo', 'charlie', 'delta', 'echo', 'foxtrot', 'golf', 'hotel', 'india', 'juliette', 'kilo', 'lima', 'november', 'oscar', 'papa', 'quebec', 'romeo', 'sierra', 'tango', 'uniform', 'victor', 'whisky', 'yankee', 'zulu');
      $uppercase = array('ALPHA', 'BRAVO', 'CHARLIE', 'DELTA', 'ECHO', 'FOXTROT', 'GOLF', 'HOTEL', 'INDIA', 'JULIETTE', 'KILO', 'LIMA', 'NOVEMBER', 'OSCAR', 'PAPA', 'QUEBEC', 'ROMEO', 'SIERRA', 'TANGO', 'UNIFORM', 'VICTOR', 'WHISKY', 'YANKEE', 'ZULU');
      $special = array('@', '+', '-', '&');
      echo $lowercase[array_rand($lowercase)];
      echo $uppercase[array_rand($uppercase)];
      echo $special[array_rand($special)];
      echo(rand(1,99));
    ?>
  </div>
</div>
<br />
<div style="text-align: center;">
<button type="button" id="btn_click" />Generate new password</button>
<br /><br />
Made in France 🇫🇷 by <a href="https://gitlab.am-networks.fr/am" target="_blank">Alexandre</a>
<a href="https://gitlab.am-networks.fr/am/PasswordGenerator-PHP" target="_blank">Click here to access source code</a>
</div>
</body>
</html>
