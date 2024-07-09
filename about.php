<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>At our real estate agency, we stand out as the optimal choice for all your property needs. With a proven track record of excellence and a commitment to customer satisfaction, we provide a comprehensive range of services to ensure a smooth and successful real estate experience. Our dedicated team of professionals combines industry expertise with personalized attention, guiding you through every step of the process. Whether you're buying, selling, or renting, our extensive market knowledge and attention to detail ensure that your goals are met efficiently and effectively. Choose us for unparalleled service, reliability, and exceptional results in the dynamic world of real estate.</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>


<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>Discover your perfect property with our user-friendly search feature, extensive database, and advanced filters. Find the ideal home or investment opportunity effortlessly.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>Our experienced agents provide personalized guidance and support throughout your real estate journey. Trust our local expertise for expert advice and smooth transactions.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>From moving into your dream home to managing investment, we offer comprehensive services including design recommendations. Enjoy your property hassle-free.</p>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.jpeg" alt="">
            <div>
               <h3>Madusha Gunawardhana</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>Absolutely thrilled with my new home! Thanks to the dedicated team for making the search a breeze.Absolutely Superb.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpeg" alt="">
            <div>
               <h3>Janarthanan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>Impressed by the professionalism and expertise of the agents. They went above and beyond to find me the perfect property.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.jpeg" alt="">
            <div>
               <h3>R.Sankavi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Highly recommended! The team provided exceptional service and guided me through a seamless buying process.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Dimagi Jayawardhana</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Smooth and efficient property management. I can finally relax knowing my investment is in good hands.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpeg" alt="">
            <div>
               <h3>Mathumila</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>The agents' knowledge and insights were invaluable in helping me make the right decision. Thank you for your guidance!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>Sansa Stark</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Great communication and outstanding customer service. I could be happier with the support I received throughout the entire process.</p>
      </div>

   </div>

</section>



<?php include 'components/footer.php'; ?>


<script src="js files/script.js"></script>

</body>
</html>