<form action="<?= base_url('admin/save') ?>" method="post" enctype="multipart/form-data">

    <?= csrf_field() ?>

    <input type="text" name="name" placeholder="Product Name" required>
    <input type="number" name="price" placeholder="Price" required>
    <input type="number" name="stock" placeholder="Stock" min="0" required>

    <select name="category" required>
        <option value="Decks">Decks</option>
        <option value="Clothing">Clothing</option>
        <option value="Accessories">Accessories</option>
    </select>

    <input type="file" name="image" required>

    <button type="submit">Add Product</button>
</form>