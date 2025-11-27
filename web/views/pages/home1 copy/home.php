<!--=================================

HEAD - META TAGS Y CONFIGURACIÓN

==================================-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lotto Sorteos - Sorteos Legales y Transparentes</title>
  <meta name="description" content="Participa en sorteos legales basados en la Lotería Nacional Mexicana. Gana premios increíbles como casas, autos y efectivo. ¡Tu oportunidad está aquí!">
  <meta name="author" content="Lotto Sorteos">
  <meta name="keywords" content="sorteos, lotería, México, premios, rifas legales, Lotería Nacional">

  <meta property="og:title" content="Lotto Sorteos - Sorteos Legales y Transparentes">
  <meta property="og:description" content="Participa en sorteos legales basados en la Lotería Nacional Mexicana. Gana premios increíbles.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://lovable.dev/opengraph-image-p98pqg.png">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@Lovable">
  <meta name="twitter:image" content="https://lovable.dev/opengraph-image-p98pqg.png">

  <!--=================================

  GOOGLE FONTS

  ==================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <!--=================================

  TAILWIND CSS CDN Y CONFIGURACIÓN

  ==================================-->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="views/assets/js/tailwind.config.js"></script>

  <!--=================================

  CSS PERSONALIZADO

  ==================================-->
  <link rel="stylesheet" href="views/assets/css/styles.css">
</head>
<body>
  <div class="min-h-screen">
    <!--=================================

    INCLUSIÓN DE COMPONENTES PHP - ELEMENTOS DE HOME

    ==================================-->
    <?php 
    // Ruta base para incluir módulos (desde web/views/pages/home/ hacia web/views/)
    $base_path = dirname(dirname(__DIR__)); // Apunta a web/views/
    
    // Navbar
    if (file_exists($base_path . '/modules/navbar/navbar.php')) {
      include $base_path . '/modules/navbar/navbar.php'; 
    }
    
    // Hero (Sección principal de Home)
    if (file_exists($base_path . '/modules/hero/hero.php')) {
      include $base_path . '/modules/hero/hero.php'; 
    }
    
    // Footer
    if (file_exists($base_path . '/modules/footer/footer.php')) {
      include $base_path . '/modules/footer/footer.php'; 
    }
    ?>
  </div>

  <!--=================================

  JAVASCRIPT

  ==================================-->
  <script src="views/assets/js/main.js"></script>
</body>
</html>

