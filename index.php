<!DOCTYPE html>
<head>
   <link rel="stylesheet" type="text/css" href="../styles/index.css" media="all">
</head>
<html>
<body>
<h1>Image Rating</h1>
<!--<div class=right-side >
  <a href="signin.php"/>
</div>  -->
<a href="signin.php">Sign In/Sign Up</a>
<a href="upload.php"> Upload </a>
<h2>Recent Up</h2>
<!-- top 3 most resent image uploaded -->
<div class="container">
    <table class="style-table"  align="center">
        <tr>
            <td>
                <div class="img">
                  <?php
                  /*$files = glob("/src/resources");
                  $image = $files[1];
                  echo "<a target='_blank'href='.$image.'>";
                  echo "<img src='.$image.' alt='flogs' width='300' height='200'>";

                  echo "</a>";
                  echo "<div class='desc'>";
                      echo "<p>Add a description of the image here</p>";
                  echo "</div>";
                  */

                  $files = glob("../src/resources");

                  for ($i=1; $i<count($files); $i++)
                  {

                      $image = $files[$i];
                      echo $image;

                      print $image ."<br />";
                      echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
                    }
                   ?>

                </div>
            </td>

            <td>
                <div class="img">
                    <a target="_blank" href="italian-landscape-mountains-nature.jpg">
                        <img src="italian-landscape-mountains-nature.jpg" alt="Fjords" width="300" height="200">
                    </a>
                    <div class="desc">
                        <p>Add a description of the image here</p>
                    </div>
                </div>
            </td>

            <td>
                <div class="img">
                    <a target="_blank" href="italian-landscape-mountains-nature.jpg">
                        <img src="italian-landscape-mountains-nature.jpg" alt="Fjords" width="300" height="200">
                    </a>
                    <div class="desc">
                        <p> Add a description of the image here</p>
                    </div>
                </div>
            </td>

        </tr>
    </table>
</div>

<h2>Popularity</h2>

<!-- top 10 most popular image -->
<!-- <div class="container">
    <table class="style-table"  align="center">
        <tr>
            <td>
                <div class="img">
                    <a target="_blank" href="italian-landscape-mountains-nature.jpg">
                        <img src="italian-landscape-mountains-nature.jpg" alt="Fjords" width="300" height="200">

                    </a>
                    <div class="desc">
                        <p>Add a description of the image here</p>
                    </div>
                </div>
            </td>

            <td>
                <div class="img">
                    <a target="_blank" href="italian-landscape-mountains-nature.jpg">
                        <img src="italian-landscape-mountains-nature.jpg" alt="Fjords" width="300" height="200">
                    </a>
                    <div class="desc">
                        <p>Add a description of the image here</p>
                    </div>
                </div>
            </td>

            <td>
                <div class="img">
                    <a target="_blank" href="italian-landscape-mountains-nature.jpg">
                        <img src="italian-landscape-mountains-nature.jpg" alt="Fjords" width="300" height="200">
                    </a>
                    <div class="desc">
                        <p> Add a description of the image here</p>
                    </div>
                </div>
            </td>

        </tr>
        <!--second line-
        <tr>
            <td>
                <div class="img">
                    <a target="_blank" href="italian-landscape-mountains-nature.jpg">
                        <img src="italian-landscape-mountains-nature.jpg" alt="Fjords" width="300" height="200">

                    </a>
                    <div class="desc">
                        <p>Add a description of the image here</p>
                    </div>
                </div>
            </td>

            <td>
                <div class="img">
                    <a target="_blank" href="italian-landscape-mountains-nature.jpg">
                        <img src="italian-landscape-mountains-nature.jpg" alt="Fjords" width="300" height="200">
                    </a>
                    <div class="desc">
                        <p>Add a description of the image here</p>
                    </div>
                </div>
            </td>

            <td>
                <div class="img">
                    <a target="_blank" href="italian-landscape-mountains-nature.jpg">
                        <img src="italian-landscape-mountains-nature.jpg" alt="Fjords" width="300" height="200">
                    </a>
                    <div class="desc">
                        <p> Add a description of the image here</p>
                    </div>
                </div>
            </td>

        </tr>
    </table>
</div>




-->
<?php
?>

</body>
</html>



<?php






 ?>
