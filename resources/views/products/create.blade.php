<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <label for="name">Product Name:</label><br>
            <input required type="text" id="name"><br><br>
            <label for="reference">Reference:</label><br>
            <input required type="text" id="reference"><br><br>
            <label for="slug">Slug:</label><br>
            <input required type="text" id="slug"><br><br>
            <label for="price">price:</label><br>
            <input required type="number" id="price"><br><br>
            <label for="stock">stock:</label><br>
            <input required type="number" id="stock"><br><br>
            <label for="categorie_id">categorie_id:</label><br>
            <input required type="text" id="categorie_id"><br><br>
            <label for="image_path">Image Path:</label><br>
            <input type="text" id="image_path"><br><br>
            <button type="submit">Add Product</button>
        </form>
    </main>
</body>
</html>