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
    <div class="h-screen w-full flex justify-center items-center bg-gray-900 text-white flex-col p-5 relative">
        <a href="/" class="h-8 w-8 absolute left-0 top-0 text-gray-200 m-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg></a>
        <h1 class="text-center text-2xl font-bold mb-5">Listagem de Produtos</h1>
        <table class="w-full max-w-xl text-center">
            <tr>
                <th class="cell">Nome</th>
                <th class="cell">Valor</th>
                <th class="cell">Quantidade</th>
            </tr>
            <tr>
                <td class="cell">{{$product->name}}</td>
                <td class="cell">{{$product->price}}</td>
                <td class="cell">{{$product->quantity}}</td>
            </tr>
        </table>
    </div>
</body>
</html>