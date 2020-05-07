<!-- SIDEBAR -->
<aside id="sidebar">

    <div id="carrito" class="block_aside">
        <h3>My Cart</h3>

        <ul>

            <?php $stats = Utils::statsCarrito(); ?>
            <li>
                <a href="<?=base_url?>carrito/index"><i class="fas fa-arrow-circle-right"></i> Products (<?=$stats['count']?>)</a>
            </li>

            <li>
                <a href="<?=base_url?>carrito/index"><i class="fas fa-arrow-circle-right"></i> Total: $<?=$stats['total']?></a>
            </li>

            <li>
                <a href="<?=base_url?>carrito/index"><i class="fas fa-arrow-circle-right"></i> View Cart</a>
            </li>
        </ul>
    </div>


    <!-- LOGIN -->
    <div id="login" class="block_aside">

        <?php if(!isset($_SESSION['identity'])) : ?>

            <h3>Login</h3>

            <form action="<?=base_url?>usuario/login" method="POST">

                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Password</label>
                <input type="password" name="password">

                <button type="submit">Sign in</button>
            </form>

            <ul class="sign-up">
                <li>
                    Don't have an account?<a href="<?=base_url?>usuario/register" class="underline"> Click here</a>
                </li>
            </ul>

            
        <?php else: ?>
                
            <h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
            
            <ul>
                
                <?php if(isset($_SESSION['admin'])) : ?>

                    <li>
                        <a href="<?=base_url?>categoria/index"><i class="fas fa-arrow-circle-right"></i> Manage Categories</a>
                    </li>
                    
                    <li>
                        <a href="<?=base_url?>producto/gestion"><i class="fas fa-arrow-circle-right"></i> Manage Products</a>
                    </li>
                    
                    <li>
                        <a href="<?=base_url?>pedido/gestion"><i class="fas fa-arrow-circle-right"></i> Manage Orders</a>
                    </li>

                <?php endif; ?>
                    
                <?php if(isset($_SESSION['identity'])) : ?>

                    <li>
                        <a href="<?=base_url?>pedido/mis_pedidos"><i class="fas fa-arrow-circle-right"></i> My Orders</a>
                    </li>

                    <li>
                        <a href="<?=base_url?>usuario/logout"><i class="fas fa-arrow-circle-right"></i> Sign off</a>
                    </li>

                <?php endif; ?>
                
            </ul>
            
        <?php endif; ?>


    </div>

</aside>

<!-- MAIN CONTENT -->
<div id="central">