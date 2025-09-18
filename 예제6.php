<!-- upload.php -->
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form 
      action="getfiles.php"  
      method="post" 
      enctype="multipart/form-data">
      <input type="file" name="upload"><br><br>
      <input type="submit" value="업로드">
    </form>
  </body>
</html>