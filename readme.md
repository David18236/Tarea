# Tarea Opcional
### En que consiste
El proyecto consiste en una aplicación de desarrollo web en donde se puede registrar un vehículo (con atributos de placa y marca) relacionado con una persona (con atributos de nombre y cédula). La aplicación permite ver el listado de los vehículos registrados con su placa  y marca; Además de poder ver cuantos vehículos de cada marca existen en el sistema.
### Como hacer que funcione
Para que el proyecto funcione correctamente se deben realizar los siguientes pasos:
1.  Realizar la configuración del archivo ".env" para determinar que gestor de base de datos se va a trabajar, y que nombre se le va a dar a la base de datos.
2. Escribir el comando "php composer install".
3. Escribir el comando "php artisan key:generate".
4. Escribir el comando "php artisan migrate" en la consola para realizar la migración de la base de datos.
5. Escribir el comando "php artisan db:seed" para cargar los datos iniciales.
6. Escribir el comando "php artisan serve" para que la aplicación pueda correr.
### Como utilizarlo
1. En la URL del navegador se debe escribir "localhost:8000/A765".
2. Se mostrará una interfaz con 3 enlaces (Registrar Vehículo, Listar Vehículos, Estadísticas Vehículos).
3. Si se da "click" en "Registrar Vehículos" se mostrará un formulario que deberá ser llenado. Una vez completado el formulario se dará "click" en el botón registrar.
4. Si se da "click" en "Listar Vehículos" se mostrará la lista de vehículos que han sido registrados en la base de datos.
5. Si se da "click" en "Estadísticas Vehículos" se mostrará cuantos vehículos se han registrado de cada una de las marcas.
6. Cada una de la interfaces que se abren con los enlaces posee un botón "volver" que redirige a la página de inicio.

