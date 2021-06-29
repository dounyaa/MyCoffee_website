<?php
    $products = array();
    $products[0] = array("title" => "Mug Coffee Vivona ", "price" => "39.21 $", "image" => "images/acc1.jpg");
    $products[1] = array("title" => "Mug Coffee Vivona", "price" => "30.99 $", "image" => "images/acc2.jpg");
    $products[2] = array("title" => "Organize Coffee", "price" => "19.21 $", "image" => "images/acc3.jpg");
    $products[3] = array("title" => "Cup Coffee White 35cl", "price" => "19.21 $", "image" => "images/acc4.jpg");
    $products[4] = array("title" => "Cup Coffee Blue 35cl", "price" => "25.21 $", "image" => "images/acc5.jpg");
    $products[5] = array("title" => "Cup Coffee Black 40cl", "price" => "9.21 $", "image" => "images/acc6.jpg");
    $products[6] = array("title" => "Cup Coffee gris 40cl", "price" => "29.21 $", "image" => "images/acc7.jpg");
    $products[7] = array("title" => "Mug Coffee Webstore", "price" => "19.29 $", "image" => "images/acc8.jpg");
    $products[8] = array("title" => "Mug Coffee L'OR", "price" => "15.29 $", "image" => "images/acc9.jpg");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Accesoires Products</title>
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
                    <li><a href="/test.php#about_us"> My Story</a></li>
                    <li><a href="#categories"> My Products</a></li>
                    <li><a href="">Contact Me</a></li>
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