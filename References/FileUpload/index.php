<?php
/**
 * Vérifier option file_uploads = On dans php.ini
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>File Upload avec PHP</title>
</head>
<body>
<form action="_upload.php" method="post" enctype="multipart/form-data">
  Téléverser image(s):
  <input type="file" name="image_files" id="image_files" accept="image/*" />
  <input type="submit" value="Téléverser" name="upload_submit"/>
</form>
</body>
</html>