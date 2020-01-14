ApiRest del proyecto de PoliJobs

1. Clonar el repositorio
2. Ejecutar composer install
3. Modificar el .env con las respectivas credenciales de la base de datos 
3. Correr el proyecto con php -S 127.0.0.1:8000 -t public/
4. Para ver las rutas disponibles php bin/console debug:router
5. Probar dichas rutas con Postman
Ejemplo:
Si quiero obtener las empresas, uso método GET con la siguiente ruta: http://localhost:8000/api/ofertas/
