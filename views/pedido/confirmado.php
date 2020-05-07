<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>

    <h1>Your order has been confirmed.</h1>
    <p>Your order has been saved successfully, once you make the bank transfer to the account 68451321684621ADD, it will be processed and sent.</p>

    <br>

    <?php if (isset($pedido)) : ?>
        <h3>Order data</h3>
        Order Number: <?= $pedido->id ?> <br>
        Total to Pay: $<?= $pedido->coste ?> <br>
        <br>
        Products:


        <table>
        <tr>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>PRECIO</th>
            <th>UNITS</th>
        </tr>
            <?php while ($producto = $productos->fetch_object()) : ?>
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
                        <?= $producto->unidades ?>
                    </td>

                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete') : ?>
    <h1>Your order could not be processed.</h1>
<?php endif; ?>