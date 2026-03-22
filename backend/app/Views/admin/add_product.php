<form action="<?= base_url('admin/save') ?>" method="post" enctype="multipart/form-data">

    <input type="text" name="name" placeholder="Product Name" required>
    <input type="number" name="price" placeholder="Price" required>

    <select name="category">
        <option>Decks</option>
        <option>Clothing</option>
        <option>Accessories</option>
    </select>

    <input type="file" name="image" required>

    <button type="submit">Add Product</button>
</form>