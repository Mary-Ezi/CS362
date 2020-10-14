<?php include 'includes/header.php';?>
       

 
  
  <style type="text/css">
         
         /* start global page styles */
        * {padding:0; margin:0;}
		html {background-color:#ccc;}
		body {
			margin:auto; /* center in html element */
            padding:1%;
			}
		p,div {margin-bottom:0.5em;}
		
        .inner {
  margin-left: 50px;
}
         
        /* end global page styles */
		
         
		/* start reCAPTCHA styles */
		
		/* writes to small text above reCAPTCHA upon failure */
		.dateFeedback{
			font-style:italic;
			font-size:70%;
			font-weight:bold;
			color:#f00;
		}
        input:required {
              border: 1px solid red;
        }

         input:optional, textarea:optional {
             background-color:#f1f1f1;
             border:1px solid #ccc;
        }

        input[type="submit"], input[type="button"] {
          background-color: #fff;
          border-radius: 4px;
          border: solid 1px #ccc;
          padding: 0.3em 0.5em;
        }

        fieldset {
          border: 1px solid #ccc;
          max-width: 350px;
        }

        legend {
          margin-left: 0.5em;
          padding: 0.2em 0.5em;
          border-left: 1px solid #ccc;
          border-right: 1px solid #ccc;
        }
        
        /* end reCAPTCHA styles */
    </style>

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
        $toName = "Mary"; //place your client's name here
        $website = "IT162 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        </div>


            
 <?php include 'includes/footer.php';?>         

         
