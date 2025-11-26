# Solución para Error 500 en VirtualHost

## Problema
Al configurar el VirtualHost para `web.lotto-v1.com`, se recibe un error "Internal Server Error (500)".

## Causa
El VirtualHost está incompleto. Faltan las directivas `<Directory>` que permiten el acceso al directorio y habilitan los archivos `.htaccess`.

## Solución Paso a Paso

### 1. Editar httpd-vhosts.conf

Abre el archivo:
```
C:\xampp\apache\conf\extra\httpd-vhosts.conf
```

**Configuración INCORRECTA (incompleta):**
```apache
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/lotto-v1/web"
    ServerName web.lotto-v1.com
</VirtualHost>
```

**Configuración CORRECTA (completa):**
```apache
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/lotto-v1/web"
    ServerName web.lotto-v1.com
    
    <Directory "C:/xampp/htdocs/lotto-v1/web">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog "C:/xampp/apache/logs/web.lotto-v1.com-error.log"
    CustomLog "C:/xampp/apache/logs/web.lotto-v1.com-access.log" common
</VirtualHost>
```

### 2. Verificar que VirtualHosts esté habilitado

Abre el archivo:
```
C:\xampp\apache\conf\httpd.conf
```

Busca esta línea:
```apache
#Include conf/extra/httpd-vhosts.conf
```

Debe estar **SIN el símbolo #**:
```apache
Include conf/extra/httpd-vhosts.conf
```

### 3. Configurar el archivo hosts

Abre el archivo (como Administrador):
```
C:\Windows\System32\drivers\etc\hosts
```

Agrega esta línea:
```
127.0.0.1       web.lotto-v1.com
```

### 4. Reiniciar Apache

1. Abre el Panel de Control de XAMPP
2. Detén Apache (Stop)
3. Inicia Apache nuevamente (Start)

### 5. Probar el acceso

Abre tu navegador y visita:
```
http://web.lotto-v1.com/
```

## Explicación de las Directivas

- **`<Directory>`**: Define las reglas para el directorio específico
- **`Options Indexes FollowSymLinks`**: Permite listar directorios y seguir enlaces simbólicos
- **`AllowOverride All`**: Permite que los archivos `.htaccess` sobrescriban la configuración
- **`Require all granted`**: Permite el acceso a todos los usuarios (Apache 2.4+)
- **`ErrorLog` y `CustomLog`**: Archivos de log para depuración

## Verificación de Logs

Si aún hay problemas, revisa los logs:

1. **Log de errores del VirtualHost:**
   ```
   C:\xampp\apache\logs\web.lotto-v1.com-error.log
   ```

2. **Log general de errores de Apache:**
   ```
   C:\xampp\apache\logs\error.log
   ```

## Solución de Problemas Adicionales

### Si el error persiste:

1. **Verifica que el directorio existe:**
   - Confirma que `C:\xampp\htdocs\lotto-v1\web` existe y contiene `index.php`

2. **Verifica permisos:**
   - En Windows generalmente no hay problemas, pero asegúrate de que Apache tenga acceso

3. **Desactiva temporalmente el .htaccess:**
   - Renombra `C:\xampp\htdocs\lotto-v1\.htaccess` a `.htaccess.bak`
   - Prueba nuevamente
   - Si funciona, el problema está en el `.htaccess`

4. **Verifica la sintaxis de Apache:**
   - Abre PowerShell como Administrador
   - Ejecuta: `C:\xampp\apache\bin\httpd.exe -t`
   - Debe decir "Syntax OK"

## Notas Importantes

- Usa barras normales `/` o barras invertidas `\` en las rutas de Windows para Apache
- Siempre reinicia Apache después de cambiar la configuración
- Edita el archivo `hosts` como Administrador
- El archivo `hosts` no tiene extensión

