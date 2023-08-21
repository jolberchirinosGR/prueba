# Proyecto Prueba en Laravel

¡Grupo Ruiz, Bienvenido al Proyecto prueba en Laravel! Este proyecto demuestra las características y funcionalidades destacadas de Laravel mediante vistas interactivas y proporciona instrucciones claras para su instalación, en el cual se quiso plasmar los requirimentos inciales.

Espero que os guste, cualquier duda estoy para servirles, Saludos.

## Vista General

En este proyecto, hemos creado una serie de vistas interactivas para mostrarte las características clave de Laravel:

- **Login**: Explora cómo Laravel maneja la autenticación y la gestión de usuarios.
- **Home**: Tan solo una vista para apreciar las diferencias de una vista y otra y haciendo uso de un panel admin.
- **Products**: Una vista creada para la muestra de un listado de productos que se pueden modificar y eliminar.

## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto en tu máquina local:

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/TheJC18/grupo_ruiz.git
   cd grupo_ruiz

2. **Instalar dependecias composer**:
   ```bash
    composer install
    Configura el archivo de entorno:

    Renombra el archivo .env.example a .env y configura la base de datos y otros valores necesarios.
    *Recuerda crear una base de datos.*

3. **Instalar dependecias npm**:
   ```bash
    npm install

4. **Creacion de BD**:
   ```bash
    php artisan migrate --seed

    Con esto crearemos los campos de nuestra base de datos previamente creada y ejecutara los seeders para tener los datos generedos por el proyecto.


5. **Desplegar**:
   ```bash
    Necesitamos 2 consolas:
        1 Consola- Ejecutamos el comando php artisan serve 
        2 Consola- Ejecutamos el comando npm install && npm run dev (Prefeiblemente una consola git bash en vscode)
    
    Luego de esto se puede usar usar el la direccion: http://127.0.0.1:8000 para acceder a nuestro proyecto.

Soporte
Si necesitas ayuda con este proyecto, no dudes en crear un problema en el repositorio o contactarnos por correo electrónico.

Licencia
Este proyecto está bajo la Licencia Jolber Chirinos. Consulta el archivo LICENSE para obtener más información.

Recuerda personalizar los nombres de los archivos, los enlaces, las rutas y la información