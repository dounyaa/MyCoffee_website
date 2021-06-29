<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Product</title>
</head>
<body>
    <header>
        <div class="nav_bar">
            <div class="logo">
                <h1>
                    <a href="index.php">My Coffee</a>
                </h1>
            </div>
            <div class="menu_bar">
                <ul>
                    <li><a href="index.html#about_us"> My Story</a></li>
                    <li><a href="#categories"> My Products</a></li>
                    <li><a href="footer">Contact Me</a></li>
                </ul>
            </div>
            <div class = "search">
                <input type="search" placeholder="Rechercher">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </header>

    <section class = "product_Content">
        <div class="product_image">
           <img src="images/cafe1.jpg" alt="coffee">     
        </div>
        <div class="product_details">
            <div class="title">
                <p>Coffee Royal</p>
            </div>
            <div class="price">
                <h3>19.21 $</h3>
            </div>
            <div class="size_title">
                <p>Size : </p>
            </div>
            <div class="size">
                <input type="radio" id="small" name="coffee" value="small">
                <label for="small">Small 250g </label>
                <input type="radio" id="medium" name="coffee" value="medium">
                <label for="medium">Medium 500g </label>
                <input type="radio" id="large" name="coffee" value="large">
                <label for="large">Large 1kg </label>
            </div>
            <div class="description_title">
                <p>Description : </p>
            </div>
            <div class="description">
                <span>Café Voisin, roaster in Lyon since 1897 exclusively at Coffee-Webstore!
                    Pure arabicas from the best origins, Brazil, Colombia, Costa Rica, Ethiopia,
                    Papua… the coffees are selected for their particular character that a suitable
                    roasting will sublimate. With a slow roasting method, depending on the origin 
                    of the coffee, Voisin is the last great traditional roaster in Lyon ...</span>
            </div>
            <div class="button">
                <button>Add To Bag</button>
            </div>
        </div>
    </section>

    <section class="commentaires">
        <h4>Customer Reviews : </h4>
        <div class="commentaire">
            <div class="commentaire_info">
                <h3>Luci</h3>
                <p>15/06/2021</p>
            </div>
            <div class="commentaire_details">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p>Best Coffee Beans In The World</p>
            </div>
        </div>
        <div class="commentaire">
            <div class="commentaire_info">
                <h3>Kevin</h3>
                <p>15/06/2021</p>
            </div>
            <div class="commentaire_details">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p>I am in love with this coffee</p>
            </div>
        </div>
        <div class="commentaire">
            <div class="commentaire_info">
                <h3>Alber</h3>
                <p>15/06/2021</p>
            </div>
            <div class="commentaire_details">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p>it's a great coffe that i never test like it</p>
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