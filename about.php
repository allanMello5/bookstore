<?php 

include 'config.php';

session_start();

$user_id= $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>about</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

     <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php  include 'header.php';?>
    <div class="heading">
        <h3>about us</h3>
        <p><a href="home.php">home</a> / about </p>
    </div>

    <section class="about">
        <div class="flex">
            <div class="image">
                <img src="assets/about-img.jpg">
            </div>
            <div class="content">
             <h3 class="">Why choose us</h3>
             <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nesciunt beatae non 
                magni deleniti ut iste quis ratione. Itaque, accusantium. Facilis quod, placeat minus 
                debitis delectus dolorum repellat sint similique.</p>
             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia ea quaerat deserunt, 
                tenetur voluptate recusandae ducimus eveniet provident asperiores iste libero vitae 
                consequuntur acupiditate saepe inventore enim ipsum! Similique, facilis.</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>
            
    </section>

    <section class="reviews">
        <h1 class="title">client's reviews </h1>
        <div class="box-container">
            <div class="box">
                <img src="assets/pic-1.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, fuga 
                   assumenda ea aliquid illum aperiam earum? Ratione velit assumenda quasi,
                   vero non sequi molestias placeat? Recusandae molestiae repudiandae numquam
                      maiores!</p>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>

                      </div>
                      <h3>john Deo</h3>
            </div>
            <div class="box">
                <img src="assets/pic-2.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, fuga 
                   assumenda ea aliquid illum aperiam earum? Ratione velit assumenda quasi,
                   vero non sequi molestias placeat? Recusandae molestiae repudiandae numquam
                      maiores!</p>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>

                      </div>
                      <h3>Laura Schuman</h3>
            </div>
            <div class="box">
                <img src="assets/pic-3.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, fuga 
                   assumenda ea aliquid illum aperiam earum? Ratione velit assumenda quasi,
                   vero non sequi molestias placeat? Recusandae molestiae repudiandae numquam
                      maiores!</p>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>

                      </div>
                      <h3>Mark Kaiser</h3>
            </div>
            <div class="box">
                <img src="assets/pic-4.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, fuga 
                   assumenda ea aliquid illum aperiam earum? Ratione velit assumenda quasi,
                   vero non sequi molestias placeat? Recusandae molestiae repudiandae numquam
                      maiores!</p>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>

                      </div>
                      <h3>Joahnna Schuman</h3>
            </div>
            <div class="box">
                <img src="assets/pic-5.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, fuga 
                   assumenda ea aliquid illum aperiam earum? Ratione velit assumenda quasi,
                   vero non sequi molestias placeat? Recusandae molestiae repudiandae numquam
                      maiores!</p>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>

                      </div>
                      <h3>Geralt Brighter</h3>
            </div>
            <div class="box">
                <img src="assets/pic-6.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, fuga 
                   assumenda ea aliquid illum aperiam earum? Ratione velit assumenda quasi,
                   vero non sequi molestias placeat? Recusandae molestiae repudiandae numquam
                      maiores!</p>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>

                      </div>
                      <h3>Ning Freeman</h3>
            </div>
        </div>


    </section>
    <section class="authors">
        <h1 class="title">greate authors</h1>
        <div class="box-container">

            <div class="box">
                <img src="assets/author-1.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>John Doe</h3>
            </div>
            <div class="box">
                <img src="assets/author-2.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Lucia Cole</h3>
            </div>
            <div class="box">
                <img src="assets/author-3.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Max Robert</h3>
            </div>
            <div class="box">
                <img src="assets/author-4.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Sarah Taylor</h3>
            </div>
            <div class="box">
                <img src="assets/author-5.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Donavan Trueman</h3>
            </div>
            <div class="box">
                <img src="assets/author-6.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Lorrane Watson</h3>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
    <!--js file-->
    <script src="js/script.js"></script>    
</body>


</html>