<h1>Create a new category</h1>

<form action="<?=base_url?>categoria/save" method="POST">

    <label for="nombre">Name</label>
    <input type="text" name="nombre" required>
    
    <button type="submit">Save Category</button>

</form>