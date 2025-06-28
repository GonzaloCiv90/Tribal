<section id="contacto" class="py-5 bg-dark text-white ">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <!-- Formulario de contacto -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="mb-3" style="font-family: 'Bebas Neue', sans-serif;">Contacto</h2>
                <div id="alerta-contacto" style="display:none;"></div>
                <form id="formulario" action="send.php" method="POST" class="bg-transparent p-4 rounded shadow-lg">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control bg-dark text-white border-secondary" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control bg-dark text-white border-secondary" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control bg-dark text-white border-secondary" id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>
                    <!-- reCAPTCHA widget -->
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                    <div class="d-grid">
                        <button id="enviar" type="submit" class="cta-button">
                            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            Enviar mensaje
                        </button>
                    </div>
                </form>
            </div>
            <!-- Redes sociales -->
            <div class="col-md-5 text-center">
                <h3 class="mb-3" style="font-family: 'Bebas Neue', sans-serif;">Redes Sociales</h3>
                <div class="social-icons mb-2">
                    <a href="https://www.facebook.com/TribalHeavy/" class="text-white me-3" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com/tribalmetal/?hl=es-la" class="text-white me-3" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://www.tiktok.com/@tribal.heavy.metal" class="text-white me-3" target="_blank"><i class="fab fa-tiktok fa-2x"></i></a>
                    <a href="https://open.spotify.com/intl-es/artist/00qFLRSlYmbf1SteMtPMr0?si=dbyne4AMQrqec-LScknBxA" class="text-white me-3" target="_blank"><i class="fab fa-spotify fa-2x"></i></a>
                    <a href="https://www.youtube.com/@tribalheavymetal8647/videos" class="text-white me-3" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                    <a href="https://tribalmetal.bandcamp.com/" class="text-white me-3" target="_blank"><i class="fab fa-bandcamp fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>