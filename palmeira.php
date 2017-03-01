<!DOCTYPE html>
<html lang="en">
  <? include("head.php"); ?>

  <body>

    <div class="container palmeira">
      <? include("image_header.php"); ?>

      <div class="row main">
        <div class="col-md-3">
          <? $page = "palmeira"; ?>
          <? include("main_menu.php"); ?>
        </div>

        <? 
          $latestVersion = array("name" => "January 2017", "url" => "http://issuu.com/palmcoastportugueseclub/docs/palmeira_janeiro_2017", "thumbnail" => "images/palmeira_thumbs/jan2017_thumb.jpg");
          $oldVersions = [
            array("name" => "October 2016", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_outubro_2016", "thumbnail" => "images/palmeira_thumbs/oct2016_thumb.jpg"),
            array("name" => "July 2016", "url" => "http://issuu.com/palmcoastportugueseclub/docs/palmeira_july_2016", "thumbnail" => "images/palmeira_thumbs/july2016_thumb.jpg"),
            array("name" => "April 2016", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_abril_2016", "thumbnail" => "images/palmeira_thumbs/april2016_thumb.jpg"),
            array("name" => "January 2016", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_janeiro_2016?e=2570928/33648244", "thumbnail" => "images/palmeira_thumbs/jan2016_thumb.jpg"),
            array("name" => "October 2015", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_october_2015?e=2570928/30697753", "thumbnail" => "images/palmeira_thumbs/oct2015_thumb.jpg"), 
            array("name" => "July 2015", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_july_2015?e=2570928/33653918", "thumbnail" => "images/palmeira_thumbs/july2015_thumb.jpg"), 
            array("name" => "April 2015", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_abril_2015?e=2570928/33654011", "thumbnail" => "images/palmeira_thumbs/april2015_thumb.jpg"), 
            array("name" => "January 2015", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_janeiro_2015?e=2570928/33654160", "thumbnail" => "images/palmeira_thumbs/jan2015_thumb.jpg"), 
            array("name" => "October 2014", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeiraoutubro2014?e=2570928/33654171", "thumbnail" => "images/palmeira_thumbs/oct2014_thumb.jpg"), 
            array("name" => "July 2014", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_julho_2014?e=2570928/33654179", "thumbnail" => "images/palmeira_thumbs/july2014_thumb.jpg"), 
            array("name" => "April 2014", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_abril_2014?e=2570928/7701927", "thumbnail" => "images/palmeira_thumbs/april2014_thumb.jpg"), 
            array("name" => "January 2014", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_janeiro_2014?e=2570928/6459037", "thumbnail" => "images/palmeira_thumbs/jan2014_thumb.jpg"), 
            array("name" => "October 2013", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_outubro_2013?e=2570928/5249679", "thumbnail" => "images/palmeira_thumbs/oct2013_thumb.jpg"), 
            array("name" => "July 2013", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_julho_2013-final?e=2570928/3797395", "thumbnail" => "images/palmeira_thumbs/july2013_thumb.jpg"), 
            array("name" => "Scholarship Insert", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_julho-insert_scholarship?e=2570928/3945817", "thumbnail" => "images/palmeira_thumbs/scholarship_thumb.jpg"), 
            array("name" => "April 2013", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_abril_2013?e=2570928/2091586", "thumbnail" => "images/palmeira_thumbs/april2013_thumb.jpg"), 
            array("name" => "January 2013", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_janeiro_2013?e=2570928/1276058", "thumbnail" => "images/palmeira_thumbs/jan2013_thumb.jpg"), 
            array("name" => "October 2012", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_outubro_2012?e=2570928/33654255", "thumbnail" => "images/palmeira_thumbs/oct2012_thumb.jpg"), 
            array("name" => "July 2012", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_july_2012?e=2570928/33654263", "thumbnail" => "images/palmeira_thumbs/july2012_thumb.jpg"), 
            array("name" => "April 2012", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_abril_2012?e=2570928/33654278", "thumbnail" => "images/palmeira_thumbs/april2012_thumb.jpg"), 
            array("name" => "January 2012", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_janeiro_2012?e=2570928/33654290", "thumbnail" => "images/palmeira_thumbs/jan2012_thumb.jpg"), 
            array("name" => "October 2011", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_outubro_2011?e=2570928/33654297", "thumbnail" => "images/palmeira_thumbs/oct2011_thumb.jpg"), 
            array("name" => "July 2011", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_july_2011?e=2570928/33654299", "thumbnail" => "images/palmeira_thumbs/july2011_thumb.jpg"), 
            array("name" => "April 2011", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeira_april_2011?e=2570928/33654302", "thumbnail" => "images/palmeira_thumbs/april2011_thumb.jpg"), 
            array("name" => "January 2011", "url" => "https://issuu.com/palmcoastportugueseclub/docs/palmeirajan2011?e=2570928/33654311", "thumbnail" => "images/palmeira_thumbs/jan2011_thumb.jpg")
          ]
        ?>

        <div class="col-md-9">
          <h2 class="page-heading">Palmeira</h2>

          <div class="palmeiras">
            <!-- Latest version: -->
            <div class="row">
              <div class="palmeira-thumb-container col-xs-12 col-sm-4">
                <a href="<? echo $latestVersion["url"]; ?>">
                  <div class="palmeira-thumb" style="background: url('<? echo $latestVersion["thumbnail"]; ?>');">
                    <span class="palmeira-hover">
                      <span>Click to view</span>
                    </span>
                  </div>
                </a>
                <div class="palmeira-label">
                  <a href="<? echo $latestVersion['url']; ?>"><? echo $latestVersion["name"]; ?></a>
                </div>
              </div>

              <div class="col-xs-12 sm-4">
              </div>
              <div class="col-xs-12 sm-4">
              </div>
            </div>

            <hr/>

            <div class="row">
              <? foreach ($oldVersions as $version) { ?>
                <div class="col-xs-12 col-sm-4 palmeira-thumb-container">
                  <a href="<? echo $version["url"]; ?>">
                    <div class="palmeira-thumb" style="background: url('<? echo $version["thumbnail"]; ?>');">
                      <span class="palmeira-hover">
                        <span>Click to view</span>
                      </span>
                    </div>
                  </a>
                  <div class="palmeira-label">
                    <a href="<? echo $version['url']; ?>"><? echo $version["name"]; ?></a>
                  </div>
                </div>
              <? } ?>
            </div>
          </div>
        </div>
      </div>

      <? include("footer.php"); ?>

    </div>

  </body>
</html>
