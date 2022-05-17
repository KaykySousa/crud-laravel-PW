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
    <div class="h-screen w-full bg-gray-900 relative">
        <a href="/" class="h-8 w-8 absolute left-0 top-0 text-gray-200 m-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg></a>
        <div class="text-white flex-col h-full flex justify-center items-center p-5 max-w-[640px] mx-auto space-y-4">
            <h1 class="text-center text-2xl font-bold">Deletar Produto</h1>

            <form class="w-full space-y-2" id="form">
                @csrf
                <input type="number" id="id-input" placeholder="ID do Produto" class="input" />
                <button class="button" type="button" onclick="handleSubmit()">Deletar</button>
            </form>

            <table class="w-full text-center">
                <tr>
                    <th class="cell">ID</th>
                    <th class="cell">Nome</th>
                    <th class="cell">Valor</th>
                    <th class="cell">Quantidade</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td class="cell">{{ $product->id }}</td>
                        <td class="cell">{{ $product->name }}</td>
                        <td class="cell">{{ $product->price }}</td>
                        <td class="cell">{{ $product->quantity }}</td>
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
            form.setAttribute('action', '/delete-product/' + id)

            if (id) {
                form.submit()
            } else {
                alert('Digite o ID do Produto')
            }
        }
    </script>
</body>

</html>
