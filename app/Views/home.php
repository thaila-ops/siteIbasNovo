<?php require_once __DIR__ . '/layouts/header.php'; ?>

<style>
    body {
        background-color: #fdf6ec;
    }

    .banner {
        height: 90vh; /* Ajustado para melhor visualização */
        background-image: url(/assets/imagens/IMG2_0375.jpg);
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #f8f5f0;
        position: relative;
    }

    .banner::after {
        content: "";
        position: absolute;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .banner-content {
        position: relative;
        z-index: 1;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 30px;
        border-radius: 10px;
        color: white;
    }

    .banner-content h1 {
        font-size: 2.5rem;
        font-family: "Playfair Display", serif;
        margin-bottom: 20px;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        color: white; /* Garante a cor branca */
    }

    .banner-content p {
        font-size: 1.2rem;
        max-width: 600px;
        margin: 0 auto;
        font-weight: 300;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        color: white; /* Garante a cor branca */
    }

    .banner-content .btn a {
        display: inline-block;
        margin-top: 25px;
        padding: 12px 25px;
        background-color: #a28c73;
        color: #fff;
        font-size: 1rem;
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .banner-content .btn a:hover {
        background-color: #DAA520; /* Usando cor de destaque */
    }

    .grid-produtos {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding: 40px 0;
    }

    .produto {
        background-color: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(49, 44, 0, 0.2);
        text-align: center;
        padding: 10px;
        text-decoration: none;
        color: inherit;
        transition: transform 0.3s ease;
    }

    .produto:hover {
        transform: translateY(-5px);
    }

    .produto img {
        width: 100%;
        max-height: 180px;
        object-fit: cover;
        border-radius: 8px;
    }

    .biografia {
        padding: 60px 20px;
        background-color: #fdf6ec;
    }

    .bio-box {
        background-color: #f8f5f0;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
</style>

<main>
    <section class="banner">
        <div class="banner-content">
            <h1>Experiência gastronômica<br> no conforto da sua casa</h1>
            <p>Iba's Buffet garante serviços de alta qualidade <br> para eventos em casa com seu toque personalizado.</p>
            <div class="btn">
                <a href="/reserva">Faça sua reserva</a>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <hr>
        <h2>Sobre nós</h2>
        <div class="texto">
            <p><strong>No Iba’s Buffet</strong>, acreditamos que experiências gastronômicas marcantes podem — e devem — acontecer no aconchego do seu lar. Nossa proposta vai além de servir pratos refinados: queremos transformar momentos simples em celebrações memoráveis.</p>
            <p>Com um toque de sofisticação e cuidado em cada detalhe, levamos até você a alta gastronomia em um formato intimista, personalizado e acolhedor. Da seleção dos ingredientes ao atendimento dedicado, tudo é pensado para proporcionar uma vivência única, onde o sabor encontra o carinho de um ambiente familiar.</p>
            <p>Cozinhamos com alma, servimos com amor — porque para nós, estar em casa nunca foi tão especial.</p>
        </div>
        <br>
        <hr>
        <br>

        <section class="produtos">
            <div class="grid-produtos">
                <a href="/catalogo" class="produto">
                    <img src="/assets/imagens/taboa_de_frios.jpeg" alt="coquetel">
                    <h3>Coquetel</h3>
                </a>
                <a href="/catalogo" class="produto">
                    <img src="/assets/imagens/prato_sobremesa.jpeg" alt="sobremesas">
                    <h3>Doces e sobremesas</h3>
                </a>
                <a href="/catalogo" class="produto">
                    <img src="/assets/imagens/jantar.jpeg" alt="jantar">
                    <h3>Jantares</h3>
                </a>
                <a href="/catalogo" class="produto">
                    <img src="/assets/imagens/arabe.jpeg" alt="arabe">
                    <h3>Comida Árabe</h3>
                </a>
            </div>
        </section>
    </div>

    <section id="sobre" class="biografia">
        <div class="container">
            <div class="bio-box">
                <div class="bio-grid">
                    <div class="bio-img">
                        <img class="img-perfil" src="/assets/imagens/Claudia.jpg" height="auto" alt="claudia viana iba">
                    </div>
                    <div class="bio-texto">
                        <h2>Claudia Viana Iba</h2>
                        <p>
                            Fundadora do Iba’s Buffet, uma mulher guiada por Deus e movida pelo amor à família. Com
                            carinho e dedicação, ela transforma cada evento em um momento de cuidado, sabor e acolhimento. Porque
                            para ela, cozinhar é servir com o coração — e servir é um ato de fé e amor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>