<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<main class="container my-5">
    <div class="form-container">
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold">Iba's Buffet</h1>
            <h2 class="h3 text-muted">Receba nosso carinho e cuidado desde o primeiro contato!</h2>
            <p class="lead">Acolher você é um presente. Estamos prontos para ouvir, sonhar e servir ao seu lado.</p>
            
            <div class="quote-box mt-4">
                <blockquote class="blockquote mb-0">
                    <p>"Tudo que fizerem, faça de todo o coração, como para o Senhor, e não para os homens."</p>
                    <footer class="blockquote-footer">Colossenses 3:23</footer>
                </blockquote>
            </div>
        </section>

        <h3 class="text-center mb-4">Solicite sua Reserva</h3>

        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success text-center" role="alert">
                <?= $_SESSION['success_message']; ?>
                <?php unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $_SESSION['error_message']; ?>
                <?php unset($_SESSION['error_message']); ?>
            </div>
        <?php endif; ?>

        <form class="row g-4" method="POST" action="/reserva">
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
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipo_evento" value="Casamento" id="casamento" required />
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
                        <input class="form-check-input" type="radio" name="tipo_evento" value="Chá de bebê" id="cha" />
                        <label class="form-check-label" for="cha">Chá de bebê</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <label for="data_evento" class="form-label">Data do Evento</label>
                <input type="date" name="data_evento" class="form-control" id="data_evento" required />
            </div>

            <div class="col-md-6">
                <label for="hora_evento" class="form-label">Hora do Evento</label>
                <input type="time" name="hora_evento" class="form-control" id="hora_evento" required />
            </div>

            <div class="col-md-6">
                <label for="num_convidados" class="form-label">Número de Convidados</label>
                <input type="number" name="num_convidados" class="form-control" id="num_convidados" min="1" required>
            </div>

            <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg">Enviar Solicitação</button>
            </div>
        </form>
    </div>

    <div class="row align-items-start mt-5">
        <div class="col-md-6 mb-4">
            <h5 class="fw-semibold mb-3">Endereço</h5>
            <p class="d-flex align-items-center text-muted fs-6">
                <i class="fa-solid fa-location-dot text-secondary me-2"></i>
                Rua Santa Cruz, 508 – Jd Florida, Campo Mourão – PR
            </p>
            <h5 class="fw-semibold mt-4">Redes Sociais</h5>
            <div class="d-flex flex-wrap gap-3 mt-3">
                <a href="https://wa.me/5544999212043" target="_blank" class="fs-4 text-dark"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/ibasbuffet" target="_blank" class="fs-4 text-dark"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/ibasbuffet" target="_blank" class="fs-4 text-dark"><i class="fab fa-facebook-f"></i></a>
                <a href="mailto:ibasbuffet@outlook.com?subject=Contato pelo site" target="_blank" class="fs-4 text-dark"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="rounded-3 shadow-sm overflow-hidden" style="height: 320px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.39575510255!2d-52.37000938448168!3d-24.0519369845115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed74f7b2d5b6b1%3A0x4a01c0b3b2d1c6b1!2sR.%20Santa%20Cruz%2C%20508%20-%20Jardim%20Florida%2C%20Campo%20Mour%C3%A3o%20-%20PR%2C%2087302-050!5e0!3m2!1spt-BR!2sbr!4v1663190873155!5m2!1spt-BR!2sbr"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</main>

<script>
    // Máscara para telefone
    const telefoneInput = document.getElementById('telefone');
    if (telefoneInput) {
        telefoneInput.addEventListener('input', function(e) {
            let valor = e.target.value.replace(/\D/g, '');
            valor = valor.substring(0, 11); // Limita a 11 dígitos
            if (valor.length > 10) {
                valor = valor.replace(/^(\d\d)(\d{5})(\d{4}).*/, '($1) $2-$3');
            } else if (valor.length > 5) {
                valor = valor.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, '($1) $2-$3');
            } else if (valor.length > 2) {
                valor = valor.replace(/^(\d\d)(\d{0,5}).*/, '($1) $2');
            } else {
                valor = valor.replace(/^(\d*)/, '($1');
            }
            e.target.value = valor;
        });
    }

    // Validação básica do formulário
    const form = document.querySelector('form');
    if(form) {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            // Validar email
            const email = document.getElementById('email');
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value.trim())) {
                emailError.textContent = 'E-mail inválido. Ex: exemplo@email.com';
                isValid = false;
            } else {
                emailError.textContent = '';
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    }
</script>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>