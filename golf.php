<!DOCTYPE html>
<html lang="en">
  <? include("head.php"); ?>

  <body>

    <div class="container">
      <? include("image_header.php"); ?>

      <div class="row main">
        <div class="col-md-3">
          <? $page = "golf"; ?>
          <? include("main_menu.php"); ?>
        </div>

        <div class="col-md-9">
          <h2 class="page-heading">Annual North/South Golf Classic</h2>
          <br />
          <h4><a href="files/golf_flyers_2017.pdf">Seventh Golf Classic - 2017</a></h4>
          <br />
          <h4>Past Years</h4>
          <div class="golf-past-years">
            <a href="images/golf/2016_group_poster.jpg"><img src="images/golf/2016_group_poster.jpg" alt="2016 Golf Classic" class="history-img" /></a>
            <a href="images/golf/2015_group_poster.jpg"><img src="images/golf/2015_group_poster.jpg" alt="2015 Golf Classic" class="history-img" /></a>
            <a href="images/golf/2014_group_poster.jpg"><img src="images/golf/2014_group_poster.jpg" alt="2014 Golf Classic" class="history-img" /></a>
            <a href="images/golf/2013_group_poster.jpg"><img src="images/golf/2013_group_poster.jpg" alt="2013 Golf Classic" class="history-img" /></a>
            <a href="images/golf/2012_group_poster.jpg"><img src="images/golf/2012_group_poster.jpg" alt="2012 Golf Classic" class="history-img" /></a>
          </div>

        </div>
      </div>

      <? include("footer.php"); ?>

    </div>

  </body>
</html>
