<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload images</title>
  </head>
  <body>

    <form class="" enctype="multipart/form-data" action="upload_images.php" method="post">
      Browse Image: <input type="file" name="file" value="" size="50">
      <br><br>
      <input type="submit" name="upload" value="Upload Now">
    </form>

    <?php

      if (isset($_POST['upload'])) {

        $image_name = $_FILES['file']['name'];
        $image_type = $_FILES['file']['type'];
        $image_size = $_FILES['file']['size'];
        $image_tmp_name = $_FILES['file']['tmp_name'];

        if ($image_name == '') {
          echo "<script>alert('The file is not selected. Please select the file and try again.')</script>";
        }
        else {
          move_uploaded_file($image_tmp_name, "images/$image_name");

          echo "<br />";
          echo "Image uploaded successfully." . "<br />" . "Here is the image: " . "<br /><br />";
          echo "<img src='images/$image_name'>";

        }
      }

    ?>

  </body>
</html>
