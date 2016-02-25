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
          
          <div class="iframe-container">
            <iframe src="v2/NewGallery/index.php" class="gallery-iframe" frameborder="0" ></iframe>
          </div>
        </div>
      </div>

      <? include("footer.php"); ?>

    </div>

  </body>
</html>
