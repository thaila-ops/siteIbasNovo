<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'] ?? '';
  $telefone = $_POST['telefone'] ?? '';
  $email = $_POST['email'] ?? '';
  $qtdpessoas = $_POST['qtdpessoas'] ?? '';
  $local = $_POST['local'] ?? '';
  $tipo_evento = $_POST['tipo_evento'] ?? '';
  $mensagem = $_POST['mensagem'] ?? '';

  $conteudo = "==== NOVO ORÇAMENTO ====\n";
  $conteudo .= "Nome: $nome\n";
  $conteudo .= "Telefone: $telefone\n";
  $conteudo .= "Email: $email\n";
  $conteudo .= "Convidados: $qtdpessoas\n";
  $conteudo .= "Local: $local\n";
  $conteudo .= "Tipo de Evento: $tipo_evento\n";
  $conteudo .= "Mensagem: $mensagem\n";
  $conteudo .= "-------------------------\n";

  file_put_contents("orcamentos.txt", $conteudo, FILE_APPEND);

  echo "<script>alert('Orçamento enviado com sucesso!');</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iba's Buffet</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="../style2.css/style.css" />
  <link rel="shortcut icon" href="../imagens/Logo.png.jpg" />
</head>
<base href="<? $_base ?>">

<body>
  <header>
    <div class="container">
      <nav>
            <img src="../imagens/novo_logo.jpg" width="120px" alt="ibas">

        <div class="nav-left">
          <a href="../index.php?pagina=home">Home</a>
          <a href="contato.php?pagina=contato">Contato</a>
        </div>

        <div class="nav-right">
          <a href="../index.php#sobre">Sobre</a>
          <a href="catalogo.php?pagina=catalogo">Catálogo</a>
        </div>
      </nav>
    </div>
  </header>


  <main class="container my-5">
    <section class="paragrafo">
      <h1>Iba´s Buffet</h1>
      <h2>Receba nosso carinho e cuidado desde o primeiro contato!</h2>
      <p>Acolher você é um presente. Estamos prontos para ouvir, sonhar e servir ao seu lado</p>
      <blockquote>
        "Tudo que fizerem, faça de todo o coração, como para o Senhor, e não para os homens." <br />
        – Colossens 3:23
      </blockquote>
    </section>

    <h3 class="mt-5">Entre em contato conosco</h3>


    <form class="row g-3" action="enviar.php" method="POST">

      <div class="col-md-6">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="nome" required />
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" required />
        <div class="text-danger small" id="emailError"></div>
      </div>

      <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone/Whatsapp</label>
        <input type="tel" name="telefone" class="form-control" id="telefone" required />
        <div class="text-danger small" id="telefoneError"></div>
      </div>

      <div class="col-md-6">
        <label class="form-label">Tipo de Evento</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_evento" value="Casamento" id="casamento" />
          <label class="form-check-label" for="casamento">Casamento</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_evento" value="Aniversário" id="aniversario" />
          <label class="form-check-label" for="aniversario">Aniversário</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_evento" value="Corporativo" id="corporativo" />
          <label class="form-check-label" for="corporativo">Corporativo</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_evento" value="cha" id="cha" />
          <label class="form-check-label" for="cha">Chá de bebê</label>
        </div>

        <div class="form-check d-flex alien-items-center">
          <input class="form-check-input me-2" type="checkbox" name="tipo_evento" value="outro" id="outro" />
          <label class="form-check-label me-2" for="outro">Outro:</label>
          <input type="text" class="form-control form-control-sm" placeholder="Descreva">
        </div>
      </div>

      <div class="col-md-6">
        <label class="form-label">Data do Evento</label>
        <input type="date" name="date" class="form-control" id="data" required />
      </div>

      <div class="col-md-6">
        <label for="qtdpessoas" class="form-label">Convidados</label>
        <select name="qtdpessoas" class="form-select" required>
          <option value="">Selecione</option>
          <option value="20 a 50 pessoas">20 a 50</option>
          <option value="50 a 100 pessoas">50 a 100</option>
          <option value="100 a 200 pessoas">100 a 200</option>
          <option value="200 a 300 pessoas">200 a 300</option>
        </select>
      </div>

      <div class="col-md-6">
        <label for="local" class="form-label">Local do Evento (Bairro ou Cidade)</label>
        <input type="text" name="local" class="form-control" id="local" required />
      </div>


      <div class="col-12">
        <label for="mensagem" class="form-label">Mensagem / Detalhes do evento </label>
        <textarea name="mensagem" class="form-control" id="mensagem" rows="4"></textarea>
      </div>

      <div class="col-12">

        <div id="successMessage" class="alert alert-success d-none text-center" role="alert">
          Formulário enviado com sucesso! Entraremos em contato em breve.
        </div>

        <button type="submit" class="btn btn-primary">Enviar Orçamento</button>
      </div>
    </form>
  </main>
  <div class="container my-5">
    <div class="row align-items-start">


      <div class="col-md-6 mb-4">
        <h5 class="fw-semibold mb-3">Endereço</h5>
        <p class="d-flex align-items-center text-muted fs-6">
          <i class="fa-solid fa-location-dot text-secondary me-2"></i>
          Rua Santa Cruz, 508 – Jd Florida, Campo Mourão – PR
        </p>

        <h5 class="fw-semibold ">Redes Sociais</h5>


        <div class="redes">
          <ol>
            <a href="https://wa.me/5544999212043" target="_blank">
              <ul> <i class="fab fa-whatsapp me-1"></i>Whatsapp</ul>
            </a>
            <a href="https://www.instagram.com/ibasbuffet" target="_blank">
              <ul> <i class="fab fa-instagram me-1"></i> Instagram</ul>
            </a>
            <a href="https://www.facebook.com/ibasbuffet" target="_blank">
              <ul> <i class="fab fa-facebook-f me-1"></i> Facebook</ul>
            </a>
            <a href="mailto:ibasbuffet@outlook.com?subject=contato pelo site&Olá, gostaria de mais informações." target="_blank">
              <ul> <i class="fas fa-envelope me-1"></i> E-mail</ul>
            </a>

        </div>
      </div>
      </ol>


      <div class="col-md-6">
        <div class="rounded-3 shadow-sm overflow-hidden" style="height: 320px;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.6546923633555!2d-52.37000542487533!3d-24.043239078471778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed75361b65d683%3A0xa0a411efc3cda5c9!2sRua%20Santa%20Cruz%2C%20508%20-%20Jardim%20Florida%2C%20Campo%20Mour%C3%A3o%20-%20PR%2C%2087300-440!5e0!3m2!1spt-BR!2sbr!4v1750472062449!5m2!1spt-BR!2sbr"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>
  </div>


  <footer class="footer text-center py-4">
    <div class="container">
      <p>"Realizando as promessas de Deus". (Hebreus 10:36)</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const form = document.querySelector("form");

      form.addEventListener("submit", function(e) {
        e.preventDefault();

        let isValid = true;

        // Oculta mensagem de sucesso
        const successMessage = document.getElementById("successMessage");
        successMessage.classList.add("d-none");

        // Limpa mensagens de erro anteriores
        document.querySelectorAll(".text-danger").forEach(el => el.textContent = "");

        // Regex
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const telefoneRegex = /^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/;

        // Campos
        const nome = document.getElementById("nome");
        const email = document.getElementById("email");
        const telefone = document.getElementById("telefone");
        const data = document.getElementById("data");
        const local = document.getElementById("local");
        const qtd = document.querySelector("select[name='qtdpessoas']");

        // Validação de campos obrigatórios
        if (nome.value.trim() === "") {
          nome.classList.add("is-invalid");
          isValid = false;
        } else {
          nome.classList.remove("is-invalid");
        }

        if (!emailRegex.test(email.value.trim())) {
          document.getElementById("emailError").textContent = "E-mail inválido. Ex: exemplo@email.com";
          email.classList.add("is-invalid");
          isValid = false;
        } else {
          email.classList.remove("is-invalid");
        }

        if (!telefoneRegex.test(telefone.value.trim())) {
          document.getElementById("telefoneError").textContent = "Telefone inválido. Ex: (11) 91234-5678";
          telefone.classList.add("is-invalid");
          isValid = false;
        } else {
          telefone.classList.remove("is-invalid");
        }

        if (data.value.trim() === "") {
          data.classList.add("is-invalid");
          isValid = false;
        } else {
          data.classList.remove("is-invalid");
        }

        if (local.value.trim() === "") {
          local.classList.add("is-invalid");
          isValid = false;
        } else {
          local.classList.remove("is-invalid");
        }

        if (qtd.value === "") {
          qtd.classList.add("is-invalid");
          isValid = false;
        } else {
          qtd.classList.remove("is-invalid");
        }

        // Verifica se algum tipo de evento foi selecionado
        const eventosSelecionados = document.querySelectorAll("input[name='tipo_evento']:checked");
        if (eventosSelecionados.length === 0) {
          alert("Por favor, selecione ao menos um tipo de evento.");
          isValid = false;
        }

        // Se tudo estiver válido
        if (isValid) {
          successMessage.classList.remove("d-none");
          form.reset();
          document.querySelectorAll(".is-invalid").forEach(el => el.classList.remove("is-invalid"));
        }
      });

      // Máscara para telefone
      const telefoneInput = document.getElementById("telefone");
      telefoneInput.addEventListener("input", function() {
        let valor = telefoneInput.value.replace(/\D/g, "");
        if (valor.length > 11) valor = valor.slice(0, 11);

        if (valor.length >= 2 && valor.length <= 6) {
          valor = `(${valor.slice(0, 2)}) ${valor.slice(2)}`;
        } else if (valor.length > 6 && valor.length <= 10) {
          valor = `(${valor.slice(0, 2)}) ${valor.slice(2, 6)}-${valor.slice(6)}`;
        } else if (valor.length > 10) {
          valor = `(${valor.slice(0, 2)}) ${valor.slice(2, 7)}-${valor.slice(7)}`;
        }

        telefoneInput.value = valor;
      });
    });
  </script>


</body>

</html>