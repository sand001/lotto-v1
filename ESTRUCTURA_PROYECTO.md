# Estructura del Proyecto - Lotto Sorteos

## Organización Modular

El proyecto ha sido reorganizado en una estructura modular para separar la lógica y facilitar el mantenimiento:

```
lotto-sorteos-php/
├── api/              # API REST - Endpoints de la API
│   └── index.php     # Punto de entrada de la API
├── cms/              # Panel de Administración
│   └── index.php     # Punto de entrada del CMS
├── template/         # Plantillas y componentes PHP
│   ├── navbar.php    # Barra de navegación
│   ├── hero.php      # Sección hero
│   ├── faq.php       # Preguntas frecuentes
│   └── footer.php    # Pie de página
├── web/              # Punto de entrada principal (público)
│   ├── index.php     # Archivo principal PHP
│   ├── assets/       # Recursos estáticos (imágenes)
│   ├── css/          # Estilos CSS
│   └── js/           # JavaScript
└── .htaccess         # Configuración Apache
```

## Descripción de Directorios

### `/api/`
**Propósito:** Contiene todos los endpoints de la API REST.

**Uso:**
- Endpoints para consultar sorteos
- Endpoints para gestionar usuarios
- Endpoints para operaciones del sistema
- Acceso: `http://localhost/lotto-sorteos-php/api/`

### `/cms/`
**Propósito:** Panel de administración para gestionar el contenido del sitio.

**Uso:**
- Gestión de sorteos
- Administración de usuarios
- Configuración del sitio
- Acceso: `http://localhost/lotto-sorteos-php/cms/`

### `/template/`
**Propósito:** Contiene los componentes y plantillas PHP reutilizables.

**Contenido:**
- Componentes de UI (navbar, hero, footer, etc.)
- Plantillas de páginas
- Fragmentos de código reutilizables

**Nota:** Estos archivos se incluyen desde `web/index.php` usando rutas relativas.

### `/web/`
**Propósito:** Punto de entrada principal del sitio web público.

**Contenido:**
- `index.php`: Archivo principal que incluye los templates
- `assets/`: Imágenes y recursos estáticos
- `css/`: Hojas de estilo
- `js/`: Scripts JavaScript

**Acceso:** `http://localhost/lotto-sorteos-php/web/` o `http://localhost/lotto-sorteos-php/` (redirige automáticamente)

## Rutas y Accesos

- **Sitio Web Principal:** `http://localhost/lotto-sorteos-php/web/`
- **API:** `http://localhost/lotto-sorteos-php/api/`
- **CMS:** `http://localhost/lotto-sorteos-php/cms/`

## Ventajas de esta Estructura

1. **Separación de Responsabilidades:** Cada directorio tiene un propósito específico
2. **Modularidad:** Fácil de mantener y escalar
3. **Seguridad:** El código de API y CMS está separado del código público
4. **Organización:** Estructura clara y fácil de navegar
5. **Escalabilidad:** Fácil agregar nuevas funcionalidades sin afectar otras partes

## Notas Importantes

- Los templates en `/template/` se incluyen desde `web/index.php`
- Las rutas de assets (CSS, JS, imágenes) son relativas a `/web/`
- El archivo `.htaccess` en la raíz redirige las peticiones principales a `/web/`
- Para desarrollo, asegúrate de que Apache esté configurado correctamente

