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


  <link rel="stylesheet" href="../style.css/style1.css" />
  <link href="/imagens/Logo.png.jpg" rel="shortcut icon">

</head>
<a href="https://wa.me/5544999212043" class="whatsapp-float" target="_blank" title="Fale conosco no WhatsApp">
  <i class="fab fa-whatsapp me-1"></i>
</a>

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

  <div class="text-center my-5" style="margin-top: 5rem !important;">
    <h1 class="display-4 fw-bold" style="font-family: 'Playfair Display', serif;">
      Sabores Abençoados para Momentos de Gratidão
    </h1>
    <p class="lead fst-italic mt-3" style="font-family: 'Playfair Display', serif; font-size: 1.25rem;">
      “Porque tudo o que Deus criou é bom, e nada deve ser rejeitado, desde que recebido com ação de graças.”
    </p>
    <p class="text-muted" style="font-family: 'Playfair Display', serif;">
      — 1 Timóteo 4:4
    </p>
  </div>

  <div class="container-filter text-center my-4">
    <button class="filter-btn active" data-filter="all">Todos</button>
    <button class="filter-btn" data-filter="coquetel">Coquetel</button>
    <button class="filter-btn" data-filter="doce">Doces</button>
    <button class="filter-btn" data-filter="jantar">Jantares</button>
    <button class="filter-btn" data-filter="arabe">Árabe</button>
  </div>


  <section id="coquetel">
    <div class="menu">
      <div class="dish">
        <img src="/imagens/tabua_de_frios.jpg" alt="tabua de frios">
        <div class="descricao">
          <h2>Mesa de Frios</h2>
          <h2>Queijos</h2>
          <ol>
            <li>Parmesão</li>
            <li>Provolone</li>
            <li>Gouda </li>
            <li>Nozinho</li>
            <li>Gorgonzola</li>
          </ol>
        </div>
      </div>


      <div class="dish">
        <img src="/imagens/Queijo_Brie.jpg" alt="Brie">
        <div class="descricao">

          <h2>Embutidos</h2>
          <ol>
            <li>Salame Italiano</li>
            <li>Lombinho Defumado</li>
            <li>Copa</li>
            <li>Peito de Peru Defumado</li>
          </ol>
        </div>
      </div>

      <div class="dish">
        <div class="descricao">
          <h2>Complemento</h2>
          <ol>
            <li>Azeitona Verde e Preta</li>
            <li>Ovo de Codorna</li>
            <li>Palmito</li>
            <li>torradas</li>
            <li>frutas</li>
          </ol>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/Coquetel.jpg" alt="Coquetel">
        <div class="descricao">
          <h2>Ramequuins</h2>
          <p>(Assados)</p>
          <ol>
            <li>Risoto</li>
            <li>Batata Recheada</li>
            <li>Escondidinho de Carne Seca</li>
            <li>Penne</li>

          </ol>
        </div>
      </div>
      <div class="dish">
        <img src="/imagens/Lanche_natural.jpg" style="float: right; margin-left: 1rem;" alt="Coquetel">
        <div class="descricao">
          <h2>Finger Foods</h2>
          <ol>
            <li>Mini Quiche</li>
            <li>Canapés de Pepino Quente</li>
            <li>Canapés de Figo e Cream Cheease</li>
            <li>Espetinhos de Frios</li>
            <li>Espetinhos de Frango</li>
            <li>Espetinhos de Peito de Peru a California</li>
            <li>Pardúlas</li>
            <li>Baguetes com Tomate e Parmesão</li>
            <li>Tabletes Finas de Alho Poró</li>
            <li>Pastel Assado de Lombo e Ameixa </li>
            <li>Pastel Assado de Ricota e Tomate Seco </li>
            <li>Pastel Assado de Chester com Abacaxi</li>
            <li>Massa Wrap: Rúcula, Tomate Seco e Ricota</li>
            <li>Baquetes: Peito de Peru, Gorgonzola e Frango</li>
            <li>Empadinhas: Frango, Palmito, Bacalhau e Carne Seca</li>
            <li>Croquete de Bacalhau</li>
            <li>Empadão: Alho Poró, Frango, Palmito e Aspargos</li>
          </ol>
        </div>
      </div>
      <div class="dish">
        <img src="/imagens/Quiche.jpg" alt="Coquetel">
        <div class="descricao">
          <h2>Salgados Fritos e Assados </h2>
          <ol>
            <li>Pastel de Vento</li>
            <li>Coxinhas</li>
            <li>Quibe</li>
            <li>Risoles</li>
            <li>Empadinhas</li>
            <li>Esfiha</li>
          </ol>
        </div>
      </div>
  </section>

  <section id="doce">
    <div class="menu">
      <div class="dish">
        <img src="/imagens/Sobremesa_de_morango.jpg" alt="Doce 1">
        <div class="descricao">
          <h2>Tortas Doce</h2>
          <p>De Acordo com a sugestão da cliente</p>
          <ol>
            <li>Torta de Morango</li>
            <li>Torta de Damasco</li>
            <li>Torta Dois Amores</li>
            <li>Marta Rocha</li>
            <li>Torta de Abacaxi</li>
            <li>Strogonoff de Nozes</li>
          </ol>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/IMG_0108.jpg" alt="Doce 2">
        <div class="descricao">
          <h2>Doces Finos</h2>
          <p>De acordo com a sugestão do cliente</p>
          <ol>
            <li>Mini Banoffe</li>
            <li>brigadeiro</li>
            <li>Beijinho</li>
            <li>Dois Amores</li>
            <li>Bolo de Pote</li>
          </ol>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/Bolo_caseiro.jpg" alt="Doce 3">
        <div class="descricao">
          <h2>Bolos Caseiros</h2>
          <p>Para chás e coffe</p>
          <ol>
            <li>Bolo mesclados</li>
            <li>Bolo de Limão</li>
            <li>Bolo de Laranja</li>
            <li>Bolo de Coco</li>
            <li>Bolo de Chocolate</li>
          </ol>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/Pão_de_mel.jpg" alt="Doce 4">
        <div class="descricao">
          <h2>presente</h2>
          <p>De acordo com a necessidade do cliente</p>
          <ol>
            <li>Pão de Mel</li>
            <li>Bolos de pote</li>
            <li>CupCake</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section id="jantar">
    <div class="menu">
      <div class="dish">
        <img src="/imagens/jantar.jpeg" alt="jantar 1">
        <div class="descricao">
          <h2>Jantar Tradicional</h2>
          <p>De acordo com a necessidade do cliente, estamos sujeitas a mudanças no cardápio</p>
          <ol>
            <li>3 Tipos de Salada</li>
            <li>Arroz Branco </li>
            <li>Arroz Temperado</li>
            <li>1 Massa</li>
            <li>2 Carnes</li>
          </ol>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/Paleta_suína.jpg" alt="jantar 2">
        <div class="descricao">
          <h2>Carnes</h2>
          <p>Assadas e grelhadas</p>
          <li>Posta ao MOlho Madeira</li>
          <li>Paleta Súina Recheada</li>
          <li>Medalhão de frango</li>
          <li>Filé Mignon</li>
          <li>Cordeiro ao vinho</li>
          <li>Chester a Califórnia</li>
          <li>Camarão na Moranga</li>
          <li>Frango grelhado</li>
          <li>File de Salmão</li>
          <li>Frango Assado Desossado e Recheado</li>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/IMG_0240.jpg" alt="jantar 3">
        <div class="descricao">
          <h2>Acompanhamentos</h2>
          <li>fricassê </li>
          <li>Rondelle</li>
          <li>Lasanha</li>
          <li>Nhoque</li>
          <li>Risotos</li>
          <li>Canelone</li>
          <li>Penne</li>
          <li>Escondidinhos</li>

        </div>
      </div>

      <div class="dish">
        <img src="/imagens/Bacalhau.jpg" alt="jantar 4">

        <div class="descricao">
          <h2>Saladas e Entradas</h2>
          <p>De acordo com a necessidade do cliente</p>
          <li>Mix de Folhas</li>
          <li>Ceasar</li>
          <li>Waldorf</li>
          <li>Caprese</li>
          <li>Legumes Cozidos</li>
          <h2>Para entradas </h2>
          <li>Canapês</li>
          <li>Parte Árabe</li>

        </div>
      </div>

  </section>

  <section id="arabe">

    <div class="menu">
      <div class="dish">
        <img src="/imagens/IMG_0876.jpg" alt="arabe 1">
        <div class="descricao">
          <h2>Pastas</h2>
          <p>Acompanha Pão sirio</p>
          <li>Coalhada Seca Síria </li>
          <li>Babaganush</li>
          <li>Homus</li>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/Quibe.jpg" alt="arabe 2">
        <div class="descricao">
          <h2>Saladas</h2>
          <p>De acordo com a necessidade do cliente</p>
          <li>Escabeche de Berinjela</li>
          <li>Tabule</li>
          <li>Fatuche</li>
          <li>Salada Árabe</li>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/Parte_árabe.jpg" alt="Doce 3">
        <div class="descricao">
          <h2>ATAIF</h2>
          <li>Shishbarak</li>
          <li>Arroz Sultana: Castanha, Figo e Tâmaras</li>
          <li>Mjadra (Arroz com lentilha)</li>
          <li>Charutos</li>
          <li>Abobrinhas Recheadas</li>
          <li>Molho de Hotelã</li>
        </div>
      </div>

      <div class="dish">
        <img src="/imagens/Quibe_no_palito.jpg" alt="Doce 4">
        <div class="descricao">
          <h2>Carnes</h2>
          <li>Kafta no Espeto</li>
          <li>Quibe Assado, Quibe Cru, Quibe Frito</li>
          <li>Pernil de Carneiro</li>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
  crossorigin="anonymous"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        // Remove active class from all buttons
        filterBtns.forEach(btn => btn.classList.remove('active'));

        // Add active class to clicked button
        this.classList.add('active');

        const filterValue = this.getAttribute('data-filter');

        // Show all sections if 'all' is selected
        if (filterValue === 'all') {
          document.querySelectorAll('section').forEach(section => {
            section.style.display = 'block';
          });
        } else {
          // Hide all sections
          document.querySelectorAll('section').forEach(section => {
            section.style.display = 'none';
          });

          // Show selected section
          document.getElementById(filterValue).style.display = 'block';
        }
      });
    });
  });
</script>

</html>