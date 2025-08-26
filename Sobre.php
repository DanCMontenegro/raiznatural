<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Raízes Naturais | Thaís Moraes - Cozinha com Afeto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">


  <style>
    body {
      background: #fff8f0;
      font-family: 'Quicksand', sans-serif;
      color: #333;
      line-height: 1.7;
    }

    body {
      margin: 0;
      padding: 0;
    }

    header {
      text-align: center;
      padding: 40px 20px;
    }

    .navbar-custom {
      background: linear-gradient(135deg, rgb(255, 200, 120), rgb(222, 147, 52));
    }

    .navbar-custom .nav-link,
    .navbar-custom .navbar-brand {
      color: black;
      font-weight: 600;
      font-size: 2.5rem;
    }


    header {
      margin: 0;
      padding: 0;
    }

    .navbar-custom {
      background: linear-gradient(135deg, rgb(255, 200, 120), rgb(222, 147, 52));
      margin: 0;
      border-radius: 0;
      padding-inline: 16px;
      /* espaçamento interno para a logo não colar na borda */
      padding-block: 8px;
      /* espaço vertical opcional */
    }

    .letra-r {
      font-size: 4rem;
      color: green;
      font-weight: bold;
    }

    .letra-n {
      font-size: 4rem;
      color: red;
      font-weight: bold;
    }

    .same-height {
      display: flex;
      flex-direction: column;
      height: 100%;
      padding: 30px;
      border-radius: 16px;
      transition: all 0.3s ease;
    }

    .same-height:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .bg-verde {
      background: linear-gradient(135deg, #cfe8dc, #a7d7bd, #7fc9a1);
      color: #333;
      /* texto escuro para contraste suave */
    }


    .chef-photo {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      margin: 0 auto 20px auto;
    }

    h2 {
      font-weight: 600;
      margin-bottom: 20px;
    }

    p {
      text-align: justify;
    }

    @media (max-width: 767px) {
      header h1 {
        font-size: 2rem;
      }

      .chef-photo {
        width: 140px;
        height: 140px;
      }
    }

    footer {
      background-color: rgb(222, 147, 52);
      color: black;
      text-align: center;
      padding: 1rem 0;
    }
  </style>
</head>

<body>

 <!-- Cabeçalho -->
<header>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-md d-flex align-items-center justify-content-between position-relative">
      
      <!-- Logo à esquerda -->
      <div class="d-flex align-items-center">
        <img class="rounded-circle" src="/raiznatural/Imagens_Index/Logo.jpeg" alt="Logo da loja"
             style="width: 100px; height: auto; margin-right: 10px;">
      </div>

      <!-- Nome centralizado -->
      <div class="position-absolute top-50 start-50 translate-middle text-center">
        <a class="navbar-brand titulo-centralizado m-0" href="#">
          <span class="letra-r">R</span><strong>aíz</strong>
          <span class="letra-n">N</span><strong>atural</strong>
        </a>
      </div>

      <!-- Botão "Voltar" à direita com largura fixa -->
      <div class="text-end" style="width: 100px;">
        <a href="index.php" class="btn btn-success w-100">Voltar</a>
      </div>

    </div>
  </nav>
  <br>
</header>


    <p class="text-muted">Cozinha com afeto por Thaís Moraes</p><br>
  </header>

  <main class="container pb-5">
    <div class="row justify-content-center g-4">



      <!-- Coluna 2: Sobre Thaís -->
      <div class="col-md-6">
        <section class="same-height bg-verde text-dark">
          <img src="/raiznatural/Imagens_Sobre/thais_morais.jpg" alt="Thais Moraes - Chef do Raíz Natural" class="chef-photo" />
          <h2>Thais Morais</h2>
          <p>
            Thais sempre carregou a cozinha no coração. Guardou na memória o cheiro das panelas da vovó
            Socorro, que preparava receitas simples, mas cheias de amor. Foi ali, entre risos, histórias e sabores, que
            nasceu sua paixão por cozinhar e nutrir pessoas com afeto.
          </p>
          <p>
            Formada em Turismo, viajou por países da América do Sul, experimentando novos temperos, conhecendo culturas
            e ampliando seu olhar para o que a gastronomia tem de mais bonito: a capacidade de unir pessoas. Trabalhou
            em cozinhas, conduziu tours por vinícolas no Chile, gerenciou restaurantes e empreendeu com o Açaí de
            Cinema.
          </p>
          <p>
            Hoje, na Raíz Natural, transforma essas vivências em pratos que acolhem e encantam. Sua cozinha é um
            convite a sentir, lembrar e se conectar com o alimento, com a natureza e com as boas lembranças que vivem
            em cada um de nós.
          </p>

        </section>

      </div>


  </main>
  <!-- ======= Rodapé ======= -->
  <footer class="text-black text-center py-3 mt-5">
    &copy; 2025 Raíz Natural - Todos os direitos reservados
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>