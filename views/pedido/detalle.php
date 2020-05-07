<h1>Order Details</h1>

<?php if (isset($pedido)) : ?>

        <?php if(isset($_SESSION['admin'])) : ?>
            <h3>Change order status</h3>
            <form action="<?=base_url?>pedido/estado" method="POST">

                <input type="hidden" value="<?=$pedido->id?>" name="pedido_id">

                <select name="estado">
                    <option value="confirm" <?=$pedido->estado == "confirm" ? "selected" : ""; ?>>Pending</option>
                    <option value="preparation" <?=$pedido->estado == "preparation" ? "selected" : ""; ?>>In preparation</option>
                    <option value="ready" <?=$pedido->estado == "ready" ? "selected" : ""; ?>>Ready to ship</option>
                    <option value="sended" <?=$pedido->estado == "sended" ? "selected" : ""; ?>>Sended</option>
                </select>

                <button type="submit">Change Status</button>

            </form>
            <br>
        <?php endif; ?>

        <h3>Shipping Address</h3>
        State: <?=$pedido->provincia?> <br>
        City: <?=$pedido->localidad?> <br>
        Address: <?=$pedido->direccion?> <br>

        <h3>Order data</h3>
        Status: <?=Utils::showStatus($pedido->estado)?> <br>
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