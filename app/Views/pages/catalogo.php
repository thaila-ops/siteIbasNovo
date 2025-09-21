<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<style>
    /* Reset e Configurações Gerais da Página */
    body {
        background-color: #fdf6ec;
        padding-top: 140px; /* Ajustado para o header fixo */
    }

    /* Filtros */
    .container-filter {
        margin: 30px auto;
        max-width: 1200px;
        padding: 0 20px;
        text-align: center;
    }

    .filter-btn {
        background: transparent;
        border: 2px solid #a68a64;
        color: #a68a64;
        padding: 10px 20px;
        margin: 0 8px;
        border-radius: 30px;
        font-family: "Playfair Display", serif;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-btn:hover, .filter-btn.active {
        background: #a68a64;
        color: white;
    }

    /* Seções (inicialmente escondidas exceto a primeira) */
    main > section {
        display: none;
    }

    main > section:first-of-type {
        display: block;
    }

    /* Estilo geral do menu */
    .menu {
        max-width: 1200px;
        margin: 60px auto;
        padding: 0 20px;
    }

    /* Cada prato (dish) */
    .dish {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        gap: 30px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        padding: 30px;
        margin-bottom: 40px;
    }

    .dish:nth-child(even) {
        flex-direction: row-reverse;
    }

    /* A REGRA MAIS IMPORTANTE PARA AS IMAGENS */
    .dish img {
        width: 300px;
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    .descricao {
        flex: 1;
        min-width: 300px;
    }

    .descricao h2 {
        font-family: 'Playfair Display', serif;
        font-size: 1.8em;
        color: #4b3621;
        margin-bottom: 15px;
    }

    .descricao p {
        text-align: left;
        font-size: 1.1em;
        color: #5c5c5c;
        margin-bottom: 15px;
        font-style: italic;
    }

    .descricao ol, .descricao ul, .descricao li {
        text-align: left;
        padding-left: 20px;
        margin-bottom: 0;
        list-style-position: inside;
    }

    .descricao li {
        font-size: 1em;
        line-height: 1.6;
        color: #333;
        margin-bottom: 5px;
    }

    /* Responsivo */
    @media (max-width: 768px) {
        .dish {
            flex-direction: column !important; /* Força a direção de coluna */
            text-align: center;
            align-items: center;
            padding: 20px;
        }

        .dish img {
            width: 100%;
            height: auto;
            margin: 0 auto 20px;
        }

        .container-filter {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    }
</style>

<main>
    <div class="text-center my-5" style="margin-top: 5rem !important;">
        <h1 class="display-4 fw-bold" style="font-family: 'Playfair Display', serif;">
            Sabores Abençoados para Momentos de Gratidão
        </h1>
        <p class="lead fst-italic mt-3" style="font-family: 'Playfair Display', serif; font-size: 1.25rem;">
            “Porque tudo o que Deus criou é bom, e nada deve ser rejeitado, desde que recebido com ação de graças.”
        </p>
        <p class="text-muted" style="font-family: 'Playfair Display', serif;"> — 1 Timóteo 4:4 </p>
    </div>

    <div class="pagination container-filter text-center my-4">
        <button class="filter-btn active" data-filter="all">Todos</button>
        <button class="filter-btn" data-filter="coquetel">Coquetel</button>
        <button class="filter-btn" data-filter="doce">Doces</button>
        <button class="filter-btn" data-filter="jantar">Jantares</button>
        <button class="filter-btn" data-filter="arabe">Árabe</button>
    </div>

   <section id="coquetel">
    <div class="menu">
        <div class="dish">
            <img src="/assets/imagens/tabua_de_frios.jpg" alt="tabua de frios">
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
            <img src="/assets/imagens/Queijo_Brie.jpg" alt="Brie">
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
            <img src="/assets/imagens/Coquetel.jpg" alt="Coquetel">
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
            <img src="/assets/imagens/Lanche_natural.jpg" style="float: right; margin-left: 1rem;" alt="Coquetel">
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
            <img src="/assets/imagens/Quiche.jpg" alt="Coquetel">
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
    </div>
</section>

<section id="doce">
    <div class="menu">
        <div class="dish">
            <img src="/assets/imagens/Sobremesa_de_morango.jpg" alt="Doce 1">
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
            <img src="/assets/imagens/IMG_0108.jpg" alt="Doce 2">
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
            <img src="/assets/imagens/Bolo_caseiro.jpg" alt="Doce 3">
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
            <img src="/assets/imagens/Pao_de_mel.jpg" alt="Doce 4">
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
            <img src="/assets/imagens/jantar.jpeg" alt="jantar 1">
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
            <img src="/assets/imagens/Paleta_suina.jpg" alt="jantar 2">
            <div class="descricao">
                <h2>Carnes</h2>
                <p>Assadas e grelhadas</p>
                <ul>
                    <li>Posta ao Molho Madeira</li>
                    <li>Paleta Súina Recheada</li>
                    <li>Medalhão de frango</li>
                    <li>Filé Mignon</li>
                    <li>Cordeiro ao vinho</li>
                    <li>Chester a Califórnia</li>
                    <li>Camarão na Moranga</li>
                    <li>Frango grelhado</li>
                    <li>File de Salmão</li>
                    <li>Frango Assado Desossado e Recheado</li>
                </ul>
            </div>
        </div>

        <div class="dish">
            <img src="/assets/imagens/IMG_0240.jpg" alt="jantar 3">
            <div class="descricao">
                <h2>Acompanhamentos</h2>
                <ul>
                    <li>fricassê </li>
                    <li>Rondelle</li>
                    <li>Lasanha</li>
                    <li>Nhoque</li>
                    <li>Risotos</li>
                    <li>Canelone</li>
                    <li>Penne</li>
                    <li>Escondidinhos</li>
                </ul>
            </div>
        </div>

        <div class="dish">
            <img src="/assets/imagens/Bacalhau.jpg" alt="jantar 4">
            <div class="descricao">
                <h2>Saladas e Entradas</h2>
                <p>De acordo com a necessidade do cliente</p>
                <ul>
                    <li>Mix de Folhas</li>
                    <li>Ceasar</li>
                    <li>Waldorf</li>
                    <li>Caprese</li>
                    <li>Legumes Cozidos</li>
                </ul>
                <h2>Para entradas </h2>
                <ul>
                    <li>Canapês</li>
                    <li>Parte Árabe</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="arabe">
    <div class="menu">
        <div class="dish">
            <img src="/assets/imagens/IMG_0876.jpg" alt="arabe 1">
            <div class="descricao">
                <h2>Pastas</h2>
                <p>Acompanha Pão sirio</p>
                <ul>
                    <li>Coalhada Seca Síria </li>
                    <li>Babaganush</li>
                    <li>Homus</li>
                </ul>
            </div>
        </div>

        <div class="dish">
            <img src="/assets/imagens/Quibe.jpg" alt="arabe 2">
            <div class="descricao">
                <h2>Saladas</h2>
                <p>De acordo com a necessidade do cliente</p>
                <ul>
                    <li>Escabeche de Berinjela</li>
                    <li>Tabule</li>
                    <li>Fatuche</li>
                    <li>Salada Árabe</li>
                </ul>
            </div>
        </div>

        <div class="dish">
            <img src="/assets/imagens/Parte_arabe.jpg" alt="Doce 3">
            <div class="descricao">
                <h2>ATAIF</h2>
                <ul>
                    <li>Shishbarak</li>
                    <li>Arroz Sultana: Castanha, Figo e Tâmaras</li>
                    <li>Mjadra (Arroz com lentilha)</li>
                    <li>Charutos</li>
                    <li>Abobrinhas Recheadas</li>
                    <li>Molho de Hotelã</li>
                </ul>
            </div>
        </div>

        <div class="dish">
            <img src="/assets/imagens/Quibe_no_palito.jpg" alt="Doce 4">
            <div class="descricao">
                <h2>Carnes</h2>
                <ul>
                    <li>Kafta no Espeto</li>
                    <li>Quibe Assado, Quibe Cru, Quibe Frito</li>
                    <li>Pernil de Carneiro</li>
                </ul>
            </div>
        </div>
    </div>
</section>

    </main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const sections = document.querySelectorAll('main > section');

        function filterSelection(filterValue) {
            sections.forEach(section => {
                if (filterValue === 'all' || section.id === filterValue) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const filterValue = this.getAttribute('data-filter');
                filterSelection(filterValue);
            });
        });

        // Simula o clique no botão 'Todos' para exibir tudo no início
        document.querySelector('.filter-btn[data-filter="all"]').click();
    });
</script>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>