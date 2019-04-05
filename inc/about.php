<?php include("inc/data.php"); ?>


<div class ="container bio-form">
    
		<div class="row">	
            
		<div class="col-md-6 col-lg-7">
		<div class ="text">
		  <h1 class ="display-4 text-center"><?php echo $galleryTitle; ?></h1>
           <?php if ($galleryTitle == "Paintings") {
               $description = $paintDescription;
               $sampleImg = "img/p.jpg";
          } else if ($galleryTitle == "Light paintings") {
               $description = $lPaintDescription;
               $sampleImg = "img/lp30.jpg";
          } else if ($galleryTitle == "Light box paintings") {
               $description = $lbPaintDescription;
                $sampleImg = "img/lbp3.jpg";
          } else if ($galleryTitle == "Photographs") {
               $description = $photoDescription;
               $sampleImg = "img/ph9.jpg";
          }
             echo "<p>" . $description . "</p>"; ?>
        </div>
		</div>
		
		<!--CONTACT FORM-->
		<div id ="contact-head-section about-link" class ="form-div tz-gallery col-md-6 col-lg-5">
		    <a class ="lightbox " href="<?php echo $sampleImg; ?>"><img src ="<?php echo $sampleImg; ?>" class=" lightbox img-fluid img-thumbnail"></a>
        </div>
		 <!--/contact-form-end-->
	 </div><!--/row-end-->
 </div> <!--/bio-form-end-->
<div class="buttonContainer container text-center">   
<button id="modalBtn" class="button">Contact Peter</button>
</div>      
        <div id="simpleModal" class="modal">
            <div class="modal-content">
                <span class="closeBtn">&times;</span>
                <div id ="contact-head-section" class ="form-div">
                <div class ="card text-center card-form z-depth-5">
                 <div class ="card-body">
                 <h3>Contact Peter</h3>
                 <p>Please fill in all fields</p>
               <form method="post" action="http://formspree.io/peterhoratio@yahoo.com">
                <div id="ajaxResponse" class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name">
                  </div>
            
                <div class="form-group">
                    <label for="email">Email</label>
                 <input type="email" class="form-control form-control-lg" id="email" name="email">
                 </div>
                 <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control form-control-lg" id="message"></textarea>
                  </div>
                  <div class="form-group" style="display:none">
                    <label for="address">Address</label>
                    <input type="text" name="_gotcha" class="form-control form-control-lg" id="address">
                    <p>Please leave this field blank</p>
                  </div>
                <input type="submit" value="Submit" class="btn btn-outline-light btn-block">
               </form>
               </div>
              </div>
             </div>
            </div>
            
            
        </div>

