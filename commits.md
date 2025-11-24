
1. "First commit"



# Ver el origen del repositorio remoto
git remote -v

# Ver commits remotos
git log --oneline --graph --decorate --all 

## Gestión de cambios
git status
git add .
git commit -m "5.0.0"
git push

## Comandos de Git

### Inicialización

# Ver estado de cambios
git init -b main

# Ver estado de cambios
git status

# Agregar cambios
git add .

# Crear nuevo commit
git commit -m "1.0.0"

# Crear repositorio en github
gh repo create lotto-v1 --private

# Agregar repositorio remoto
git remote add origin https://github.com/sand001/lotto-v1

# Subir cambios
git push -u origin main