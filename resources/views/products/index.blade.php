<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        table, th, td{
            border: 1px solid black;
        }
        
        #add-product{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main class="w-[100vw] min-h-screen">
        <h2>Products</h2>
        <div class="container min-h-screen flex flex-col justify-center items-center gap-[30px] w-[1920px]">
            <a class="bg-blue-500 text-[white] py-[10px] px-[5px] rounded-[10px]" id="add-product" href="{{route('products.create')}}">Add new product</a>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Reference</th>
                    <th>Slug</th>
                    <th>Price</th>
                    <th>Stock Quantity</th>
                    <th>Categorie</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td> 
                        <td><img src="{{asset('storage/' . $product->image_path)}}" alt="{{$product->name}} image"></td>
                        <td>{{$product->reference}}</td>
                        <td>{{$product->slug}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->categorie_id}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>
</html>