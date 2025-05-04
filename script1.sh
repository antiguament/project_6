#!/bin/bash

# Colores para mensajes
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${YELLOW}=== AUTOMATIZACIÓN DE CREACIÓN Y SUBIDA DE REPOSITORIO ===${NC}"

# Configuración - Valores por defecto
TEMPLATE_REPO="https://github.com/antiguament/project_4.git"
NEW_REPO="https://github.com/antiguament/project_6.git"
COMMIT_MESSAGE="commit numero uno1 project_6"
DESTINATION_DIR="project_6"

# Solicitar información personalizada
read -p "URL del repositorio template [${TEMPLATE_REPO}]: " input_template
TEMPLATE_REPO=${input_template:-$TEMPLATE_REPO}

read -p "URL del nuevo repositorio [${NEW_REPO}]: " input_new_repo
NEW_REPO=${input_new_repo:-$NEW_REPO}

read -p "Mensaje para el commit [${COMMIT_MESSAGE}]: " input_commit
COMMIT_MESSAGE=${input_commit:-$COMMIT_MESSAGE}

read -p "Directorio de destino [${DESTINATION_DIR}]: " input_dir
DESTINATION_DIR=${input_dir:-$DESTINATION_DIR}

# Función para mostrar progreso
show_step() {
    echo -e "${GREEN}[Paso $1] $2${NC}"
}

# Función para manejar errores
handle_error() {
    echo -e "${RED}ERROR: $1${NC}"
    exit 1
}

# Crear directorio de destino si no existe
show_step "0" "Creando directorio de destino: ${DESTINATION_DIR}"
mkdir -p "$DESTINATION_DIR" || handle_error "No se pudo crear el directorio de destino"

# Entrar al directorio de destino
cd "$DESTINATION_DIR" || handle_error "No se pudo acceder al directorio de destino"

# 1. Clonar repositorio template
show_step "1" "Clonando repositorio template desde ${TEMPLATE_REPO}"
git clone $TEMPLATE_REPO . || handle_error "No se pudo clonar el repositorio template"

# 2. Borrar configuración git existente
show_step "2" "Borrando configuración git existente"
rm -rf .git || handle_error "No se pudo borrar la carpeta .git"

# 3. Inicializar nuevo repositorio git
show_step "3" "Inicializando nuevo repositorio git"
git init || handle_error "No se pudo inicializar git"

# 4. Revisar estado
show_step "4" "Revisando estado de git"
git status

# 5. Agregar archivos al staging
show_step "5" "Agregando archivos al staging"
git add . || handle_error "No se pudieron agregar los archivos"

# 6. Realizar commit
show_step "6" "Realizando commit con mensaje: ${COMMIT_MESSAGE}"
git commit -m "$COMMIT_MESSAGE" || handle_error "No se pudo realizar el commit"

# 7. Mostrar log
show_step "7" "Mostrando log de git"
git log

# 8. Agregar remote
show_step "8" "Agregando remote origin: ${NEW_REPO}"
git remote add origin $NEW_REPO || handle_error "No se pudo agregar el remote"

# 9. Subir al repositorio
show_step "9" "Subiendo al repositorio remoto"
git push -u origin master || handle_error "No se pudo subir al repositorio remoto"

# Volver al directorio original
cd - > /dev/null

echo -e "${GREEN}¡Proceso completado exitosamente!${NC}"
echo -e "${YELLOW}El repositorio ha sido creado y subido a: ${NEW_REPO}${NC}"
echo -e "${YELLOW}Los archivos están en: $(pwd)/${DESTINATION_DIR}${NC}"