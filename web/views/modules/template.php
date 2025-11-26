<?php

/*==================================
Capturar las rutas de la URL
==================================*/ 

$routesArray = explode("/",$_SERVER["REQUEST_URI"]);
echo "<pre>";
print_r($routesArray);
echo "</pre>";

array_shift($routesArray);

foreach ($routesArray as $key => $value) {
    $routesArray[$key] = explode("?", $value)[0];
}

?>

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
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              DEFAULT: 'hsl(142 76% 36%)',
              foreground: 'hsl(0 0% 100%)',
              dark: 'hsl(142 76% 28%)',
            },
            secondary: {
              DEFAULT: 'hsl(45 100% 51%)',
              foreground: 'hsl(142 30% 15%)',
            },
            background: 'hsl(0 0% 100%)',
            foreground: 'hsl(142 30% 15%)',
            muted: {
              DEFAULT: 'hsl(142 20% 96%)',
              foreground: 'hsl(142 15% 45%)',
            },
            border: 'hsl(142 20% 90%)',
          },
          fontFamily: {
            sans: ['Inter', 'system-ui', 'sans-serif'],
            display: ['Montserrat', 'system-ui', 'sans-serif'],
          },
          borderRadius: {
            lg: '0.75rem',
            md: 'calc(0.75rem - 2px)',
            sm: 'calc(0.75rem - 4px)',
          },
        },
      },
    }
  </script>

  <!--=================================

  CSS PERSONALIZADO

  ==================================-->
  <link rel="stylesheet" href="views/assets/css/styles.css">
</head>
<body>
  <div class="min-h-screen">
    <!--=================================

    INCLUSIÓN DE COMPONENTES PHP

    ==================================-->
    <?php 
    $base_path = dirname(dirname(__DIR__)); // Apunta a web/
    if (file_exists($base_path . '/views/modules/navbar/navbar.php')) {
      include $base_path . '/views/modules/navbar/navbar.php'; 
    }
    if (file_exists($base_path . '/views/modules/hero/hero.php')) {
      include $base_path . '/views/modules/hero/hero.php'; 
    }
    if (file_exists($base_path . '/views/modules/faq/faq.php')) {
      include $base_path . '/views/modules/faq/faq.php'; 
    }
    if (file_exists($base_path . '/views/modules/footer/footer.php')) {
      include $base_path . '/views/modules/footer/footer.php'; 
    }
    ?>
  </div>

  <!--=================================

  JAVASCRIPT

  ==================================-->
  <script src="views/assets/js/main.js"></script>
</body>
</html>
