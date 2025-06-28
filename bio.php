<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" sizes="32x32" href="assets/Tribal_Perfil.jpg">
    <link rel="icon" type="image/jpg" sizes="192x192" href="assets/Tribal_Perfil.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/regular.min.css" integrity="sha512-j+P0XpTXw+hDTK64xqC/cjv62cf629/IR4/0bokmich7J8XdVlWT40+1M/Z58rCQ4F+3QoJIfzh6Ui6TTIP6WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bruno+Ace+SC&display=swap" rel="stylesheet">
    <title>Tribal - Bio</title>
</head>

<body>
    <?php require("estructuras/header.php") ?>

    <section class="background-section">
        <div id="container-text" class="container-text">
            <p>Tribal es una banda nacida en el año 2011 en la provincia de Córdoba, Argentina. La banda da sus primeros pasos conformada por el vocalista Gonzalo Civita, el guitarrista Franco Andino, el baterista Matías Frías, y el bajista Matias Avila.
                La agrupación alcanza su solidez con la formación ya nombrada, luego de años de ingresos y egresos de integrantes a cargo de las frecuencias bajas y la percusión.
                </br>
                En el año 2019 publicaron su primer trabajo discográfico, álbum homónimo que se puede encontrar en las principales plataformas digitales y en formato físico CD. El álbum fue grabado entre enero y septiembre del 2019 en AV Estudio y producido junto a Matías Takaya. La distribución física y digital fue llevada a cabo por el sello independiente Sonic Caravan.
                </br>
                El álbum cuenta con cuatros sencillos con sus correspondientes artes de portadas, ya que la banda considera importante cuidar y resaltar todos los disparadores artísticos de su entorno.
                Actualmente la banda se encuentra en proceso de grabación de su segundo álbum, cuya fecha de publicación se estima para mediados del corriente año ( 2024).
            </p>
        </div>
    </section>

    <?php require("estructuras/music-section.php") ?>

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