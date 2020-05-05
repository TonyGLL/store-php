<?php if(isset($edit) && isset($pro) && is_object($pro)) : ?>

    <h1>Edit Product - <?=$pro->nombre?></h1>

    <?php $url_action = base_url . "producto/save&id=" . $pro->id; ?>

<?php else: ?>

    <h1>Create New Product</h1>

    <?php $url_action = base_url . "producto/save"; ?>

<?php endif; ?>

<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">

    <label for="nombre">Name</label>
    <input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>">

    <label for="descripcion">Description</label>
    <textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

    <label for="precio">Price</label>
    <input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>">

    <label for="stock">Stock</label>
    <input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>">

    <label for="categoria">category</label>

    <?php $categorias = Utils::showCategories(); ?>

    <select name="categoria">

        <?php while($cat = $categorias->fetch_object()) : ?>

            <option value="<?=$cat->id?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
                <a href=""><?=$cat->nombre?></a>
            </option>

        <?php endwhile; ?>
        
    </select>

    <label for="imagen">Image</label>
    <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)) : ?>
        
        <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="thumb" alt="">

    <?php endif; ?>
    <input type="file" name="imagen">

    <button type="submit">Save Product</button>

</form>