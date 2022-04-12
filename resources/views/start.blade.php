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
        <form action="/register-product" method="POST" class="shadow-2xl p-7 space-y-4 bg-gray-800 w-full max-w-[640px]">
            @csrf
            <h1 class="text-center text-2xl font-bold">Cadastro de Produtos</h1>
            <div>
                <label for="lblName" class="mb-2 block">Nome: </label>
                <input type="text" name="name" class="input">
            </div>
            
            <div>
                <label for="lblPrice" class="mb-2 block">Valor: </label>
                <input type="text" name="price" class="input">
            </div>
            
            <div>
                <label for="lblQuantity" class="mb-2 block">Quantidade: </label>
                <input type="text" name="quantity" class="input">
            </div>
    
            <button type="submit" class="button">Cadastrar</button>
            
        </form>
    </div>
</body>
</html>