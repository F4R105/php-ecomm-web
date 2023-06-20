<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/script.js" defer></script>
</head>
<body>
    <nav>
        <div id="topNav">
            <div class="container">
                <a id="logo" href="index.html">
                    e-commerce
                </a>
                <div id="search">
                    <input type="text" id="search" placeholder="Search product">
                    <div>ICON</div>
                </div>
            </div>
        </div>
        <div id="bottomNav">
            <div class="container">
                <ul id="navLinks">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./php/pages/cart.php">View Cart</a></li>
                    <li><a href="./php/pages/orders.php">View Orders</a></li>
                    <li><a href="#aboutus">About us</a></li>
                    <li><a href="#contactus">Contact us</a></li>
                </ul>
                <div id="searchResults">
                    <div id="preloader">
                        <span>Searching ...</span>
                    </div>
                    <!-- Products (Search results)-->
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div id="hero">
                <h1>Welcome to e-commerce website</h1>
            </div>
            <div id="categories"><!-- Categories --></div>
            <div id="products"><!-- Products --></div>
        </div>
    </main>
    <footer>
        <div class="container">
            <span>Copyright &copy 2023 by Faraji Kajubu</span>
        </div>
    </footer>
</body>
</html>