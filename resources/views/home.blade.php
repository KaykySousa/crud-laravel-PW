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
    <div class="h-screen w-full flex justify-center items-center bg-gray-900 text-white">
        <div class="w-full max-w-[640px] flex flex-col items-center space-y-4">
            <h1 class="text-center text-3xl font-bold">Mercado Laravel</h1>
            <a class="button" href="/list-products">Listar Produtos</a>
            <a class="button" href="/register-product">Registrar Produtos</a>
            <a class="button" href="/edit-product">Editar Produtos</a>
            <a class="button" href="/delete-product">Deletar Produtos</a>
        </div>
    </div>
</body>
</html>