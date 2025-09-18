<!-- result.php -->
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php 
      echo "관심언어 : ";
      foreach ($_REQUEST["lang"] as $value)
        echo "$value";
      echo "<br>";

      echo "취미 : ";
      foreach ($_REQUEST["hobby"] as $value)
        echo "$value";
      echo "<br>";
    ?>
  </body>
</html>