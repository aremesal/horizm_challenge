<p align="center"><a href="https://horizm.com/" target="_blank"><img src="https://horizm.com/wp-content/uploads/2020/11/horizm-logo.svg" width="400"></a></p>

# Horizm Backend Challenge

Challenge de desarrollo backend con Laravel para Horizm.

Álvaro Remesal Royo - 2022-12-02

## Instalación


### Requisitos

* PHP 7.3 o superior (código original no compatible con 8.1+)
* Laravel 8.x y sus dependencias
* SQLite

### Despliegue

* Copiar archivo de configuración: `cp .env.example .env` y ajustar los valores según sea necesario.
* Crear archivo de BDD si no existe: `sqlite storage/database/database.sqlite`
* `composer install --optimize-autoloader` (añadir `--no-dev` para entorno de producción).
* `npm install && npm run dev` (o `npm run prod` para entorno de producción).
* `php artisan migrate:fresh`
* Asegurar documentación API en su última versión: `php artisan scribe:generate`

Configurar el servidor web según el entorno donde se esté desplegando. Para desarrollo local se puede lanzar
el servidor integrado de Laravel: `php artisan serve` que expondrá la aplicación en [http://127.0.0.1:8000](http://127.0.0.1:8000).

A lo largo de estas instrucciones se usa http://127.0.0.1:8000 como la URL de la aplicación en los ejemplos y enlaces. Cambiar por la URL real donde se despliegue la aplicación.

## Uso de la aplicación
### Importar datos
Para importar los posts y usuarios se puede usar un comando o una llamada API.

Al importar los datos el procedimiento es:

* Importa los primeros 50 (número configurable en .env) posts desde la fuente (configurable en .env). Si un post ya existía se actualiza el body y se vuelve a calcular el rating por si ha cambiado al cambiar el body.
* Importa los usuarios desde la fuente (configurable en .env) e inserta en BDD los que tengan posts en la BDD. Si un usuario ya existe no se actualiza ningún dato.

#### Importar datos por comando

`php artisan horizm:getposts`

El comando importa los posts, los usuarios relacionados, e informa del número total de importados.

#### Importar datos por API

Se debe hacer una llamada a [http://127.0.0.1:8000/api/v1/data/import-with-users](http://127.0.0.1:8000/api/v1/data/import-with-users). Se devuelve un JSON informando del número de posts importados
y actualizados, y el número de usuarios importados y ya existentes.

### Peticiones a la API

Se expone una API sencilla para realizar tres acciones básicas:

* [http://127.0.0.1:8000/api/v1/posts/top](http://127.0.0.1:8000/api/v1/posts/top): devuelve un JSON con todos los usuarios y su post con mayor valoración.
* [http://127.0.0.1:8000/api/v1/posts/{id}](http://127.0.0.1:8000/api/v1/posts/{id}): devuelve un JSON con toda la información del post solicitado y el nombre del usuario  propietario del post. Si el post no existe devuelve un 404.
* [http://127.0.0.1:8000/api/v1/users](http://127.0.0.1:8000/api/v1/users): devuelve un JSON con todos los usuarios y sus posts, ordenados los usuarios por la media de valoración de sus posts.

### Documentación de la API

Se puede consultar la [documentación completa de la API](http://127.0.0.1:8000/docs).

Se puede descargar la [colección de acciones para Postman](http://127.0.0.1:8000/docs.postman).

### Tests

Se han creado diversos test funcionales para garantizar el funcionamiento ante cambios de código.
Para ejecutar los tests: `php artisan test`
