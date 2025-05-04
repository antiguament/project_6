#!/bin/bash

# Script mejorado para automatizar la conexión SSH
# Permite seleccionar y navegar a diferentes dominios, clonar repositorios y más

# Configuración del servidor
SSH_USER="u705250598"
SSH_HOST="217.15.173.15"
SSH_PORT="65002"

# Función para mostrar el menú
show_menu() {
    echo "===================================="
    echo "  HERRAMIENTA DE ACCESO A DOMINIOS  "
    echo "===================================="
    echo "1) Conectar a un dominio específico"
    echo "2) Listar dominios disponibles"
    echo "3) Subir archivo al dominio"
    echo "4) Backup de dominio"
    echo "5) Clonar repositorio Git en dominio"
    echo "6) Instalar Laravel en dominio"
    echo "7) Salir"
    echo "===================================="
    echo -n "Seleccione una opción: "
}

# Función para conectar a un dominio
connect_to_domain() {
    echo -n "Ingrese el nombre del dominio (ejemplo: domimandados.sancarloscomercio.com): "
    read domain
    
    if [ -z "$domain" ]; then
        echo "Error: El nombre del dominio no puede estar vacío."
        return 1
    fi
    
    echo "Conectando a $domain..."
    ssh -p $SSH_PORT -t $SSH_USER@$SSH_HOST "
    if [ -d \"domains/$domain\" ]; then
        cd domains/$domain/public_html && 
        echo \"Conectado a $domain/public_html\" &&
        bash -l
    else
        echo \"Error: El dominio '$domain' no existe en el servidor.\"
        exit 1
    fi
    "
}

# Función para listar dominios
list_domains() {
    echo "Listando dominios disponibles en el servidor..."
    ssh -p $SSH_PORT $SSH_USER@$SSH_HOST "ls -la domains | grep '^d'"
}

# Función para subir archivos
upload_file() {
    echo -n "Ingrese el nombre del dominio: "
    read domain
    
    if [ -z "$domain" ]; then
        echo "Error: El nombre del dominio no puede estar vacío."
        return 1
    fi
    
    echo -n "Ruta del archivo local a subir: "
    read local_file
    
    if [ ! -f "$local_file" ]; then
        echo "Error: El archivo no existe."
        return 1
    fi
    
    echo -n "Ruta destino (relativa a public_html, dejar en blanco para raíz): "
    read remote_path
    
    remote_full_path="domains/$domain/public_html"
    if [ ! -z "$remote_path" ]; then
        remote_full_path="$remote_full_path/$remote_path"
    fi
    
    echo "Subiendo archivo a $domain..."
    scp -P $SSH_PORT "$local_file" "$SSH_USER@$SSH_HOST:$remote_full_path"
    
    if [ $? -eq 0 ]; then
        echo "Archivo subido correctamente."
    else
        echo "Error al subir el archivo."
    fi
}

# Función para hacer backup de un dominio
backup_domain() {
    echo -n "Ingrese el nombre del dominio a respaldar: "
    read domain
    
    if [ -z "$domain" ]; then
        echo "Error: El nombre del dominio no puede estar vacío."
        return 1
    fi
    
    timestamp=$(date +"%Y%m%d_%H%M%S")
    backup_file="backup_${domain}_${timestamp}.tar.gz"
    
    echo "Creando backup de $domain..."
    ssh -p $SSH_PORT $SSH_USER@$SSH_HOST "
    if [ -d \"domains/$domain\" ]; then
        cd domains &&
        tar -czf /tmp/$backup_file $domain &&
        echo \"Backup creado en el servidor como /tmp/$backup_file\"
    else
        echo \"Error: El dominio '$domain' no existe en el servidor.\"
        exit 1
    fi
    "
    
    echo -n "¿Desea descargar el backup a su máquina local? (s/n): "
    read download_choice
    
    if [ "$download_choice" = "s" ] || [ "$download_choice" = "S" ]; then
        echo "Descargando backup..."
        scp -P $SSH_PORT "$SSH_USER@$SSH_HOST:/tmp/$backup_file" .
        
        if [ $? -eq 0 ]; then
            echo "Backup descargado correctamente como $backup_file"
            ssh -p $SSH_PORT $SSH_USER@$SSH_HOST "rm /tmp/$backup_file"
        else
            echo "Error al descargar el backup."
        fi
    fi
}

# Función para clonar repositorio Git
clone_repository() {
    echo -n "Ingrese el nombre del dominio: "
    read domain
    
    if [ -z "$domain" ]; then
        echo "Error: El nombre del dominio no puede estar vacío."
        return 1
    fi
    
    echo -n "Ingrese la URL del repositorio Git (ejemplo: https://github.com/antiguament/app_81.git): "
    read repo_url
    
    if [ -z "$repo_url" ]; then
        echo "Error: La URL del repositorio no puede estar vacía."
        return 1
    fi
    
    echo -n "Ruta destino (relativa a public_html, dejar en blanco para raíz): "
    read remote_path
    
    remote_full_path="domains/$domain/public_html"
    if [ ! -z "$remote_path" ]; then
        remote_full_path="$remote_full_path/$remote_path"
    fi
    
    echo "Clonando repositorio en $domain..."
    ssh -p $SSH_PORT $SSH_USER@$SSH_HOST "
    if [ -d \"domains/$domain\" ]; then
        cd $remote_full_path &&
        git clone $repo_url &&
        echo \"Repositorio clonado exitosamente en $remote_full_path\"
    else
        echo \"Error: El dominio '$domain' no existe en el servidor.\"
        exit 1
    fi
    "
    
    if [ $? -eq 0 ]; then
        echo "Repositorio clonado correctamente."
    else
        echo "Error al clonar el repositorio."
    fi
}

# Función para instalar Laravel
install_laravel() {
    echo -n "Ingrese el nombre del dominio: "
    read domain
    
    if [ -z "$domain" ]; then
        echo "Error: El nombre del dominio no puede estar vacío."
        return 1
    fi
    
    echo -n "Nombre de la carpeta del proyecto Laravel (ejemplo: app_81): "
    read project_name
    
    if [ -z "$project_name" ]; then
        echo "Error: El nombre del proyecto no puede estar vacío."
        return 1
    fi
    
    echo -n "¿Desea instalar desde un repositorio Git? (s/n): "
    read git_choice
    
    if [ "$git_choice" = "s" ] || [ "$git_choice" = "S" ]; then
        echo -n "Ingrese la URL del repositorio Git (ejemplo: https://github.com/antiguament/app_81.git): "
        read repo_url
        
        if [ -z "$repo_url" ]; then
            echo "Error: La URL del repositorio no puede estar vacía."
            return 1
        fi
    fi
    
    echo -n "Nombre para la aplicación (APP_NAME): "
    read app_name
    
    echo -n "URL de la aplicación (APP_URL): "
    read app_url
    
    echo -n "Nombre de la base de datos (DB_DATABASE): "
    read db_name
    
    echo -n "Usuario de la base de datos (DB_USERNAME): "
    read db_user
    
    echo -n "Contraseña de la base de datos (DB_PASSWORD): "
    read db_password
    
    echo "Instalando Laravel en $domain..."
    ssh -p $SSH_PORT -t $SSH_USER@$SSH_HOST "
    if [ -d \"domains/$domain\" ]; then
        cd domains/$domain/public_html &&
        
        # Clonar repositorio o crear nuevo proyecto
        if [ \"$git_choice\" = \"s\" ] || [ \"$git_choice\" = \"S\" ]; then
            git clone $repo_url $project_name && cd $project_name
        else
            echo 'Creación de proyecto Laravel desde cero no implementada'
            exit 1
        fi
        
        # Configurar permisos
        chmod -R 775 storage
        chmod -R 775 bootstrap/cache
        
        # Instalar dependencias
        composer2 install
        
        # Configurar .env
        cp .env.example .env
        
        # Generar clave
        php artisan key:generate
        
        # Editar .env
        sed -i \"s/APP_NAME=.*/APP_NAME=$app_name/g\" .env
        sed -i \"s/APP_ENV=.*/APP_ENV=production/g\" .env
        sed -i \"s/APP_DEBUG=.*/APP_DEBUG=false/g\" .env
        sed -i \"s|APP_URL=.*|APP_URL=$app_url|g\" .env
        sed -i \"s/DB_DATABASE=.*/DB_DATABASE=$db_name/g\" .env
        sed -i \"s/DB_USERNAME=.*/DB_USERNAME=$db_user/g\" .env
        sed -i \"s/DB_PASSWORD=.*/DB_PASSWORD=$db_password/g\" .env
        
        # Ejecutar migraciones
        php artisan migrate
        
        # Crear .htaccess
        echo 'RewriteEngine On' > ../.htaccess
        echo 'RewriteRule ^(.*)$ $project_name/public/$1 [L]' >> ../.htaccess
        
        echo \"Laravel instalado correctamente en domains/$domain/public_html/$project_name\"
    else
        echo \"Error: El dominio '$domain' no existe en el servidor.\"
        exit 1
    fi
    "
}

# Menú principal
while true; do
    clear
    show_menu
    read option
    
    case $option in
        1)
            connect_to_domain
            ;;
        2)
            list_domains
            echo -n "Presione Enter para continuar..."
            read
            ;;
        3)
            upload_file
            echo -n "Presione Enter para continuar..."
            read
            ;;
        4)
            backup_domain
            echo -n "Presione Enter para continuar..."
            read
            ;;
        5)
            clone_repository
            echo -n "Presione Enter para continuar..."
            read
            ;;
        6)
            install_laravel
            echo -n "Presione Enter para continuar..."
            read
            ;;
        7)
            echo "Saliendo..."
            exit 0
            ;;
        *)
            echo "Opción inválida. Presione Enter para continuar..."
            read
            ;;
    esac
done