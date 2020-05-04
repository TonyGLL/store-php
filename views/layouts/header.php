<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt Shop</title>

    <link rel="shortcut icon" href="<?=base_url?>assets/img/camiseta.png" type="image/x-icon">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/b60c38e26d.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Permanent+Marker&display=swap" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
</head>

<body>

    <div class="container">

        <!-- HEADER -->
        <header id="header">
            <div id="logo">
                <img src="<?=base_url?>assets/img/camiseta.png" alt="Logo T-Shirt">
                <a href="index.php">
                    T-shirt shop
                </a>
            </div>
        </header>

        <!-- MENU -->
        <?php $categorias = Utils::showCategories(); ?>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <?php while($cat = $categorias->fetch_object()) : ?>
                        <li>
                            <a href=""><?=$cat->nombre?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </nav>

        <div id="content">