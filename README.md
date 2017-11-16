Geopagos Examen PHP - Figuras
=============================

A continuación se presenta la solución a la prueba técnica 'Examen PHP - Figuras'.

Uso
---

Instalar el paquete Figures y uego ejecutar el script principal:

```
$ cd figures
$ composer install
$ php doFigures.php
```

Tambien se puede ejecutar en un contenedor Docker. Para ello habría que 
construir primero la imagen y luego crear  ejecutar el contenedor:

```
$ cd path/to/directory/examen-php-figuras
$ docker build -t figures .
$ docker run --rm --name figures figures php doFigures.php
```