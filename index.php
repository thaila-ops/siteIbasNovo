<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iba's Buffet</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-yHfM4D5xYcHc8MIhBhHtL9BRDOoN0uRM3kskmvwlLoAhDQ/IuCB6v0IZI1iUvXkYOiMd9Rvi9BkD+fS2gk0PRA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style2.css/style.css">
  <link href="../imagens/Logo.png.jpg" rel="shortcut icon">

</head>


<body>
  <a href="https://wa.me/5544999212043" class="whatsapp-float" style=" background-color: greenyellow" target="_blank"
    title="Fale conosco no WhatsApp">
    <i class="fab fa-whatsapp me-1"></i>
  </a>
  <header>



    <div class="container">
      <nav>
        <img src="imagens/novo_logo.jpg" width= "120px" alt="ibas">

        <div class="nav-left">
          <a href="index.php?pagina=home">Home</a>
          <a href="paginas/contato.php?pagina=contato">Contato</a>
          <a href="paginas/menuNatal.php?pagina=menuNatal">Menu de Natal</a>
          <a href="paginas/catalogo.php?pagina=catalogo">Catálogo</a>
          <a href="paginas/login.php?pagina=login" class="login">
            <i class="fas fa-user-circle"></i> Login  </a>
        </div>
      </nav>

      <main>
        <?php
        //recuperar a variavel
        $pagina = $_GET["pagina"] ?? "home";
        $pagina = "paginas/{$pagina}.php";
        //se a pagina existe
        if (file_exists($pagina)) {
          include $pagina;
        } else {
          include "paginas/404.php";
        }
        ?>

      </main>



      <div class="position-fixed" style="top: 190px; right: 20px; z-index: 9999; background-color: #a87c5f;">
        <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-light">
            <strong class="me-auto">Iba’s Buffet 💛</strong>
            <small>Agora mesmo</small>
            <button type="button" class="btn-close " data-bs-dismiss="toast" aria-label="Fechar"></button>
          </div>
          <div class="toast-body">
            Que bom ter você por aqui! ✨<br>
            Considere nos seguir lá no <strong>Instagram</strong>:<br>
            <a href="https://www.instagram.com/ibasbuffet" class="text-decoration-none" target="_blank">
              <i class="fab fa-instagram me-1 text-danger"></i> @ibasbuffet
            </a>
          </div>
        </div>
      </div>




      <section class="banner">
        <div class="banner-content">

          <h1>
            Experiência gastronômica<br> no conforto da sua casa</h1>

          </p>
          Iba's Buffet garante serviços de alta qualidade <br> para eventos em casa com seu toque personalizado.

          </p>

          <div class="btn">
            <a href="paginas/reserva.php?pagina=reserva" class="test">Faça sua reserva de Natal!</a>
          </div>

        </div>


      </section>
      <br>
      <br>
      <hr>
      <main>
        <h2>Sobre nós</h2>
        <div class="texto">
          <p><strong>No Iba’s Buffet</strong>, acreditamos que experiências gastronômicas marcantes podem — e devem —
            acontecer no aconchego do
            seu lar. Nossa proposta vai além de servir pratos refinados: queremos transformar momentos simples em
            celebrações
            memoráveis.

            Com um toque de sofisticação e cuidado em cada detalhe, levamos até você a alta gastronomia em um formato
            intimista, personalizado e acolhedor. Da seleção dos ingredientes ao atendimento dedicado, tudo é pensado
            para
            proporcionar uma vivência única, onde o sabor encontra o carinho de um ambiente familiar.

            Cozinhamos com alma, servimos com amor — porque para nós, estar em casa nunca foi tão especial.</p>
        </div>
        <br>
        <hr>
        <br>

        <section class="produtos">
          <div class="grid-produtos">
            <a href="#coquetel" class="produto">
              <img src="imagens/taboa_de_frios.jpeg" width="140px" alt="coquetel">
              <h3>Coquetel</h3>
            </a>
            <a href="#doce" class="produto">
              <img src="imagens/prato_sobremesa.jpeg" width="140px" alt="sobremesas">
              <h3>Doces e sobremesas</h3>
            </a>
            <a href="#jantar" class="produto">
              <img src="imagens/jantar.jpeg" width="140px" alt="jantar">
              <h3>Jantares</h3>
            </a>
            <a href="#arabe" class="produto">
              <img src="imagens/arabe.jpeg" width="140px" alt="arabe">
              <h3>Comida Árabe</h3>
            </a>
          </div>
        </section>
      </main>


      <section id="sobre" class="biografia">
        <div class="bio-box">
          <div class="bio-grid">
            <div class="bio-img">
              <img class="img-perfil" src="imagens/Claudia.jpg" height="auto" alt="claudia viana iba">
            </div>
            <div class="bio-texto">
              <h2>Claudia viana Iba</h2>
              <p>
                Fundadora do Iba’s Buffet, uma mulher guiada por Deus e movida pelo amor à família. Com
                carinho e dedicação, ela transforma cada evento em um momento de cuidado, sabor e acolhimento. Porque
                para
                ela, cozinhar é servir com o coração — e servir é um ato de fé e amor.
              </p>

            </div>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="container">

          <p>
            "Realizando as promessas de Deus". <br>
            (Hebreus 10:36)
          </p>
          <hr>
          <p>
            <a href="https://www.facebook.com/share/1AePV4BFf4/?mibextid=wwXIfr" title="Facebook">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/ibasbuffet?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
              title="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="mailto:ibasbuffet@outlook.com?subject=contato pelo site&Olá, gostaria de mais informações."
              target="_blank">
              <i class="fas fa-envelope me-1"></i>
            </a>
          </p>
        </div>
      </footer>


</body>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var toastEl = document.getElementById('liveToast');
    var toast = new bootstrap.Toast(toastEl, {
      delay: 100000
    });
    toast.show();
  });
</script>
<script>
  function mostrarMenu() {
    //document.querySelector(".header-menu")
    $(".nav-left").toggle();
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</html>