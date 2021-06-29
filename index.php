<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>My Coffee</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="nav_bar">
                <div class="logo">
                    <h1>
                        <a href="index.php">My Coffee</a>
                    </h1>
                </div>
                <div class="menu_bar">
                    <ul>
                        <li><a href="#about_us"> My Story</a></li>
                        <li><a href="#categories"> My Products</a></li>
                        <li><a href="#footer">Contact Me</a></li>
                    </ul>
                </div>
            </div>

            <div class="intro">
                <h1>Feel the cup <br> Emotions</h1>
                <p>with our special coffee</p>
                <button onclick="document.location='Coffee_page.php'">Order Now</button>
            </div>
        </div>
    </header>   
    
    <section class="categories" id="categories">
        </div>
        <div class="categorie">
                <div class="categorie_item">
                    <img src="images/shop_coffee.PNG" alt="coffee">
                    <p class="categorie_details">COFFEE</p>
                    <button onclick="document.location='Coffee_page.php'">Shop Now</button>
                </div>
                <div class="categorie_item">
                    <img src="images/shop_materials.PNG" alt="materiales">
                    <p class="categorie_details">MACHINES</p>
                    <button onclick="document.location='Machines_page.php'">Shop Now</button>
                </div>
                <div class="categorie_item">
                    <img src="images/shop_marchandis.PNG" alt="marchandise">
                    <p class="categorie_details">ACCESSOIRES</p>
                    <button onclick="document.location='Accesoires_page.php'">Shop Now</button>
                </div>
        </div>
    </section>
    <section class="about_us" id="about_us">
        <div class="about_coffee">
            <div class="container_about">
                <div class="information">
                    <div class="section-title">
                        <h2>About Us</h2> 
                    </div>
                    <div class="section_details">
                        <p>Back in the day, when our up-and-coming coffee shop was just making first rounds among numerous coffee junkies in the local area, a concept of our operations has been developed. Eventually, based on customer reviews that we have, one can say that we’ve succeeded in that, thanks to our range of coffee beverages and flavors, fresh & tasty pastry and lunches, as well as our affordable prices for an awesome quality!</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="services" id="services">
        <div class="service-item">
            <i class="fas fa-store delivery-icon"></i>
            <p class="service-details">Support 24/24</p>
        </div>
        <div class="service-item">
            <i class="fas fa-people-carry delivery-icon"></i>
            <p class="service-details">Click And Collect</p>
        </div>
        <div class="service-item">
            <i class="fas fa-truck delivery-icon"></i>
            <p class="service-details">Free Delivery</p>
        </div>
    </section>

 

    <footer id="footer">
        <div class="contacts">
            <div class="desc">
                <h3>
                    <i class="fas fa-phone"></i> Phone
                </h3>
                <p>+(33) 6 213 549 27</p> 
            </div>
            <div class="desc">
                <h3>
                    <i class="fas fa-envelope-open-text"></i> Email
                </h3>
                <p>mycoffe.contact@gmail.com</p> 
                
            </div>
            <div class="desc">
                <h3>
                    <i class="fas fa-map-marker-alt"></i> Address
                </h3>
                <p>543 TN, doula street <br> NY, New York</p> 
            </div>
        </div>
        <div class="socialMedia">

            <a href="#footer">
                <i class="fab fa-facebook-square"></i>
            </a>

            <a href="#footer">
                <i class="fab fa-twitter-square"></i>
            </a>

            <a href="#footer">
                <i class="fab fa-youtube-square"></i>
            </a>

        </div>
        <div class="map">
            <img src="images/f82762a0b0e6fec62a606cf77e4802b1.jpg" alt="map">
        </div>
    </footer>
</body>
</html>