<h1>Sign Up</h1>

    <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
    
        <strong class="alert_green">User Registration Completed.</strong>
    
    <?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    
        <strong class="alert_red">Failed User Registration, enter the data correctly.</strong>
    
    <?php endif; ?>

    <?php Utils::deleteSession('register'); ?>


<form action="<?=base_url?>usuario/save" method="POST">

    <label for="nombre">Name</label>
    <input type="text" name="nombre" required>

    <label for="apellidos">Lastname</label>
    <input type="text" name="apellidos" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <button type="submit">Register</button>
</form>