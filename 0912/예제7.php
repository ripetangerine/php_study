<!-- getfiles.php -->
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      if ($_FILES["upload"]["error"] == UPLOAD_ERR_OK){
        $temp_name = $_FILES['upload']['tmp_name'];
        $file_name = $_FILES['upload']['name'];
        $save_name = iconv("utf-8", "cp949", $file_name);

        $part = pathinfo($save_name);
        $ext = isset($part["extension"]) ? ".$part[extension]" : "";

        for ($i=1; file_exists("file/$save_name"); $i++){
          $save_name = "{$part['filename']} ($i)$ext";
        }

        if (move_uploaded_file($temp_name, "files/$save_name")){
          echo "업로드 성공<br>";
          echo "업로드한 파일명 : $file_name<br>";
          $save_name_utf8 = iconv("cp949", "utf-8", $save_name);
          echo "저장된 파일명 : $save_name_utf8<br>";
        }
        else{
          echo "파일 저장 실패";
        }
      }
      else{
        echo "파일 전송 싯파이";
      }
    ?>
  </body>
</html>