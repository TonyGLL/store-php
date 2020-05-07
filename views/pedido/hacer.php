
<?php if(isset($_SESSION['identity'])) : ?>
    <h1>Make an Order</h1>
    <p>
        <a href="<?=base_url?>carrito/index"><i class="fas fa-arrow-circle-left"></i> See products and price</a>
    </p>

    <br>

    <h3>Shipping address</h3>
    <form action="<?=base_url?>pedido/add" method="POST">
        
        <label for="provincia">State</label>
        <input type="text" name="provincia" required>

        <label for="localidad">City</label>
        <input type="text" name="localidad" required>

        <label for="direccion">Address</label>
        <input type="text" name="direccion" required>
        
        <button type="submit">To Confirm Order</button>

    </form>

<?php else: ?>
    <h1>You need to be identified.</h1>
    <p>You need to be logged in to the web to place an order.</p>
<?php endif; ?>