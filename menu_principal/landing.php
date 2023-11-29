<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="landing.css">
    <title>OnLife</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="#"><img src="logoprincipal.png" alt="" class="logo" width="45" height="45"></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php">ENTRAR</a> </li>
                <li class="nav-item"><a href="landing.php">Pagina Inicial</a></li>
                <li class="nav-item"><a href="sobre.php">Sobre nós</a></li>
                <li class="nav-item"><a href="contato.php">Contato</a></li>
                <form class="search-box">
                    <input type="text" placeholder=" "/>
                    <button type="reset"></button>
                  </form>
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Bem-vindo à OnLife</h4>
                <h1 class="text-h1">Os melhores medicamentos, com os melhores preços e mais perto de você!</h1>
                <p>Caso não possua um cadastro, clique no botão abaixo para começar a curtir as melhores ofertas para uma vida mais saudavel.</p>
               <li> <a href="Cadastro.php" class="home-btn">Cadastre-se!</a> </li>
            </div>
            <div class="home-img">
                <img src="iconePrincipal.png" alt="OnLife">
            </div>
        </section>
    </main>
    <script src="landing.js"></script>
</body>
</html>
