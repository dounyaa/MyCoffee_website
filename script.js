var products = document.getElementsByClassName("product");
for(var i = 0; i < products.length; i++)
{
    products[i].onmouseover = function(event) {
        event.currentTarget.children[0].children[1].style = "display: block;"
    };

    products[i].onmouseout = function(event) {
        event.currentTarget.children[0].children[1].style = "display: none;"
    };
}

var view_product_list = document.getElementsByClassName("view_product");
for(var i = 0; i < view_product_list.length; i++)
{
    view_product_list[i].children[0].onclick = function () {
        document.location = "product_page.php";
    }
}