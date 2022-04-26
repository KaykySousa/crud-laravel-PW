<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="h-screen w-full flex justify-center items-center bg-gray-900 text-white flex-col">
        <h1 class="text-center text-2xl font-bold">Listagem de Produtos</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
            </tr>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
            </tr>
        </table>
    </div>
</body>
</html>