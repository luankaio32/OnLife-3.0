<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="carrinho.css">
</head>
<body>

<div class="header">
    <img src="Ativo_11-8.png" alt="Logo da Sua Empresa" class="logo">
    <h1>Carrinho de Compras</h1>
</div>

<div class="container">
    <div id="cart-items">
       
    </div>

    <div class="total">
        <p>Total da Compra: R$<span id="total">0.00</span></p>
    </div>

    <button id="checkout-button" class="checkout-button" onclick="redirecionarPagina('endereco.php')">Selecionar Endereço de Entrega</button>
<button id="cancel-button" class="cancel-button" onclick="redirecionarPagina('compra.php')">Cancelar</button>

<script>
    function redirecionarPagina(pagina) {
        window.location.href = pagina;
    }
</script>


<script src="carrinho.js"></script>

</body>
</html>