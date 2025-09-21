<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<style>
    /* Hero Section & Filtros */
    .hero-natal {
        text-align: center;
        margin-top: 5rem;
        margin-bottom: 2rem;
    }

    .container-filter {
        margin: 30px auto;
        max-width: 1200px;
        padding: 0 20px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .filter-btn {
        background: transparent;
        border: 2px solid #A68A64;
        color: #A68A64;
        padding: 12px 24px;
        border-radius: 30px;
        font-family: "Playfair Display", serif;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-btn:hover, .filter-btn.active {
        background: #A68A64;
        color: white;
        transform: translateY(-2px);
    }

    /* Estrutura dos Pratos (Biografia Style) */
    .biografia {
        display: none; /* Começa escondido, JS controla a exibição */
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 20px;
    }
    
    .bio-box {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        padding: 30px;
        margin-bottom: 40px;
    }

    .bio-grid {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 30px;
    }

    .bio-img {
        flex: 1;
        min-width: 300px;
    }

    .bio-img img {
        width: 100%;
        height: auto;
        border-radius: 12px;
    }

    .bio-texto {
        flex: 2;
        min-width: 300px;
    }

    .bio-texto h2 {
        font-size: 1.8rem;
        margin-bottom: 15px;
        color: #8B0000; /* Cor primária */
    }

    .bio-texto p {
        text-align: left;
        font-size: 1.1rem;
        color: #5c5c5c;
        line-height: 1.6;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .bio-grid {
            flex-direction: column;
            text-align: center;
        }
    }
</style>

<main>
    <div class="hero-natal">
        <h1 class="display-4 fw-bold">
            Que tal celebrar este dia único com sabor e afeto?
        </h1>
        <p class="lead fst-italic mt-3">
            Reserve seu prato e deixe o Natal ainda mais memorável.
        </p>
        <p class="text-muted">
            "Glória a Deus nas alturas, E paz na terra aos homens de boa vontade." — Lucas 2:14
        </p>
    </div>

    <div class="container-filter text-center my-4">
        <button class="filter-btn active" data-filter="all">Todos</button>
        <button class="filter-btn" data-filter="carnes">Carnes</button>
        <button class="filter-btn" data-filter="massas">Massas</button>
        <button class="filter-btn" data-filter="salada">Saladas</button>
        <button class="filter-btn" data-filter="sobremesa">Sobremesas</button>
    </div>

    <section id="carnes" class="biografia">
        <div class="bio-box">
            <div class="bio-grid">
                <div class="bio-img">
                    <img class="img-perfil" src="/assets/imagens/Paleta_suina.jpg" height="auto" alt="paleta_suina">
                </div>
                <div class="bio-texto">
                    <h2>Paleta suína</h2>
                    <p>Paleta suína assada e desossada, preparada com temperos especiais e recheada com uma combinação irresistível
            de cenoura, calabresa, bacon e vagem. Assada lentamente até alcançar maciez e sabor incomparáveis, é
            finalizada com um dourado perfeito que realça sua suculência. Acompanha farofa artesanal, tornando este
            prato a escolha ideal para uma ceia natalina marcante e repleta de sofisticação.</p>
                </div>
            </div>
        </div>
        <div class="bio-box">
            <div class="bio-grid">
                <div class="bio-img">
                    <img class="img-perfil" src="/assets/imagens/Camarao_na_moranga.jpg" height="auto" alt="camarãoMoranga">
                </div>
                <div class="bio-texto">
                    <h2>Camarão na Moranga</h2>
                    <p><strong>Camarão na Moranga com Catupiry</strong><br>
            Um clássico da gastronomia brasileira em versão natalina: moranga assada e recheada com camarões suculentos
            envoltos em um cremoso molho à base de Catupiry. Um prato que une sabor marcante, textura aveludada e
            apresentação irresistível, trazendo sofisticação e aconchego à mesa de celebração.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="massas" class="biografia">
        <div class="bio-box">
            <div class="bio-grid">
                <div class="bio-img">
                    <img class="img-perfil" src="/assets/imagens/Rondelli.PNG" height="auto" alt="rondeli">
                </div>
                <div class="bio-texto">
                    <h2>Rondeli</h2>
                    <p><strong>Rondeli de Presunto e Queijo ao Sugo</strong><br>
            Massa fresca cuidadosamente enrolada e recheada com presunto fatiado e queijo derretido, servida ao forno
            com um delicado molho ao sugo caseiro. Uma combinação clássica e irresistível que traz aconchego, sabor e a
            tradição das festas natalinas à sua mesa.</p>
                </div>
            </div>
        </div>
         <div class="bio-box">
            <div class="bio-grid">
                <div class="bio-img">
                    <img class="img-perfil" src="/assets/imagens/Lasanha.PNG" height="auto" alt="lasanha">
                </div>
                <div class="bio-texto">
                    <h2>Lasanha à Bolonhesa</h2>
                    <p><strong>Lasanha à Bolonhesa</strong><br>
            Camadas de massa artesanal intercaladas com um rico e encorpado molho bolonhesa, preparado com carne
            selecionada e tomates frescos, envoltas por um delicado creme de queijo gratinado ao forno. Um clássico
            atemporal que une tradição, sabor e elegância, perfeito para celebrar o espírito natalino em grande estilo.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="salada" class="biografia">
        <div class="bio-box">
            <div class="bio-grid">
                <div class="bio-img">
                    <img class="img-perfil" src="/assets/imagens/Salada_cozida.jpg" height="auto" alt="salada_cozida">
                </div>
                <div class="bio-texto">
                    <h2>Legumes no Vapor</h2>
                    <p>Uma combinação leve e colorida de cenoura, brócolis e couve-flor preparados no vapor, preservando sua
            textura delicada e sabor natural. Acompanha um molho especial exclusivo, que realça a frescura dos legumes e
            traz um toque refinado à sua ceia de Natal.</p>
                </div>
            </div>
        </div>
        <div class="bio-box">
            <div class="bio-grid">
                <div class="bio-img">
                    <img class="img-perfil" src="/assets/imagens/Salada_folhas.jpg" height="auto" alt="saladaFolhas">
                </div>
                <div class="bio-texto">
                    <h2>Salada Verde</h2>
                    <p><strong>Mix de Folhas Frescas</strong> <br>
            Seleção especial de folhas verdes crocantes e aromáticas, que harmonizam leveza e frescor em cada garfada.
            Servida com um molho delicado, é a entrada perfeita para equilibrar os sabores e trazer elegância à sua
            celebração de Natal.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sobremesa" class="biografia">
        <div class="bio-box">
            <div class="bio-grid">
                <div class="bio-img">
                    <img class="img-perfil" src="/assets/imagens/Sobremesa_de_morango.jpg" height="auto" alt="SobremesaDeMorango">
                </div>
                <div class="bio-texto">
                    <h2>Merengue de morango</h2>
                    <p><strong>Taça de Merengue de Morango com Suspiros</strong>
            Camadas suaves de chantilly e creme delicado se entrelaçam à doçura fresca dos morangos, finalizadas com
            suspiros crocantes que parecem derreter na boca. Uma sobremesa que combina leveza e encanto, trazendo à ceia
            natalina a sensação de celebrar a vida em cada colherada.</p>
                </div>
            </div>
        </div>
        <div class="bio-box">
            <div class="bio-grid">
                <div class="bio-img">
                    <img class="img-perfil" src="/assets/imagens/Damasco .jpg" height="auto" alt="Torta de Damasco">
                </div>
                <div class="bio-texto">
                    <h2>Torta de Damasco</h2>
                    <p>"Nossa torta de geleia de damasco é um abraço em forma de doce: massa macia, recheio delicadamente adocicado
            e um sabor que derrete na boca, perfeito para qualquer momento do dia."</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const sections = document.querySelectorAll('main > section.biografia');

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