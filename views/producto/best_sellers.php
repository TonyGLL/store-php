<h1>Some of our Products</h1>


<?php while($product = $productos->fetch_object()) : ?>
    <div class="product">

        <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">

            <?php if($product->imagen != NULL) : ?>
                <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="">
            <?php else: ?>
                <img src="assets/img/camiseta.png" alt="">
            <?php endif; ?>
            <h2><?=$product->nombre?></h2>

        </a>

        <p>$ <?=$product->precio?></p>
        <a href="" class="button button-buy">Buy</a>
    </div>
<?php endwhile; ?>