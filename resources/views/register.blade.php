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
    <div class="h-screen w-full flex justify-center items-center bg-gray-900 text-white relative">
        <a href="/" class="h-8 w-8 absolute left-0 top-0 text-gray-200 m-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg></a>
        <form action="/register-product" method="POST" class="shadow-2xl p-7 space-y-4 bg-gray-800 w-full max-w-[640px]">
            @csrf
            <h1 class="text-center text-3xl font-bold">Cadastro de Produtos</h1>
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