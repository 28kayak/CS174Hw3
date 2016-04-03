<!--<form action="upload.php" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend>Upload an image</legend>
    File Name:<br>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    Caption:<br>
    <input type="textbox" name="caption" value="caption"><br>
    User<br>
    <input type="text" name="user" value="user name"> <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

-->
<?php
echo "post <br>";
echo $_POST["user"] ."<br>";
echo $_POST["caption"]."<br>";
echo $_FILES["fileToUpload"]["name"]."<br>";
$image = $_FILES["fileToUpload"]["name"];
$target_dir = "../resources/";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
    echo "Sorry, only JPG, and JPEG, files are allowed.";
    $uploadOk = 0;
}

//handle exif
$imagick = new \Imagick();
$imagick->readImage($image);
$format = strtolower($imagick->getImageFormat());

if ($format === 'jpeg') {
    $orientation = $imagick->getImageOrientation();
    $isRotated = false;
    if ($orientation === \Imagick::ORIENTATION_RIGHTTOP) {
        $imagick->rotateImage('none', 90);
        $isRotated = true;
    } elseif ($orientation === \Imagick::ORIENTATION_BOTTOMRIGHT) {
        $imagick->rotateImage('none', 180);
        $isRotated = true;
    } elseif ($orientation === \Imagick::ORIENTATION_LEFTBOTTOM) {
        $imagick->rotateImage('none', 270);
        $isRotated = true;
    }
    if ($isRotated) {
        $imagick->setImageOrientation(\Imagick::ORIENTATION_TOPLEFT);
    }
}



//------this goes to model--------///
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo '<img src="'. $target_dir. '/'. $image. '" alt="'. $image. ">";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//*/





 ?>
