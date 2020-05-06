<?php if (isset($product)) : ?>

    <h1><?= $product->nombre ?></h1>

    <div class="detail-product">

        <div class="image">
            <?php if ($product->imagen != NULL) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" alt="">
            <?php else : ?>
                <img src="<?=base_url?>assets/img/camiseta.png" alt="">
            <?php endif; ?>
        </div>

        <div class="data">
            <p class="description"><?= $product->descripcion ?></p>
            <p class="price">$ <?= $product->precio ?></p>
            <a href="" class="button button-buy button-buy-product">Buy</a>
        </div>
            
    </div>

<?php else : ?>

    <h1>Product DOES NOT EXIST.</h1>

<?php endif; ?>