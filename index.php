<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Uploading</title>
  <?php
  include('link.php');
  ?>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
      <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="file">
      </div>

      <input type="submit" value="submit" name="submit" class="btn btn-success" />
    </div>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
      $fileName = $_FILES['file']['name'];
      $fTmp = $_FILES['file']['tmp_name'];
      $type = $_FILES['file']['type'];
      $fileType = ['image/jpeg', 'image/png', 'image/jpg'];

      if (in_array($type, $fileType)) {
        if (file_exists('upload/' . $fileName)) {
          $str = substr(str_shuffle('helloWelcome'), 10, 10);
          $fileName = $str . "_" . time() . "_" . $fileName;
        }
        if (move_uploaded_file($fTmp, "upload/" . $fileName)) {
          echo "<p>success! profile photo update successfully</p>";
        } else {
          echo "<p>Sorry ! unable to upload file</p>";
        }
      } else {
        echo "select a valid file formate";
      }
    }
  } else {
    echo "Please upload a profile pic";
  }
  ?>
</body>

</html>