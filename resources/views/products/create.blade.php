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
            <input name="name" required type="text" id="name"><br><br>
            <label for="reference">Reference:</label><br>
            <input name="reference" required type="text" id="reference"><br><br>
            <label for="slug">Slug:</label><br>
            <input name="slug" required type="text" id="slug"><br><br>
            <label for="price">price:</label><br>
            <input name="price" required type="number" id="price"><br><br>
            <label for="stock">stock:</label><br>
            <input name="stock" required type="number" id="stock"><br><br>
            <label for="categorie_id">categorie_id:</label><br>
            <input name="categorie_id" required type="text" id="categorie_id"><br><br>
            <label for="image_path">Image:</label>
            <input name="image_path" type="file" accept="image/*" id="image_path"><br><br>
            <img src="{{asset('store/' . '}}" alt="">
            <button type="submit">Add Product</button>
        </form>
    </main>
</body>
</html>