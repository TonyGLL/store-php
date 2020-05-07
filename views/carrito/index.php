<h1>Shopping Cart</h1>

<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) : ?>
    <table>

        <tr>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>PRECIO</th>
            <th>UNITS</th>
            <th class="buttons">DELETE</th>
        </tr>

        <?php

        foreach ($carrito as $indice => $elemento) :
            $producto = $elemento['producto'];

        ?>

            <tr>
                <td>
                    <?php if ($producto->imagen != NULL) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" alt="">
                    <?php else : ?>
                        <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" alt="">
                    <?php endif; ?>
                </td>

                <td>
                    <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                </td>

                <td>
                    <?= $producto->precio ?>
                </td>

                <td>
                    <?= $elemento['unidades'] ?>
                    <div class="updown-unidades">
                        <a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button"> + </a>
                        <a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button"> - </a>
                    </div>
                </td>

                <td>
                    <a href="<?= base_url ?>carrito/delete&index=<?=$indice?>" class="button button-option button-delete-category">Remove</a>   
                </td>

            </tr>

        <?php endforeach; ?>

    </table>
    <br>

    <div class="delete-carrito">
        <a href="<?= base_url ?>carrito/delete_all" class="button button-pedido button-delete-order">Empty Cart</a>
    </div>

    <div class="total-carrito">
        <?php $stats = Utils::statsCarrito(); ?>
        <h3>Total Price: $<?= $stats['total'] ?></h3>

        <a href="<?= base_url ?>pedido/hacer" class="button button-pedido">Continue <i class="fas fa-arrow-circle-right"></i></a>
    </div>
<?php else: ?>

    <p>The cart is empty, add a product.</p>

<?php endif; ?>