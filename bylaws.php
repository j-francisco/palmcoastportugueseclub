<!DOCTYPE html>
<html lang="en">
  <? include("head.php"); ?>

  <body>

    <div class="container bylaws">
      <? include("image_header.php"); ?>

      <div class="row main">
        <div class="col-md-3">
          <? $page = "bylaws"; ?>
          <? include("main_menu.php"); ?>
        </div>

        <div class="col-md-9">
          <h2 class="page-heading">Bylaws</h2>
          
          <iframe class="visible-lg-block" src="files/BY_LAWS_2012.pdf" width="100%" style="height: 767px;" frameborder="0" scrolling="no"></iframe>
          <a class="hidden-lg" href="files/BY_LAWS_2012.pdf">Click here to view the Bylaws PDF</a>
        </div>
      </div>

      <? include("footer.php"); ?>

    </div>

  </body>
</html>
