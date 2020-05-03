<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt Shop</title>

    <link rel="shortcut icon" href="assets/img/camiseta.png" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Permanent+Marker&display=swap" rel="stylesheet"> -->

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <div class="container">

        <!-- HEADER -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Logo T-Shirt">
                <a href="index.php">
                    T-shirt shop
                </a>
            </div>
        </header>
    
        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="">Home</a>
                 </li>
                <li>
                    <a href="">Categoria 1</a>
                </li>
                <li>
                    <a href="">Categoria 2</a>
                </li>
                <li>
                    <a href="">Categoria 3</a>
                </li>
                <li>
                    <a href="">Categoria 4</a>
                </li>
                <li>
                    <a href="">Categoria 5</a>
                </li>
            </ul>
        </nav>
    
        <div id="content">
    
            <!-- SIDEBAR -->
            <aside id="sidebar">
    
                <!-- LOGIN -->

                <h3>Login</h3>

                <div id="login" class="block_aside">
                    <form action="" method="POST">
    
                        <label for="email">Email</label>
                        <input type="email" name="email">
    
                        <label for="password">Password</label>
                        <input type="password" name="password">
    
                        <button type="submit">Sign in</button>
                    </form>
    
                    <ul>
                        <li>
                            <a href="">My Orders</a>
                        </li>
                        <li>
                            <a href="">Manage Orders</a>
                        </li>
                        <li>
                            <a href="">Manage Categories</a>
                        </li>
                    </ul>
                </div>
    
            </aside>
    
            <!-- MAIN CONTENT -->
            <div id="central">

                <h1>Best Sellers</h1>
    
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Wide Blue T-shirt</h2>
                    <p>30 euros</p>
                    <a href="" class="button">Buy</a>
                </div>
                
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Wide Blue T-shirt</h2>
                    <p>30 euros</p>
                    <a href="" class="button">Buy</a>
                </div>
    
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Wide Blue T-shirt</h2>
                    <p>30 euros</p>
                    <a href="" class="button">Buy</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Wide Blue T-shirt</h2>
                    <p>30 euros</p>
                    <a href="" class="button">Buy</a>
                </div>
                
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Wide Blue T-shirt</h2>
                    <p>30 euros</p>
                    <a href="" class="button">Buy</a>
                </div>
    
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Wide Blue T-shirt</h2>
                    <p>30 euros</p>
                    <a href="" class="button">Buy</a>
                </div>
            </div>
        </div>
    
        <!-- FOOTER -->
        <footer id="footer">
            <p>Developed by techBlog.cu &copy; <?=date("Y")?></p>
        </footer>
    </div>
</body>
</html>