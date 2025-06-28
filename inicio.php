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
</head>

<body>

    <?php require("estructuras/header.php") ?>

    <section id="band" class="band">
        <div class="band-large">
            <div class="band-member large-screen">
                <img src="assets/musico1.jpg" alt="Músico 1">
                <div class="member-info">Franco Andino</div>
            </div>
            <div class="band-member large-screen">
                <img src="assets/musico2.jpg" alt="Músico 2">
                <div class="member-info">Matias Frias</div>
            </div>
            <div class="band-member large-screen">
                <img src="assets/musico3.jpg" alt="Músico 3">
                <div class="member-info">Matias Avila</div>
            </div>
            <div class="band-member large-screen">
                <img src="assets/musico4.jpg" alt="Músico 4">
                <div class="member-info">Gonzalo Civita</div>
            </div>
        </div>
        <div class="band-small">
            <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/musico1.jpg" class="d-block w-100" alt="Uniforme de trabajo">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/musico2.jpg" class="d-block w-100" alt="condensador aire acondicionado">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/musico3.jpg" class="d-block w-100" alt="aire acondicionado central">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/musico4.jpg" class="d-block w-100" alt="aire acondicionado central">
                    </div>
                </div>
                <div class="overlay">
                    <div class="text-white d-flex flex-column justify-content-center align-items-center h-100 ps-2">
                        <h1>Lo ves, lo crees, ya están aquí</h1>
                        <h2>La música mantiene calmado al estúpido dios omnipotente...</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <sectiom id="new-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm m-auto">
                    <h2>Nyarlathotep</h2>
                    <p>Escúchalo en todas las platoformas digitales</p>
                    <div class="social-icons mb-2">
                        <a href="https://www.facebook.com/TribalHeavy/" class="text-white me-3" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.instagram.com/tribalmetal/?hl=es-la" class="text-white me-3" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://www.tiktok.com/@tribal.heavy.metal" class="text-white me-3" target="_blank"><i class="fab fa-tiktok fa-2x"></i></a>
                        <a href="https://open.spotify.com/intl-es/artist/00qFLRSlYmbf1SteMtPMr0?si=dbyne4AMQrqec-LScknBxA" class="text-white me-3" target="_blank"><i class="fab fa-spotify fa-2x"></i></a>
                        <a href="https://www.youtube.com/watch?v=8N6Lo7K0Odg" class="text-white me-3" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                        <a href="https://tribalmetal.bandcamp.com/track/nyarlathotep" class="text-white me-3" target="_blank"><i class="fab fa-bandcamp fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="assets/Nyarlathotep.jpg" class="w-100 img-fluid" alt="Nyarlathotep - Tribal">
                </div>
            </div>
        </div>
    </sectiom>
    <sectiom id="newvideo-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm m-auto">
                    <h2>Iluminados</h2>
                    <p>Ya puedes escuchar nuestro nuevo sencillo. <br>Un adelanto de nuestro próximo álbum.</p>
                    <div class="social-icons mb-2">
                        <a href="https://www.facebook.com/TribalHeavy/" class="text-white me-3" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.instagram.com/tribalmetal/?hl=es-la" class="text-white me-3" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://www.tiktok.com/@tribal.heavy.metal" class="text-white me-3" target="_blank"><i class="fab fa-tiktok fa-2x"></i></a>
                        <a href="https://open.spotify.com/intl-es/artist/00qFLRSlYmbf1SteMtPMr0?si=dbyne4AMQrqec-LScknBxA" class="text-white me-3" target="_blank"><i class="fab fa-spotify fa-2x"></i></a>
                        <a href="https://www.youtube.com/watch?v=12mlGGk-Luo" class="text-white me-3" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                        <a href="https://tribalmetal.bandcamp.com/track/iluminados" class="text-white me-3" target="_blank"><i class="fab fa-bandcamp fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="assets/Tribaliluminados.jpg" class="w-100 img-fluid" alt="Iluminados - Tribal">
                </div>
            </div>
        </div>
    </sectiom>

    <?php require("estructuras/music-section.php") ?>

    <section id="video-section">
        <h2>Videos</h2>
        <div class="videos-container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card bg-transparent align-items-center">
                        <iframe width="auto" height="auto" src="https://www.youtube.com/embed/ksyJTS73gGo?si=z-DhQp_Tah3KrH0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">Último Viaje</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent align-items-center">
                        <iframe width="auto" height="auto" src="https://www.youtube.com/embed/Yplmoz1iVas?si=XWSNPL2wHH7WqDsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">Manantial de Cólera - Video lyric </h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent align-items-center">
                        <iframe width="auto" height="auto" src="https://www.youtube.com/embed/TwUN8jvD32w?si=9qSMD10d4pFl_CRP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">C.O.S.M.O.S.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://www.youtube.com/@tribalheavymetal8647/videos" class="view-more-link" target="_blank" alt="Ver mas videos" title="Encuentra mas videos de Tribal en Youtube">See more <i class="bi bi-youtube"></i></a>
    </section>

    <?php require("estructuras/footer.php") ?>

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
</body>

</html>