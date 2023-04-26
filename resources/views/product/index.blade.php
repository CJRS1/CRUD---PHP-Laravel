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
    <div class="container">
        <h1> Lista de los productos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Stock</th>
                    <th>Precio Compra</th>
                    <th>Precio Venta</th>
                    <th>Eliminar</th>
                    <th>Editar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($products as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->name}} </td>
                    <td>{{$producto->description}} </td>
                    <td>{{$producto->stock}} </td>
                    <td>{{$producto->purcharse_price}} </td>
                    <td>{{$producto->sale_price}} </td>
                    <td>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                    <td scope="col">
                        <button class="btn btn-dark">Editar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
