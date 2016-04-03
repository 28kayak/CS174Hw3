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
//$image1= imagecreatefromstring(file_get_contents());
//$exif = exif_read_data($image1);


$image = imagecreatefromstring(file_get_contents($_FILES['fileToUpload']['tmp_name']));
$exif = exif_read_data($_FILES['fileToUpload']['tmp_name']);
echo "Orientation <br>";
echo $exif['Orientation']."<br>";
if(!empty($exif['Orientation'])) {
    switch($exif['Orientation']) {
        case 1:
            //nothing to change
            break;
        case 2:
            //upside down
            $image = imagerotate($iamge, 180,0);
        case 3:
            $image = imagerotate($image,180,0);
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            $image = imagerotate($image,-90,0);
            break;

        case 7:
            $image1 = imagerotate($image, 90, 0);
            imageflip ($image1 , IMG_FLIP_HORIZONTAL );
            echo "came to case 7<br> target file<br>";
            echo $target_file;

            echo $target_dir."/".$_FILES['fileToUpload']['name'];
            imagejpeg($image1, $target_file);
            //write to database

            $sql = "INSERT INTO Image (id ,username,filename, caption, date)
            VALUES ( ".$_POST['user'] .",".$target_file.",".$_POST["caption"].")";


            echo "sql <br>";
            echo $sql;
            break;
        case 8:
            $image = imagerotate($image,90,0);
            break;


    }
}
// $image now contains a resource with the image oriented correctly








/*
//------this goes to model--------///
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br>Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo '<img src="'. $target_dir. '/'. $image. '" alt="'. $image. ">";
    } else {
        echo "<br>Sorry, there was an error uploading your file.";
    }
}



*/


 ?>
