<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Meta Tags Básicos -->
    <title>Tribal</title>
    <meta name="description" content="Tribal es una banda de heavy metal, doom metal y cosmic horror de Córdoba, Argentina. Descubre nuestra música, videos y próximos lanzamientos.">
    <meta name="keywords" content="Tribal, heavy metal, doom metal, cosmic horror, metal córdoba, banda argentina, metal argentino, Nyarlathotep">
    <meta name="robots" content="index, follow">
    <!-- WhatsApp específico -->
    <link rel="image_src" href="https://tribalheavymetal.com/assets/Tribal_Perfil.jpg">
    <meta property="og:image:secure_url" content="https://tribalheavymetal.com/assets/Tribal_Perfil.jpg">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_AR">
    <meta property="og:site_name" content="Tribal Heavy Metal">
    <meta property="og:url" content="https://tribalheavymetal.com/">
    <meta property="og:title" content="Tribal - Metal Band from Córdoba">
    <meta property="og:description" content="Banda de heavy metal de Córdoba, Argentina. Fusionando elementos de cosmic horror con metal pesado.">
    <meta property="og:image" content="https://tribalheavymetal.com/assets/Tribal_Perfil.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="Logo de Tribal">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://tribalheavymetal.com/">
    <meta property="twitter:title" content="Tribal - Metal Band from Córdoba">
    <meta property="twitter:description" content="Banda de heavy metal y doom metal de Córdoba, Argentina. Fusionando elementos de cosmic horror con metal pesado.">
    <meta property="twitter:image" content="https://tribalheavymetal.com/assets/Tribal_Perfil.jpg">
    <meta name="twitter:image:alt" content="Logo de Tribal">

    <!-- Meta Tags Adicionales -->
    <meta name="author" content="Tribal">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
    <meta name="geo.region" content="AR-X">
    <meta name="geo.placename" content="Córdoba">
    <meta name="geo.position" content="-31.4167;-64.1833">
    <link rel="icon" type="image/jpg" sizes="32x32" href="assets/Tribal_Perfil.jpg">
    <link rel="icon" type="image/jpg" sizes="192x192" href="assets/Tribal_Perfil.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bruno+Ace+SC&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Video de fondo -->
    <div class="video-background">
        <video autoplay muted loop id="metalVideo">
            <source src="video/background.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>

    <!-- Contenido principal -->
    <div class="container content-center">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <!-- Logo de la banda -->
                <img src="assets/tribal_perfil.png" alt="Nombre de la Banda" class="band-logo mb-4">

                <!-- Redes sociales -->
                <div class="social-icons mb-4">
                    <a href="https://www.facebook.com/TribalHeavy/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/tribalmetal/?hl=es-la" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@tribal.heavy.metal" class="social-icon"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/@tribalheavymetal8647" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="https://open.spotify.com/artist/00qFLRSlYmbf1SteMtPMr0?si=WbsTtDFiTi-FbjyecT6LKQ" class="social-icon"><i class="fab fa-spotify"></i></a>
                    <a href="https://tribalmetal.bandcamp.com/track/nyarlathotep" class="social-icon"><i class="fab fa-bandcamp"></i></a>
                </div>

                <!-- Enlaces -->
                <div class="link-list">
                    <a href="inicio.php" class="link-item">Inicio</a>
                    <a href="#" class="link-item-disabled">Próximos Conciertos</a>
                    <a href="#" class="link-item-disabled">Merchandising</a>
                    <a href="contactos.php" class=" link-item">Contacto</a>
                    <a href="metro.php" class="link-item">Metronomicon</a>
                </div>

                <!-- Copyright -->
                <div class="copyright mt-4">
                    &copy; <?php echo date("Y"); ?> Tribal. Todos los derechos reservados.
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS personalizado -->
    <script src="scripts.js"></script>
</body>

</html>