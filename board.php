<!DOCTYPE html>
<html lang="en">
  <? include("head.php"); ?>

  <body>

    <div class="container board">
      <? include("image_header.php"); ?>

      <div class="row main">
        <div class="col-md-3">
          <? $page = "board"; ?>
          <? include("main_menu.php"); ?>
        </div>

        <div class="col-md-9">
          <h2 class="page-heading">Board of Directors</h2>
          
          <div class="board-img-container">
            <img src="images/board_of_directors_2025.jpg" alt="Board of Directors" class="board-img" />
          </div>
        </div>
      </div>

      <? include("footer.php"); ?>

    </div>

  </body>
</html>
