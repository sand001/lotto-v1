# Lotto Sorteos - Proyecto PHP

Este proyecto ha sido convertido de React/TypeScript a PHP con JavaScript vanilla y HTML.

## Estructura del Proyecto

```
lucky-lottery-hub-1/
├── index.php              # Archivo principal PHP
├── includes/              # Componentes PHP reutilizables
│   ├── navbar.php        # Barra de navegación
│   ├── hero.php          # Sección hero
│   ├── faq.php           # Preguntas frecuentes
│   └── footer.php        # Pie de página
├── assets/               # Recursos estáticos (imágenes)
│   └── hero-money.jpg
├── css/                  # Estilos CSS
│   └── styles.css        # Estilos personalizados
├── js/                   # JavaScript
│   └── main.js           # Funcionalidad interactiva
└── .htaccess             # Configuración Apache
```

## Requisitos

- PHP 7.4 o superior
- Servidor web (Apache recomendado)
- Módulo mod_rewrite de Apache habilitado (para .htaccess)

## Instalación

1. Asegúrate de tener PHP instalado en tu sistema
2. Si usas Apache, el archivo `.htaccess` ya está configurado
3. Si usas otro servidor (Nginx, etc.), ajusta la configuración según corresponda

## Ejecutar el Proyecto

### Opción 1: Servidor PHP incorporado (desarrollo)

```bash
php -S localhost:8000
```

Luego abre tu navegador en: `http://localhost:8000`

### Opción 2: Apache/XAMPP/WAMP

1. Coloca el proyecto en la carpeta `htdocs` (XAMPP) o `www` (WAMP)
2. Accede a través de: `http://localhost/lucky-lottery-hub-1`

### Opción 3: Servidor de desarrollo con PHP

```bash
# Con PHP 8+
php -S localhost:8000 -t .
```

## Características

- ✅ Diseño responsive
- ✅ Menú móvil funcional
- ✅ Acordeón de FAQ interactivo
- ✅ Scroll suave entre secciones
- ✅ Estilos con Tailwind CSS (CDN)
- ✅ Fuentes de Google Fonts
- ✅ Animaciones CSS

## Tecnologías Utilizadas

- **PHP**: Backend y renderizado del servidor
- **HTML5**: Estructura semántica
- **CSS3**: Estilos personalizados y Tailwind CSS
- **JavaScript (Vanilla)**: Interactividad sin frameworks
- **Tailwind CSS CDN**: Framework de utilidades CSS

## Funcionalidades JavaScript

- Toggle del menú móvil
- Acordeón de preguntas frecuentes
- Scroll suave para enlaces de anclaje
- Cierre automático del menú móvil al hacer clic en enlaces

## Personalización

### Colores

Los colores se definen en `css/styles.css` mediante variables CSS:

```css
:root {
  --primary: 142 76% 36%;
  --secondary: 45 100% 51%;
  /* ... */
}
```

### Contenido

- Edita los archivos en `includes/` para modificar el contenido
- Las preguntas frecuentes están en `includes/faq.php`
- La información de contacto está en `includes/footer.php`

## Notas

- El proyecto usa Tailwind CSS desde CDN para desarrollo rápido
- Para producción, considera compilar Tailwind CSS localmente
- Las imágenes deben estar en la carpeta `assets/`
- El archivo `.htaccess` está configurado para Apache

## Soporte

Para problemas o preguntas, revisa la documentación de PHP y Apache.

