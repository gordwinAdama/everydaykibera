<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <!-- Meta -->
      <title>Local Untold Stories - Health</title>
      <meta charset="UTF-8">
      <meta name="description" content="Free HTML template">
      <meta name="keywords" content="HTML, template, free">
      <meta name="author" content="Nicola Tolin">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Styles -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="vendor/animate/animate.css" rel="stylesheet" type="text/css"/>
      <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/style.css" rel="stylesheet" type="text/css"/>
      <style type="text/css">
      </style>
   </head>
   <body>
   

          <?php include ('../public/includes/header.php'); ?>


         <div class="container studio">
         <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 wow fadeInDown">
               
               <h1>Better Healthcare in Kibera.</h1></br>
               <h2>Launch of Level Three Hospital in Kibera</h2>


               <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a><b>socials</b>

               <p>President Uhuru Kenyatta officially inagurated the opening of the Nairobi Metropolitan Services (NMS) Kibra Level 3 Hospital in Kibera, Nairobi County.

The Head of State was accompanied by former Prime Minister Raila Odinga and NMS Director-General, Lt. Gen. Mohamed Badi. Uhuru launched two hospitals, both of them Level 3. He said the new facilities will help thousands and ease congestion at Mbagathi Hospital.  
               </p>
           
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xl-5 col-md-7 col-sm-12">
               <img class="img-fluid" src="img/raila.jpg" alt="Photo">
               <p>Kenya's former Prime Minister and opposition leader Raila Odinga (L) delivers after he attended the inauguration of Kibra Level 3 hospital in Kibera slum in Nairobi on September 29, 2021. (Photo by Gordwin ODHIAMBO / AFP) (Photo by GORDWIN ODHIAMBO/AFP via Getty Images)</p>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-5 col-md-7 offset-md-4 col-sm-12 pt-5">
               <img class="img-fluid" src="img/uhuru.jpg" alt="Photo">
               <p>Kenya's former Prime Minister and opposition leader Raila Odinga (L) delivers after he attended the inauguration of Kibra Level 3 hospital in Kibera slum in Nairobi on September 29, 2021. (Photo by Gordwin ODHIAMBO / AFP) (Photo by GORDWIN ODHIAMBO/AFP via Getty Images)</p>
            </div>
         </div>
      </div>
      <div class="container studio">
         <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 wow fadeInDown">
               <p>The Nairobi Metropolitan Service (NMS) last year reiterated its commitment to set up health facilities in Nairobi’s informal settlements. In July, NMS Director-General Mohammed Badi promised that 24 health facilities would be built in Korogocho, Kibra, Mathare and Mukuru to fight the Covid-19 pandemic.

During the 57th Jamhuri Day celebrations, President Uhuru affirmed that the 24 level-2 and 3 hospitals with a 280-bed capacity will be ready by February 2021.

Globally, informal settlement areas lack the most basic facilities; clean water, toilets, good roads, proper housing, electricity, and schools, among others. 
               </p>
               <p>Kibera over the past has experienced development challenges due to being on the opposition side of the government. Most health facilities are Non-governamental initiated by mostly foreign investors.</p>
            </div>
         </div>
      </div>
      <!-- Works -->
      <div class="container-fluid works wow fadeInDown">
         <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8 col-sm-12">
               <p class="text-center">
                  Now a local story
               </p>
            </div>
         </div>
      </div>
        <div class="container-fluid works wow fadeInDown">
         <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8 col-sm-12">
               <p class="text-center">

                  <p>Share this story </p>      
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <h1>Explore More Stories</h1>
                 
               </p>
            </div>
         </div>
      </div>
      <!-- End Works -->
      <!-- Swiper -->
     <?php include ('otherstories.php') ; ?>
      <!-- End Contact Form -->
      <?php include ('../public/includes/header.php'); ?>
      <!-- End Footer -->
      <!-- Javascript -->
      <script src="vendor/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="vendor/wow/wow.js"></script>
      <script src="js/global.min.js"></script>
      <script src="js/script.js"></script>
      <script>
         new WOW().init();
      </script>
      <!-- Swiper JS -->
      <script src="vendor/swiper/js/swiper.min.js"></script>
      <script>
         var swiper = new Swiper('.swiper-container', {
           loop: true,
           loopFillGroupWithBlank: true,
           pagination: {
             el: '.swiper-pagination',
             clickable: true,
           },
           breakpoints: {
         400: {
           slidesPerView: 1,
           slidesPerGroup: 1,
           spaceBetween: 30,
         },
         768: {
           slidesPerView: 2,
           slidesPerGroup: 1,
           spaceBetween: 30,
         },
         1200: {
          slidesPerView: 3,
          slidesPerGroup: 3,
          spaceBetween: 30,
         },
         },
           keyboard: {
               enabled: true,
               onlyInViewport: false,
            },
           navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
           },
         });
      </script>
      <!-- End Javascript -->
   </body>
</html>