<?php include "includes/header.php"?>

    <section>
         <div class="inner">
		<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "maryam.eywazi@gmail.com";  //place your/your client's email address here
        $toName = "Mary Eyvazi"; //place your client's name here
        $website = "IT162 Contact Form";  //place NAME of your client's website

//       echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	    ?>
    </div>
         <style>
             .wrapper form{
        margin-left:18.8px;

    }
               * {padding:0; margin:0;}
		
		body {
			margin:auto; /* center in html element */
            padding:1%;
			}
		p,div {margin-bottom:0.5em;}
		
        .inner {
  margin-left: 50px;
}
</style>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside >
    
 <h3>Basic Website Design Cycle</h3>
     <ul>
         <li><a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830" target="_top">How to Extract the Facts with a Web Design Client Questionnaire</a></li>
  <li>  <a href="https://www.palmettosoft.com/ten-step-web-design-process/" target="_top">10 Simple Steps to the Web Design Process</a></li>
    <li><a href="https://www.smashingmagazine.com/2009/06/45-incredibly-useful-web-design-checklists-and-questionnaires/" target="_top">45 Incredibly Useful Web Design Checklists and Questionnaires</a></li>
         </ul>
</aside>
<!-- END RIGHT COL -->
<!-- START Footer -->
 <?php include "includes/footer.php"?>  