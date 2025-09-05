<?php
// Inclui o arquivo de conexão com o banco de dados
include_once('../bc.d_contato/banco_dados.php');

// Inicializar variáveis de mensagem
$success_message = '';
$error_message = '';
$alert_class = '';

// Processar formulário quando enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar e sanitizar os dados do formulário
    $nome = mysqli_real_escape_string($conn, $_POST['nome'] ?? '');
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $qtdpessoas = mysqli_real_escape_string($conn, $_POST['qtdpessoas'] ?? '');
    $tipo_evento = mysqli_real_escape_string($conn, $_POST['tipo_evento'] ?? '');
    $data_evento = mysqli_real_escape_string($conn, $_POST['date'] ?? '');
    $hora_evento = mysqli_real_escape_string($conn, $_POST['hora'] ?? '');
    
    // Extrair número de convidados
    $num_convidados = 0;
    if (preg_match('/(\d+)/', $qtdpessoas, $matches)) {
        $num_convidados = (int)$matches[1];
    }
    
    // Preparar e executar a query SQL
    // NOTA: Removi completamente a coluna 'observacoes' que não existe
    $sql = "INSERT INTO reserva (nome, telefone, email, data_evento, hora_evento, tipo_evento, num_convidados) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssssssi", $nome, $telefone, $email, $data_evento, $hora_evento, $tipo_evento, $num_convidados);
        
        if ($stmt->execute()) {
            $success_message = 'Reserva enviada com sucesso! Entraremos em contato em breve.';
            $alert_class = 'alert-success';
            
            // Limpar os campos do formulário
            $_POST = array();
        } else {
            $error_message = 'Erro ao enviar o formulário. Por favor, tente novamente.';
            $alert_class = 'alert-danger';
        }
        
        $stmt->close();
    } else {
        $error_message = 'Erro na preparação da query: ' . $conn->error;
        $alert_class = 'alert-danger';
    }
    
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iba's Buffet - Reservas</title>

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



