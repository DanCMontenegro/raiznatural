<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Raíz Natural</title>

  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    .navbar-custom {
      background: linear-gradient(135deg, rgb(255, 200, 120), rgb(222, 147, 52));
      padding: 8px 16px;
    }

    .navbar-custom .navbar-brand {
      font-family: 'Quicksand', sans-serif;
      font-weight: 600;
      font-size: 2.5rem;
      color: black;
      text-decoration: none;
    }

    .navbar-custom .nav-link {
      color: black;
      font-weight: 500;
      font-size: 1rem;
    }

    .navbar-custom .nav-link:hover {
      color: #a35a1c;
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


    .carousel-item img {
      height: 400px;
      object-fit: cover;
    }

    .carousel-caption h5,
    .carousel-caption p {
      color: white;
      font-size: x-large;
    }

    .card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-8px);
    }

    .linha-vegana {
      background: linear-gradient(135deg, #a8e6cf, #dcedc1);
      color: #2e7d32;
    }

    .linha-paes {
      background: linear-gradient(135deg, #fff3e0, #ffe0b2);
      color: #6d4c41;
    }

    .linha-diversos {
      background: linear-gradient(135deg, #ff6b6b, #ff3b3b);
      color: white;
    }

    .form-container {
      border: 2px solid #dee2e6;
      background-color: #fff;
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

  <!-- ======= Cabeçalho ======= -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <!-- Logo -->
    <div class="d-flex align-items-center">
      <img class="rounded-circle" src="/raiznatural/Imagens_Index/logo.jpeg" alt="Logo da loja"
        style="width: 100px; height: auto; margin-right: 10px;">
    </div>

    <!-- Nome centralizado -->
    <div class="position-absolute top-50 start-50 translate-middle text-center">
      <a class="navbar-brand m-0" href="#">
        <span class="letra-r">R</span><strong>aíz</strong>
        <span class="letra-n">N</span><strong>atural</strong>
      </a>
    </div>

    <!-- Links -->
    <div class="navbar-nav ms-auto d-flex flex-row gap-3">
      <a class="nav-link" href="/raiznatural/Sobre.php"><strong>Sobre</strong></a>
      <a class="nav-link" href="/raiznatural/Cardapio.php"><strong>Cardápio</strong></a>
      <a class="nav-link" href="/raiznatural/Login.php"><strong>Login</strong></a>

    </div>
    </div>
  </nav>

  <!-- ======= Carrossel ======= -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/raiznatural/Imagens_Index/Burguer.jpeg" class="d-block w-100" alt="Burguer artesanal">
    </div>
    <div class="carousel-item">
      <img src="/raiznatural/Imagens_index/Paoartesanal.jpeg" class="d-block w-100" alt="Pão Artesanal">
    </div>
    <div class="carousel-item">
      <img src="/raiznatural/Imagens_Index/ceviche.jpeg" class="d-block w-100" alt="Ceviche">
    </div>
  </div>

  <!-- Controles (opcional) -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

  <!-- ======= Cards de Produtos ======= -->
  <div class="container my-5">
    <div class="row g-4">
      <div class="col-md-4 d-flex">
        <div class="card linha-vegana text-center h-100 w-100">
          <img src="/raiznatural/Imagens_Index/Burguer.jpeg" class="card-img-top" alt="Hambúrguer Vegano">
          <div class="card-body">
            <h5 class="card-title">Linha Vegana</h5>
            <p class="card-text">Sabores plant-based com ingredientes frescos e sustentáveis.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="card linha-paes text-center h-100 w-100">
          <img src="/raiznatural/Imagens_Index/Paoartesanal.jpeg" class="card-img-top" alt="Pães Artesanais">
          <div class="card-body">
            <h5 class="card-title">Pães Artesanais</h5>
            <p class="card-text">Crocância perfeita e sabor inconfundível.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="card linha-diversos text-center h-100 w-100">
          <img src="/raiznatural/Imagens_Index/ceviche.jpeg" class="card-img-top" alt="Pratos Variados">
          <div class="card-body">
            <h5 class="card-title">Pratos Especiais</h5>
            <p class="card-text">De ceviches a pratos autorais, uma seleção para todos os paladares.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Formulário ======= -->
  <section class="py-5 fale-conosco">
    <div class="container">
      <legend class="text-center mb-4">Fale Conosco</legend>

      <div class="form-container p-4 rounded shadow-sm bg-white">
        <form action="/raiznatural/Recursos/Inserir_Clientes.php" method="post" id="form-contato">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome" autocomplete="off" placeholder="Nome Completo" required>
            </div>

            <div class="col-md-6">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" name="cpf" class="form-control" id="cpf" autocomplete="off" placeholder="000.000.000-00" required>
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" name="email" class="form-control" id="email" autocomplete="off" placeholder="email@exemplo.com" required>
            </div>

            <div class="col-md-6">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="tel" name="telefone" class="form-control" id="telefone" autocomplete="off" placeholder="(00) 00000-0000"
                required>
            </div>

            <div class="col-md-2">
              <label for="uf" class="form-label">UF</label>
              <select name="uf" class="form-select" id="uf" required>
                <option value="" disabled selected>Escolha...</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="cep" class="form-label">CEP</label>
              <div class="input-group">
                <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000" required>
                <button type="button" class="btn btn-secondary" id="buscar-cep" aria-label="Buscar CEP">🔍</button>
              </div>
            </div>

            <div class="col-md-6">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>

            <div class="col-md-6">
              <label for="endereco" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua, Número, Bairro"
                required>
            </div>

            <div class="text-center mt-4">
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- ======= Rodapé ======= -->
  <footer class="text-black text-center py-3 mt-5">
    &copy; 2025 Raíz Natural - Todos os direitos reservados
  </footer>

  <!-- ======= Scripts JS ======= -->
  <script>
    $(document).ready(function () {
      // Máscaras
      $('#cpf').mask('000.000.000-00');
      $('#telefone').mask('(00) 00000-0000');
      $('#cep').mask('00000-000');

      // Buscar CEP via ViaCEP
      $('#buscar-cep').click(function () {
        let cep = $('#cep').val().replace(/\D/g, '');
        if (cep.length !== 8) {
          alert('CEP inválido!');
          return;
        }
        $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function (data) {
          if (!("erro" in data)) {
            $('#cidade').val(data.localidade);
            $('#uf').val(data.uf);
            $('#endereco').val(`${data.logradouro}, ${data.bairro}`);
          } else {
            alert('CEP não encontrado.');
          }
        });
      });
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>



</body>

</html>