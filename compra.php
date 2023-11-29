<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aréa de Produtos</title>
  <link rel="stylesheet" href="compra.css">
</head>
<body>

  <header>
    <div class="logo-container">
      <img src="IconeBranco.png" alt="Logo da Sua Empresa">
    </div>
    <a href="carrinho.php" class="cart-btn">&#128722; Carrinho <span id="cart-count">0</span></a>
  </header>

  <section class="products">
    
    <div class="product">
      <img src="Ibuprofeno.png" alt="Produto 1">
      <h3>Ibuprofeno</h3>
      <p class="price">R$15.00</p>
      <button class="add-to-cart-btn" onclick="addToCart('Nome do Produto 1', 20.00)">Adicionar ao Carrinho</button>
    </div>
    <div class="product">
      <img src="dorflex.png" alt="Produto 2">
      <h3>dorflex</h3>
      <p class="price">R$10.00</p>
      <button class="add-to-cart-btn" onclick="addToCart('dorflex', 20.00)">Adicionar ao Carrinho</button>
    </div>
    <div class="product">
      <img src="Allegra.png" alt="Produto 3">
      <h3>Allegra</h3>
      <p class="price">R$22.00</p>
      <button class="add-to-cart-btn" onclick="addToCart('Nome do Produto 1', 20.00)">Adicionar ao Carrinho</button>
    </div>
    <div class="product">
      <img src="cimegripe.png" alt="Produto 4">
      <h3>cimegripe</h3>
      <p class="price">R$12.00</p>
      <button class="add-to-cart-btn" onclick="addToCart('Nome do Produto 1', 20.00)">Adicionar ao Carrinho</button>
    </div>
    </section>
    <section class="products">
    <div class="product">
      <img src="Engov.png" alt="Produto 1">
      <h3>Engov/h3>
      <p class="price">R$29.60</p>
      <button class="add-to-cart-btn" onclick="addToCart('Nome do Produto 1', 20.00)">Adicionar ao Carrinho</button>
    </div>
    <div class="product">
      <img src="doril.png" alt="Produto 2">
      <h3>doril</h3>
      <p class="price">R$24.00</p>
      <button class="add-to-cart-btn" onclick="addToCart('dorflex', 20.00)">Adicionar ao Carrinho</button>
    </div>
    <div class="product">
      <img src="entorgermina.png" alt="Produto 3">
      <h3>entorgermina</h3>
      <p class="price">R$40.00</p>
      <button class="add-to-cart-btn" onclick="addToCart('Nome do Produto 1', 20.00)">Adicionar ao Carrinho</button>
    </div>
    <div class="product">
      <img src="Advil.png" alt="Produto 4">
      <h3>Advil</h3>
      <p class="price">R$26.00</p>
      <button class="add-to-cart-btn" onclick="addToCart('Nome do Produto 1', 20.00)">Adicionar ao Carrinho</button>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Onlife - Todos os direitos reservados</p>
  </footer>

  <script src="compra.js"></script>
</body>
</html>