<body>
  

  <header>
    <div class="container">
      <nav>

        <img src="../imagens/novo_logo.jpg" width="120px" alt="ibas" class="header-logo">

        <div class="nav-left">
          <a href="../index.php?pagina=home">Home</a>
          <a href="contato.php?pagina=contato">Contato</a>
          <a href="../index.php#sobre">Sobre</a>
          <a href="catalogo.php?pagina=catalogo">Catálogo</a>
        </div>
      </nav>
    </div>
  </header>

  <main class="container my-5">
    <div class="form-container">
      <section class="text-center mb-5">
        <h1 class="display-1 fw-bold">Iba's Buffet</h1>
        <h2 class="h3 text-muted">Receba nosso carinho e cuidado desde o primeiro contato!</h2>
        <p class="lead">Acolher você é um presente. Estamos prontos para ouvir, sonhar e servir ao seu lado</p>
        
        <div class="quote-box">
          <blockquote class="blockquote mb-0">
            <p>"Tudo que fizerem, faça de todo o coração, como para o Senhor, e não para os homens."</p>
           Colossenses 3:23
          </blockquote>
        </div>
      </section>

      <h3 class="text-center mb-4">Solicite sua Reserva</h3>

      <!-- Mensagens de status -->
      

      <form class="row g-4" method="POST" action="">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" name="nome" class="form-control" id="nome" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : ''; ?>" required />
        </div>
        
        <div class="col-md-6">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" class="form-control" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required />
          <div class="text-danger small" id="emailError"></div>
        </div>

        <div class="col-md-6">
          <label for="telefone" class="form-label">Telefone/Whatsapp</label>
          <input type="tel" name="telefone" class="form-control" id="telefone" value="<?php echo isset($_POST['telefone']) ? $_POST['telefone'] : ''; ?>" required />
          <div class="text-danger small" id="telefoneError"></div>
        </div>

        <div class="col-md-6">
          <label class="form-label">Tipo de Evento</label>
          <div class="d-flex flex-wrap gap-3">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_evento" value="Casamento" id="casamento" <?php echo (isset($_POST['tipo_evento']) && $_POST['tipo_evento'] == 'Casamento') ? 'checked' : ''; ?> required />
              <label class="form-check-label" for="casamento">Casamento</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_evento" value="Aniversário" id="aniversario" <?php echo (isset($_POST['tipo_evento']) && $_POST['tipo_evento'] == 'Aniversário') ? 'checked' : ''; ?> />
              <label class="form-check-label" for="aniversario">Aniversário</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_evento" value="Corporativo" id="corporativo" <?php echo (isset($_POST['tipo_evento']) && $_POST['tipo_evento'] == 'Corporativo') ? 'checked' : ''; ?> />
              <label class="form-check-label" for="corporativo">Corporativo</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo_evento" value="Chá de bebê" id="cha" <?php echo (isset($_POST['tipo_evento']) && $_POST['tipo_evento'] == 'Chá de bebê') ? 'checked' : ''; ?> />
              <label class="form-check-label" for="cha">Chá de bebê</label>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <label for="data" class="form-label">Data do Evento</label>
          <input type="date" name="date" class="form-control" id="data" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>" required />
        </div>

        <div class="col-md-6">
          <label for="hora" class="form-label">Hora do Evento</label>
          <input type="time" name="hora" class="form-control" id="hora" value="<?php echo isset($_POST['hora']) ? $_POST['hora'] : ''; ?>" required />
        </div>

        <div class="col-md-6">
          <label for="qtdpessoas" class="form-label">Número de Convidados</label>
          <select name="qtdpessoas" class="form-select" required>
            <option value="">Selecione</option>
            <option value="20 a 50 pessoas" <?php echo (isset($_POST['qtdpessoas']) && $_POST['qtdpessoas'] == '20 a 50 pessoas') ? 'selected' : ''; ?>>20 a 50</option>
            <option value="50 a 100 pessoas" <?php echo (isset($_POST['qtdpessoas']) && $_POST['qtdpessoas'] == '50 a 100 pessoas') ? 'selected' : ''; ?>>50 a 100</option>
            <option value="100 a 200 pessoas" <?php echo (isset($_POST['qtdpessoas']) && $_POST['qtdpessoas'] == '100 a 200 pessoas') ? 'selected' : ''; ?>>100 a 200</option>
            <option value="200 a 300 pessoas" <?php echo (isset($_POST['qtdpessoas']) && $_POST['qtdpessoas'] == '200 a 300 pessoas') ? 'selected' : ''; ?>>200 a 300</option>
          </select>
        </div>

        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg">Enviar Reserva</button>
        </div>
      </form>
    </div>
  </main>

  <div class="container my-5">
    <div class="row align-items-start">
      <div class="col-md-6 mb-4">
        <h5 class="fw-semibold mb-3">Endereço</h5>
        <p class="d-flex align-items-center text-muted fs-6">
          <i class="fa-solid fa-location-dot text-secondary me-2"></i>
          Rua Santa Cruz, 508 – Jd Florida, Campo Mourão – PR
        </p>

        <h5 class="fw-semibold mt-4">Redes Sociais</h5>
        <div class="d-flex flex-wrap gap-3 mt-3">
          <a href="https://wa.me/5544999212043" target="_blank" class="social-icon">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="https://www.instagram.com/ibasbuffet" target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/ibasbuffet" target="_blank" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="mailto:ibasbuffet@outlook.com?subject=Contato pelo site" target="_blank" class="social-icon">
            <i class="fas fa-envelope"></i>
          </a>
        </div>
      </div>

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

  <footer class="text-center py-4">
    <div class="container">
      <p class="mb-0">"Realizando as promessas de Deus". (Hebreus 10:36)</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Máscara para telefone
    const telefoneInput = document.getElementById('telefone');
    telefoneInput.addEventListener('input', function() {
      let valor = telefoneInput.value.replace(/\D/g, '');
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

    // Validação básica do formulário
    document.querySelector('form').addEventListener('submit', function(e) {
      let isValid = true;
      
      // Validar email
      const email = document.getElementById('email');
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email.value.trim())) {
        document.getElementById('emailError').textContent = 'E-mail inválido. Ex: exemplo@email.com';
        email.classList.add('is-invalid');
        isValid = false;
      } else {
        document.getElementById('emailError').textContent = '';
        email.classList.remove('is-invalid');
      }
      
      // Validar telefone
      const telefone = document.getElementById('telefone');
      const telefoneRegex = /^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/;
      if (!telefoneRegex.test(telefone.value.trim())) {
        document.getElementById('telefoneError').textContent = 'Telefone inválido. Ex: (44) 99921-2043';
        telefone.classList.add('is-invalid');
        isValid = false;
      } else {
        document.getElementById('telefoneError').textContent = '';
        telefone.classList.remove('is-invalid');
      }
      
      if (!isValid) {
        e.preventDefault();
      }
    });
  </script>
</body>
</html>