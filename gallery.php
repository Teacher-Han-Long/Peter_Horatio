<?php

 
 include('inc/data.php');

 if (isset($_GET["gal"])) {
    if ($_GET["gal"] == "paint") {
        $gallery = $paint;
		$galleryTitle = "Paintings";
        $section = "paint";
    } else if ($_GET["gal"] == "lPaint") {
        $gallery = $lPaint;
		$galleryTitle = "Light paintings";
        $section = "lPaint";
    } else if ($_GET["gal"] == "lbPaint") {
        $gallery = $lbPaint;
		$galleryTitle = "Light box paintings";
        $section = "lbPaint";
    } else if ($_GET["gal"] == "photo") {
               $gallery = $photo;
               $galleryTitle = "Photographs";
               $section = "photo";
     } else  {
        $section = NULL;
    }
}

 
 include("inc/header.php"); ?>




    <div class="tz-gallery pt-3 mt-3">
        <h2 class='text-center mt-3 pb-4 gallery-title d-lg-none'>
            <?php echo $galleryTitle; ?>
        </h2>
        <div class="main-gallery">
            <div class="container mb-4">

                <div class="row">
                    <?php foreach ($gallery as $item) {
            echo "<div class ='col-6 col-md-4 col-lg-3 col-xl-2'>";
            echo "<a class='lightbox img-border' href='";
            echo $item['img'] . "'>";
            echo "<img src='" . $item['img'] . "'";
            echo "class='img-fluid img-thumbnail img-border'";
            echo "alt='$galleryTitle gallery image'>";
            echo "</a>";
            echo "<p>"; 
            echo $item['num'];
            echo "</p>";
            echo "</div>";
          } ?>
                </div>

            </div>
        </div>
    </div>

    <?php include("inc/about.php"); ?>

    <?php include("inc/footer.php"); ?>
