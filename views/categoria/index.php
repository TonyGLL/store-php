<h1>Manage Categories</h1>


<table>

    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th class="buttons">OPTIONS</th>
    </tr>
    
    <?php while($cat = $categorias->fetch_object()) : ?>
        
        <tr>
            <td><?=$cat->id?></td>
            <td><?=$cat->nombre?></td>
            <td class="buttons">
               <a href="" class="button button-option button-edit-category">Edit</a> 
               <a href="" class="button button-option button-delete-category">Delete</a> 
            </td>
        </tr>
        
    <?php endwhile; ?>
        
</table>
    
<a href="<?=base_url?>categoria/crear" class="button button-small">
    Create Category
</a>