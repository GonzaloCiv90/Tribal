<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

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
    <link rel="icon" type="image/jpg" sizes="16x16" href="assets/Tribal_Perfil.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/regular.min.css" integrity="sha512-j+P0XpTXw+hDTK64xqC/cjv62cf629/IR4/0bokmich7J8XdVlWT40+1M/Z58rCQ4F+3QoJIfzh6Ui6TTIP6WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bruno+Ace+SC&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LfAaXArAAAAADfutA_Rqxqe6q2BywOyO8P7KObQ"></script>
</head>

<body>

    <?php require("estructuras/header.php") ?>

    <?php require("estructuras/contacto.php") ?>

    <?php require("estructuras/footer-sinredes.php") ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navLinks = document.querySelectorAll(".navbar-nav a");
            var navCollapse = document.querySelector(".navbar-collapse");

            navLinks.forEach(function(link) {
                link.addEventListener("click", function() {
                    if (navCollapse.classList.contains("show")) {
                        document.querySelector(".navbar-toggler").click();
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <script src="send.js"></script>
</body>

</html>