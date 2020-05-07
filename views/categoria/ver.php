<?php if (isset($categoria)) : ?>

    <h1><?= $categoria->nombre ?> Category</h1>

    <?php if ($productos->num_rows == 0) : ?>

        <p>There are no products to show.</p>

    <?php else : ?>

        <?php while ($product = $productos->fetch_object()) : ?>

            <div class="product">

                <a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">

                    <?php if ($product->imagen != NULL) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" alt="">
                    <?php else : ?>
                        <img src="<?=base_url?>assets/img/camiseta.png" alt="">
                    <?php endif; ?>
                    <h2><?= $product->nombre ?></h2>

                </a>

                <p>$ <?= $product->precio ?></p>
                <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button button-buy">Buy</a>

            </div>

        <?php endwhile; ?>

    <?php endif; ?>

<?php else : ?>

    <h1>Category DOES NOT EXIST.</h1>

<?php endif; ?>