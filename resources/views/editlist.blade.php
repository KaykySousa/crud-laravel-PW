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
    <div class="h-screen w-full bg-gray-900">
        <div class="text-white flex-col h-full flex justify-center items-center p-5 max-w-[640px] mx-auto space-y-4">
            <h1 class="text-center text-2xl font-bold">Editar Produtos</h1>
    
            <form class="w-full space-y-2" id="form">
                @csrf
                <input type="number" id="id-input" placeholder="ID do Produto" class="input"/>
                <button class="button" type="button" onclick="handleSubmit()">Editar</button>
            </form>

            <table class="w-full text-center">
                <tr>
                    <th class="cell">ID</th>
                    <th class="cell">Nome</th>
                    <th class="cell">Valor</th>
                    <th class="cell">Quantidade</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td class="cell">{{$product->id}}</td>
                        <td class="cell">{{$product->name}}</td>
                        <td class="cell">{{$product->price}}</td>
                        <td class="cell">{{$product->quantity}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script>
        function handleSubmit() {

            const input = document.getElementById("id-input")
            const form = document.getElementById("form")

            const id = input.value
            form.setAttribute('action', '/edit-product/'+id)

            if (id) {
                form.submit()
            } else {
                alert('Digite o ID do Produto')
            }
        }
    </script>
</body>
</html>