<!DOCTYPE html>
<html lang="en">
  <? include("head.php"); ?>

  <body>

    <div class="container gallery">
      <? include("image_header.php"); ?>

      <div class="row main">
        <div class="col-md-3">
          <? $page = "gallery"; ?>
          <? include("main_menu.php"); ?>
        </div>

        <div class="col-md-9">
          <h2 class="page-heading">Picture Gallery</h2>
          
          <p>
            <iframe src="http://www.palmcoastportugueseclub.com/NewGallery/index.php" width="770" height="820" frameborder="0" ></iframe>
          </p>
        </div>
      </div>

      <? include("footer.php"); ?>

    </div>

  </body>
</html>
