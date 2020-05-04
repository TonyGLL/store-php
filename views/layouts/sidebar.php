<!-- SIDEBAR -->
<aside id="sidebar">

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

            
        <?php else: ?>
                
            <h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
            
            <ul>
                
                <?php if(isset($_SESSION['admin'])) : ?>

                    <li>
                        <a href=""><i class="fas fa-arrow-circle-right"></i> Manage Categories</a>
                    </li>
                    
                    <li>
                        <a href=""><i class="fas fa-arrow-circle-right"></i> Manage Products</a>
                    </li>
                    
                    <li>
                        <a href=""><i class="fas fa-arrow-circle-right"></i> Manage Orders</a>
                    </li>

                <?php endif; ?>
                    
                <li>
                    <a href=""><i class="fas fa-arrow-circle-right"></i> My Orders</a>
                </li>

                <li>
                    <a href="<?=base_url?>usuario/logout"><i class="fas fa-arrow-circle-right"></i> Sign off</a>
                </li>
            </ul>

        <?php endif; ?>

    </div>

</aside>

<!-- MAIN CONTENT -->
<div id="central">