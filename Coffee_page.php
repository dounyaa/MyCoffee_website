<?php
    $products = array();
    $products[0] = array("title" => "Coffee Lavasa Green", "price" => "39.21 $", "image" => "images/cafe4.jpg");
    $products[1] = array("title" => "Coffee Lavasa Aroma Top", "price" => "30.99 $", "image" => "images/cafe5.jpg");
    $products[2] = array("title" => "Coffee Lavasa Aroma Top", "price" => "19.21 $", "image" => "images/cafe6.jpg");
    $products[3] = array("title" => "Coffee Royal", "price" => "19.21 $", "image" => "images/cafe1.jpg");
    $products[4] = array("title" => "Coffee L'OR Classique", "price" => "25.21 $", "image" => "images/cafe2.jpg");
    $products[5] = array("title" => "Coffee Vabre Selection", "price" => "9.21 $", "image" => "images/cafe3.jpg");
    $products[6] = array("title" => "Coffee Lavasa Aroma Top", "price" => "29.21 $", "image" => "images/cafe7.jpg");
    $products[7] = array("title" => "Coffee Carazao", "price" => "19.29 $", "image" => "images/cafe8.jpg");
    $products[8] = array("title" => "Coffee Diamond", "price" => "15.29 $", "image" => "images/cafe9.jpg");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Coffee Products</title>
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
                    <li><a href="index.php#about_us"> My Story</a></li>
                    <li><a href="#categories"> My Products</a></li>
                    <li><a href="#footer">Contact Me</a></li>
                </ul>
            </div>
            <div class = "search">
                <input type="search" placeholder="Rechercher">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </header>

    <section class = "Content">
        <div class="filtres">
            <div class="categories">
                <h3>Categorie</h3>
                <a href="Coffee_page.php">coffee</a>
                <a href="Machines_page.php">machines</a>
                <a href="Accesoires_page.php">accesoires</a>
            </div>
            <div class="select">
                <label for="select"><h3>Sorted by</h3></label>
                <select id="sort-select">
                    <option></option>
                    <option>Oldest First</option>
                    <option>Newest first</option>
                    <option>Price : Low to High</option>
                    <option>Price : High to Low</option>
                </select>
            </div>
            <div class="filtre">
                <h3>Price</h3>
                <input name="filters" type="number" placeholder="Min">
                <input name="filters" type="number" placeholder="max">
                <button type="submit">Apply</button>
            </div>
        </div>
        <div class="products">   
            <?php
               for($i=0; $i<9; $i++) 
               {
                  
                    echo "<div class='product'>
                        <div class='product_container'>
                            <div class='product_details'>
                                <img src='" .  $products[$i]["image"] . "' alt='coffee'>
                                <p>" .  $products[$i]["title"] . "</p>
                                <h3>" .  $products[$i]["price"] . "</h3>
                            </div>
                            <div class='view_product'>
                                <button>View Product</button>
                            </div>
                        </div>
                    </div>";
               }
            ?>
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

    <script src="script.js"></script>
</body>
</html>