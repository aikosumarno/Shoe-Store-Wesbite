<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#stores">address</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>



    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/jordans1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$100/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/jordans2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$100/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/jordans3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$200/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/jordans4.png" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$200/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
    <div class="content">
        <h3>Shopping Time!</h3>
        <p>The home of locally made Indonesian shoes. A collection of 1000+ designs with a large range of sizes.</p>
        <a href="login_form.php" class="btn">Login Now</a> <!-- redirects to login page  -->
    </div>


    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/aboutus.png" alt="">
        </div>

        <div class="content">
            <h3>why shop from us?</h3>
            <p>Support local brands. </p>
            <p>only selling the best qualities. </p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <h3>football</h3>
            <a href="#" class="btn">more</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <h3>running</h3>
            <a href="#" class="btn">more</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <h3>athleisure</h3>
            <a href="#" class="btn">more</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <h3>basketball</h3>
            <a href="#" class="btn">more</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <h3>kids</h3>
            <a href="#" class="btn">more</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <h3>special offer</h3>
            <a href="#" class="btn">more</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/ultraboost1.png" alt="">
            </div>
            <div class="content">
                <h3>ultra boost</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$200 <span>$500</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/ultraboost2.png" alt="">
            </div>
            <div class="content">
                <h3>ultra boost</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$200<span>$250</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/ultraboost3.png" alt="">
            </div>
            <div class="content">
                <h3>ultra boost</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$250 <span>$300</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quotation.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/Silhouette1.png" class="user" alt="">
            <h3>john doe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quotation.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/Silhouette2.png" class="user" alt="">
            <h3>jane doe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quotation.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/Silhouette1.png" class="user" alt="">
            <h3>john doe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="images/map.png" href= "https://goo.gl/maps/tmpW85BnT2tugBX86" allowfullscreen="" loading="lazy"></iframe>

        <form action = "contact.php" method="post">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name = "name" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name = "email" placeholder="email" value = "">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="text" name = "subject" placeholder="subject" id="">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="text" name = "message" placeholder="message" id="">
            </div>
            <button type = "submit" class = "btn btn-success" name = "send">Contact Now</button>
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- stores section starts  -->

<section class="stores" id="stores">

    <h1 class="heading"> our <span>stores</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/store1.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Store 1</a>
                <span>north jakarta</span>
                <p>north jakarta 1234</p>
                <a href="#" class="btn">directions</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/store2.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">store 2</a>
                <span>south jakarta</span>
                <p>south jakarta 1234</p>
                <a href="#" class="btn">directions</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/store3.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">store 3</a>
                <span>west jakarta</span>
                <p>west jakarta 1234</p>
                <a href="#" class="btn">directions</a>
            </div>
        </div>

    </div>

</section>

<!-- stores section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#stores">stores</a>
    </div>

    <div class="credit">shoe academy <span>based in jakarta</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="/Users/aikosumarno/Desktop/CS IA/Program/Website 2/js/script.js"></script>

</body>
</html>