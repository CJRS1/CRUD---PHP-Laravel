<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Crear un producto</h1>
    <form class="container" method="POST" action="{{url('products')}} "> {{-- el action es para asegurarbos que se vaya a store --}}
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="" name="name" placeholder="Coca Cola">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stock</label>
            <input type="number" class="form-control" id="" name="stock" placeholder="100">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio de compra</label>
            <input type="number" class="form-control" step="any" id="" name="purcharse_price" placeholder="25.00">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio de venta</label>
            <input type="number" class="form-control" step="any" id="" name="sale_price" placeholder="50.00">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-danger">Guardar</button>
        </div>
    </form>
</body>

</html>
