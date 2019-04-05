
<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
    
    if ($name == "" || $email == "" || $message == "") {
        echo "Please fill in all fields. Name, email, and message.";
        exit;
    }
    
    if ($_POST["address"] != "") {
        echo "BAD ROBOT!";
        exit;
    }
    
    
        
       
    header("location:contact.php?reply=gracias");
}

include("inc/header.php"); ?>




<div class ="container lg-portrait bio-form my-4">
    
		<div class="row">	
            
		<div class="col-md-6 col-lg-7 text-div">
		<div class ="text pt-md-4">
		  <h3>A few last words and our contact form</h3>
            <p>Here, you can sum up your work and vision in a more general way.....Then, </p>
            <p>If you have any questions about the artist or the art, you can message Peter directly. Please mention the gallery and number of any item or items you may be interested in...</p> <p>Or, if you're interested in a particular style, and would like to commission a new work from Peter. </p>
            <p>Please drop in any time to check for updates in the gallery</p>
            <p>Thanks for coming by!</p>
        </div>
    
		 
            
            
		</div>
            
		<!--CONTACT FORM-->
		<div id ="contact-head-section about-link" class ="form-div col-md-6 col-lg-5 pt-3">
            
         <div class ="card text-center card-form z-depth-5">
             
		  <div class ="card-body">
              <?php if (isset($_GET["reply"]) && $_GET["reply"] == "gracias") {
                echo "<h1>Thanks for your message!</h1>";
                echo "<h1>I'll get back to you.-Peter</h1>";
            } else { ?> 
            
		  <h3>Contact Peter</h3>
		  <p>Please fill in all fields</p>
               <form action="contact.php" method="post">
                    <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control form-control-lg" id="name" name="name">
                      </div>
                     <div class="form-group">
                     <label for="email">Email</label>
                     <input type="text" class="form-control form-control-lg" id="email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control form-control-lg" id="message"></textarea>
                      </div>
                       <div class="form-group address" >
                        <label for="address">Address</label>
                      <input type="text" class="form-control form-control-lg" id="address" name="address">
                        <p>Please leave me blank.</p>
                      </div>
                  
                      <input type="submit" value="Submit" class="btn btn-outline-light btn-block">
               </form>
             <?php } ?>
		   </div>
              
	      </div>
            
		 </div>
		 <!--/contact-form-end-->
	 </div><!--/row-end-->
 </div> <!--/bio-form-end-->

<div class="tz-gallery contact-gallery">
   <div class="main-gallery">
    <div class="container mb-4">
        <div class ="row">
            <div class ='col-6 col-lg-3'>
	           <a class ="lightbox" href="img/p13.jpg"><img src ="img/p13.jpg" class="img-fluid img-thumbnail"></a>
                <p>Painting</p>
            </div>
            <div class ='col-6 col-lg-3'>
	           <a class ="lightbox" href="img/lp2.jpg"><img src ="img/lp2.jpg" class="img-fluid img-thumbnail"></a>
                <p>Light Painting</p>
            </div>
            <div class ='col-6 col-lg-3'>
                <a class ="lightbox" href="img/lbp4.jpg"><img src ="img/lbp4.jpg" class="img-fluid img-thumbnail"></a>
                <p>Light Box Painting</p>
            </div>
             <div class ='col-6 col-lg-3'>
                <a class ="lightbox" href="img/ph9.jpg"><img src ="img/ph9.jpg" class="img-fluid img-thumbnail"></a>
                <p>Photo</p>
            </div>
            
        </div>
        <p class="text-center pt-3 pb-3 mb-4 mt-3">To see more, check out the GALLERIES.........</p>
     </div>
   </div>
 </div>
<?php include("inc/footer.php"); ?>