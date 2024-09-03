
<!DOCTYPE html>
<html>
    <head>
    <title>Thank You!</title>
    <?php
      include "head.php";
    ?>
     <style>
         .thank-msg {
             height: 80vh;
             display: flex;
             justify-content: center;
             align-items: center;
             flex-direction: column;
             
         }
         .thank-msg p {
             font-size: 3rem;
             line-height: 1.9;
             color: black;
             text-align: center;
         }
         
         .thank-brochure {
             margin-top: 2rem;
             
         }
         .thank-brochure a {
             color: black;
             padding: 0.4rem 1rem;
             font-size: 1.2rem;
         }
         .thank-brochure ul {
             display: flex;
             gap: 3rem;
             list-style: none;
         }
         
         @media (max-width: 600px) {
             .thank-msg p {
                 font-size: 1.4rem;
             }
             .thank-brochure ul {
                 gap: 1rem;
                 flex-direction: column;
             }
             .thank-brochure a {
                 font-size: 0.9rem;
             }
         }
         
     </style>
        
    </head>
    <!--header starts here -->
    
 <body>
    <!-- header starts here  -->
    <?php
      include "header.php";
    ?>
    <!--header ends here -->
     <section class="thank-msg">
        <p>Thanks for reaching out to us!</p>
         <p>We will contact you shortly!</p>
         <div class="thank-brochure">
                <ul>
                    <!--<li><a href="">DOWNLOAD BROCHURE</a> </li>-->
                    <li><a href="./">GO TO HOMEPAGE</a></li>
                </ul>
             
          
             
         </div>
    </section>
    
    <!--footer starts here -->
    
    <?php
      include "footer.php";
    ?>
    
    <!--footer ends here -->
</body>
</html>