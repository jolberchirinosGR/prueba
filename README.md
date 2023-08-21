# Proyecto Prueba en Laravel

¡Bienvenidos a este Proyecto de Prueba en Laravel, Grupo Ruiz! Este proyecto ha sido creado con el propósito de demostrar las destacadas características y funcionalidades de Laravel. A través de vistas interactivas, se presentan ejemplos claros de su uso. Estoy aquí para asistirles en caso de cualquier duda. ¡Saludos!

## Visión General

En este proyecto, hemos desarrollado una serie de vistas interactivas para presentar las características clave de Laravel:

**Inicio de Sesión (Login)**: Explora cómo Laravel administra la autenticación y la gestión de usuarios.
**Inicio (Home)**: Una vista que permite apreciar las diferencias entre las distintas pantallas y que incluye un panel de administración.
**Productos (Products)**: Una vista diseñada para mostrar un listado de productos que pueden ser modificados y eliminados.

## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto en tu máquina local:

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/TheJC18/grupo_ruiz.git
   cd grupo_ruiz

2. **Instalar dependecias composer**:
   ```bash
    composer install
    php artisan key:generate

3. **Configure el archivo de entorno**:
   ```bash
    Renombre el archivo .env.example a .env y configure la base de datos y otros valores necesarios.
   *Recuerde crear una base de datos.*

4. **Instalar dependecias npm**:
   ```bash
    npm install

5. **Creacion de BD**:
   ```bash
    php artisan migrate --seed

    Esto creará las tablas en la base de datos previamente creada y ejecutará los seeders para poblar la base de datos con datos de ejemplo.


5. **Desplegar**:
   ```bash
     Se requieren 2 consolas:
     1. En la primera consola, ejecute el comando php artisan serve 
     2. En la segunda consola, ejecute el comando npm install && npm run dev (Preferiblemente utilizando Git Bash en Visual Studio Code)
 
    Después de esto, podrá acceder al proyecto a través de la dirección: http://127.0.0.1:8000.

Soporte
Si necesita ayuda con este proyecto, no dude en crear un problema en el repositorio o ponerse en contacto con nosotros por correo electrónico.

Licencia
Este proyecto está bajo la Licencia Jolber Chirinos. Consulte el archivo LICENSE para obtener más información.

Por favor, recuerde personalizar los nombres de los archivos, los enlaces, las rutas y la información proporcionada.
