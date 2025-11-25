# Comandos para Actualizar el Repositorio al Último Commit

## 📋 Lista de Commits en el Repositorio

### Historial Completo de Commits:

1. **82a27ea** - `1.0.0` (Commit inicial)
   - Commit base del proyecto

2. **69574c3** - `5.0.0 - Reorganización modular: estructura api, cms, template, web`
   - Reorganización completa del proyecto en estructura modular
   - Creación de directorios: api/, cms/, template/, web/
   - Movimiento de archivos a sus nuevas ubicaciones

3. **c71eb9d** - `5.1.0`
   - Actualización del proyecto

4. **c934d8a** - `5.2.0` ⬅️ **ÚLTIMO COMMIT EN REMOTO**
   - Última versión disponible en GitHub

---

## 🔄 Comandos para Actualizar al Último Commit

### Opción 1: Actualizar Conservando Cambios Locales (Recomendado)

```bash
# 1. Ver el estado actual del repositorio
# Descripción: Muestra qué archivos han sido modificados, agregados o eliminados
git status

# 2. Guardar cambios locales temporalmente (si tienes cambios sin commitear)
# Descripción: Guarda tus cambios actuales en un stash para poder actualizar sin perderlos
git stash

# 3. Obtener los últimos cambios del repositorio remoto
# Descripción: Descarga información sobre los commits del remoto sin modificar tu código local
git fetch origin

# 4. Ver las diferencias entre tu rama local y la remota
# Descripción: Muestra qué commits están en el remoto que no tienes localmente
git log HEAD..origin/main --oneline

# 5. Actualizar tu rama local con los cambios del remoto
# Descripción: Fusiona los cambios del remoto en tu rama local (pull = fetch + merge)
git pull origin main

# 6. Recuperar tus cambios guardados (si usaste stash)
# Descripción: Restaura los cambios que guardaste temporalmente antes de actualizar
git stash pop
```

### Opción 2: Actualizar Descartando Cambios Locales (⚠️ CUIDADO: Pierdes cambios locales)

```bash
# 1. Ver el estado actual
# Descripción: Verifica qué archivos tienen cambios
git status

# 2. Descartar todos los cambios locales
# Descripción: Elimina TODOS los cambios no guardados y restaura los archivos al último commit
git reset --hard HEAD

# 3. Obtener los últimos cambios del remoto
# Descripción: Descarga información del remoto
git fetch origin

# 4. Actualizar al último commit del remoto
# Descripción: Fuerza tu rama local a ser idéntica a la rama remota (pierde cambios locales)
git reset --hard origin/main
```

### Opción 3: Actualizar con Rebase (Mantiene historial limpio)

```bash
# 1. Guardar cambios locales
# Descripción: Guarda cambios temporales
git stash

# 2. Obtener cambios del remoto
# Descripción: Descarga información del remoto
git fetch origin

# 3. Actualizar con rebase
# Descripción: Aplica tus commits locales encima de los commits remotos (historial más limpio)
git pull --rebase origin main

# 4. Recuperar cambios guardados
# Descripción: Restaura tus cambios temporales
git stash pop
```

---

## 📊 Comandos de Verificación

### Ver el Historial Completo de Commits

```bash
# Ver todos los commits con formato corto
# Descripción: Muestra el historial de commits en una línea por commit
git log --oneline --graph --decorate --all

# Ver commits con más detalles
# Descripción: Muestra autor, fecha y mensaje completo de cada commit
git log --pretty=format:"%h - %an, %ar : %s" --all

# Ver solo los últimos 5 commits
# Descripción: Limita la salida a los últimos 5 commits
git log --oneline -5
```

### Ver Diferencias Entre Local y Remoto

```bash
# Ver commits que están en remoto pero no en local
# Descripción: Muestra qué commits necesitas descargar
git log HEAD..origin/main --oneline

# Ver commits que están en local pero no en remoto
# Descripción: Muestra qué commits tienes localmente que no has subido
git log origin/main..HEAD --oneline

# Ver el estado de sincronización
# Descripción: Muestra si tu rama local está adelantada, atrasada o sincronizada
git status
```

### Ver Información del Repositorio Remoto

```bash
# Ver la URL del repositorio remoto configurado
# Descripción: Muestra la dirección del repositorio en GitHub
git remote -v

# Ver información detallada del remoto
# Descripción: Muestra más detalles sobre la configuración del remoto
git remote show origin
```

---

## 🎯 Comando Rápido (Todo en Uno)

Si solo quieres actualizar al último commit y no tienes cambios importantes locales:

```bash
# Actualizar al último commit del remoto (descarta cambios locales)
# Descripción: Comando único que actualiza tu repositorio al estado más reciente del remoto
git fetch origin && git reset --hard origin/main
```

---

## ⚠️ Notas Importantes

1. **Siempre verifica el estado** con `git status` antes de actualizar
2. **Guarda tus cambios** con `git stash` si no quieres perderlos
3. **Revisa las diferencias** con `git log HEAD..origin/main` antes de actualizar
4. **Haz backup** de cambios importantes antes de usar `git reset --hard`

---

## 📝 Estado Actual del Repositorio

- **Último commit local:** `69574c3` (5.0.0)
- **Último commit remoto:** `c934d8a` (5.2.0)
- **Commits pendientes de descargar:** 2 commits (5.1.0 y 5.2.0)

---

## 🔗 Enlaces Útiles

- Repositorio: https://github.com/sand001/lotto-v1
- Ver commits en GitHub: https://github.com/sand001/lotto-v1/commits/main

