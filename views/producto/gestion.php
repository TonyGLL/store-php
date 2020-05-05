<h1>Product Management</h1>

<!-- Mensajes para cuando se cree un producto -->
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == "complete") : ?>

    <div class="alert_green space">The product has been created successfully.</div>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != "complete") : ?>

    <div class="alert_red space">The product was not created correctly.</div>

<?php endif; ?>

<?php Utils::deleteSession('producto'); ?>

<!-- Mensaje para cuando se elimine un producto -->
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == "complete") : ?>

<div class="alert_red space">The product has been removed successfully.</div>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != "complete") : ?>

<div class="alert_yellow space">The product was not removed correctly.</div>

<?php endif; ?>

<?php Utils::deleteSession('delete'); ?>

<table>

    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th class="buttons">OPTIONS</th>
    </tr>
    
    <?php while($pro = $productos->fetch_object()) : ?>
        
        <tr>
            <td><?=$pro->id?></td>
            <td><?=$pro->nombre?></td>
            <td><?=$pro->precio?></td>
            <td><?=$pro->stock?></td>
            <td class="buttons">
               <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button button-option button-edit-category">Edit</a> 
               <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-option button-delete-category">Delete</a> 
            </td>
        </tr>
        
    <?php endwhile; ?>
        
</table>
    
<a href="<?=base_url?>producto/crear" class="button button-small">
    Create Product
</a>