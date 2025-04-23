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
  <form action="" method="POST" enctype="">
    <div class="container">
      <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile">
      </div>

      <input type="submit" value="submit" name="submit" class="btn btn-success" />
    </div>
  </form>
</body>

</html>