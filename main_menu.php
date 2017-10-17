<button class="btn btn-primary menu-toggle glyphicon glyphicon-menu-hamburger"></button>

<div class="main-menu-container" role="navigation">
  <ul class="nav main-menu">
    <li class="<? if ($page == "home") { echo "active"; } ?>" >
      <a href="./"><span class="menu-text">Home</span></a>
    </li>
    <li class="<? if ($page == "board") { echo "active"; } ?>">
      <a href="board.php"><span class="menu-text">Board of Directors</span></a>
    </li>
    <li class="<? if ($page == "history") { echo "active"; } ?>">
      <a href="history.php"><span class="menu-text">History</span></a>
    </li>
    <li class="<? if ($page == "function_hall") { echo "active"; } ?>">
      <a href="function_hall.php"><span class="menu-text">Function Hall</span></a>
    </li>
    <li class="<? if ($page == "gallery") { echo "active"; } ?>">
      <a href="NewGallery/page/gallery/"><span class="menu-text">Picture Gallery</span></a>
    </li>
    <li class="<? if ($page == "palmeira") { echo "active"; } ?>">
      <a href="palmeira.php"><span class="menu-text">Palmeira <span class="hidden-md">Quarterly</span> Newsletter</span></a>
    </li>
    <li class="<? if ($page == "golf") { echo "active"; } ?>">
      <a href="golf.php"><span class="menu-text">Golf Classic</span></a>
    </li>
    <li class="<? if ($page == "bylaws") { echo "active"; } ?>">
      <a href="bylaws.php"><span class="menu-text">Bylaws</span></a>
    </li>
    <li class="<? if ($page == "links") { echo "active"; } ?>">
      <a href="links.php"><span class="menu-text">Links</span></a>
    </li>
  </ul>
</div>

<div class="address-container hidden-sm hidden-xs">
  <? include("address.php"); ?>
</div>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('.menu-toggle').click(function() {
    $('.main-menu-container').toggleClass('show');
  });
});
</script>